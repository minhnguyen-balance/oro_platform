<?php

namespace Oro\Bundle\BatchBundle\Item\Support;

use Oro\Bundle\BatchBundle\Item\ItemWriterInterface;

/**
 * Simple ItemReaderInterface implementations that echoes
 * the receive items
 *
 */
class EchoWriter implements ItemWriterInterface
{
    /**
     * {@inheritdoc}
     */
    public function write(array $items)
    {
        foreach ($items as $item) {
            echo $item."\n";
        }
    }
}
