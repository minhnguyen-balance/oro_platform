<?php

namespace Oro\Bundle\ImapBundle\Connector;

use Oro\Bundle\ImapBundle\Connector\Search\SearchQuery;
use Oro\Bundle\ImapBundle\Connector\Search\SearchQueryBuilder;
use Oro\Bundle\ImapBundle\Connector\Search\SearchStringManagerInterface;
use Oro\Bundle\ImapBundle\Mail\Storage\Imap;
use Oro\Bundle\ImapBundle\Mail\Storage\Message;
use Oro\Bundle\ImapBundle\Mail\Storage\Folder;

/**
 * A base class for connectors intended to work with email's servers through IMAP protocol.
 */
class ImapConnector
{
    /**
     * @var ImapConfig
     */
    protected $config;

    /**
     * @var ImapServicesFactory
     */
    protected $factory;

    /**
     * @var Imap
     */
    protected $imap;

    /**
     * @var SearchStringManagerInterface
     */
    protected $searchStringManager;

    /**
     * @param ImapConfig $config
     * @param ImapServicesFactory $factory
     */
    public function __construct(ImapConfig $config, ImapServicesFactory $factory)
    {
        $this->config = $config;
        $this->factory = $factory;
        $this->imap = null;
    }

    /**
     * Gets the search query builder
     *
     * @return SearchQueryBuilder
     */
    public function getSearchQueryBuilder()
    {
        $this->ensureConnected();

        return new SearchQueryBuilder(new SearchQuery($this->searchStringManager));
    }

    /**
     * Get selected folder
     *
     * @throws \RuntimeException
     * @return string
     */
    public function getSelectedFolder()
    {
        $this->ensureConnected();

        return (string)$this->imap->getCurrentFolder();
    }

    /**
     * Set selected folder
     *
     * @param string $folder
     */
    public function selectFolder($folder)
    {
        $this->ensureConnected();

        $this->imap->selectFolder($folder);
    }

    /**
     * @param SearchQuery|null $query
     * @return ImapMessageIterator
     */
    public function findItems($query = null)
    {
        $this->ensureConnected();

        $searchString = '';
        if ($query !== null) {
            $searchString = $query->convertToSearchString();
        }

        if (empty($searchString)) {
            $result = new ImapMessageIterator($this->imap);
        } else {
            $ids = $this->imap->search(array($searchString));
            $result = new ImapMessageIterator($this->imap, $ids);
        }

        return $result;
    }

    /**
     * Finds folders.
     *
     * @param string|null $parentFolder The global name of a parent folder.
     * @param bool $recursive True to get all subordinate folders
     * @return Folder[]
     */
    public function findFolders($parentFolder = null, $recursive = false)
    {
        $this->ensureConnected();

        return $this->getSubFolders($this->imap->getFolders($parentFolder), $recursive);
    }

    /**
     * Finds a folder by its name.
     *
     * @param string $name The global name of the folder.
     * @return Folder
     */
    public function findFolder($name)
    {
        $this->ensureConnected();

        return $this->imap->getFolders($name);
    }

    /**
     * Retrieves item detail by its id.
     *
     * @param int $uid The UID of a message
     * @return Message
     */
    public function getItem($uid)
    {
        $this->ensureConnected();

        $id = $this->imap->getNumberByUniqueId($uid);

        return $this->imap->getMessage($id);
    }

    /**
     * Gets UIDVALIDITY of currently selected folder
     *
     * @return int
     * @throws \LogicException
     */
    public function getUidValidity()
    {
        $this->ensureConnected();

        return $this->imap->getUidValidity();
    }

    /**
     * Makes sure that there is active connection to IMAP server
     */
    protected function ensureConnected()
    {
        if ($this->imap === null) {
            $imapServices = $this->factory->createImapServices($this->config);
            $this->imap = $imapServices->getStorage();
            $this->searchStringManager = $imapServices->getSearchStringManager();
        }
    }

    /**
     * Gets sub folders.
     *
     * @param Folder $parentFolder The parent folder.
     * @param bool $recursive Determines whether
     * @return Folder[]
     */
    protected function getSubFolders(Folder $parentFolder, $recursive = false)
    {
        $result = array();
        foreach ($parentFolder as $folder) {
            $result[] = $folder;
            if ($recursive) {
                $result = array_merge($result, $this->getSubFolders($folder, $recursive));
            }
        }

        return $result;
    }
}
