var Clank = (function()
{

    var ClankSocket = function(uri){
        /**
         * Holds the uri to connect to
         * @type {String}
         * @private
         */
        this._uri = uri;

        /**
         * Hold autobahn session reference
         * @type {Mixed}
         * @private
         */
        this._session = false;

        /**
         * Hold event callbacks
         * @type {Object}
         * @private
         */
        this._listeners = {};

        //calls the Clank Socket connect function.
        this.connect();
    }

    ClankSocket.prototype.connect = function () {
        var that = this;

        ab.connect(this._uri,

            //Function on connect
            function(session){
                that.fire({type: "socket/connect", data: session });
            },

            //Function on disconnect / error
            function(code, reason){
                this._session = false;

                that.fire({type: "socket/disconnect", data: {code: code, reason: reason}});
            }
        );
    };


    /***************************************
     * Event Handling, Listeners etc.
     */


    /**
     * Adds a listener for an event type
     *
     * @param {String} type
     * @param {function} listener
     */
    ClankSocket.prototype.on = function(type, listener){
        if (typeof this._listeners[type] == "undefined"){
            this._listeners[type] = [];
        }

        this._listeners[type].push(listener);
    };

    /**
     * Fires an event for all listeners.
     * @param {String} event
     */
    ClankSocket.prototype.fire = function(event){
        if (typeof event == "string"){
            event = { type: event };
        }
        if (!event.target){
            event.target = this;
        }

        if (!event.type){  //falsy
            throw new Error("Event object missing 'type' property.");
        }

        if (this._listeners[event.type] instanceof Array){
            var listeners = this._listeners[event.type];
            for (var i=0, len=listeners.length; i < len; i++){
                listeners[i].call(this, event.data);
            }
        }
    };

    /**
     * Removes a listener from an event
     *
     * @param {String} type
     * @param {function} listener
     */
    ClankSocket.prototype.off = function(type, listener){
        if (this._listeners[type] instanceof Array){
            var listeners = this._listeners[type];
            for (var i=0, len=listeners.length; i < len; i++){
                if (listeners[i] === listener){
                    listeners.splice(i, 1);
                    break;
                }
            }
        }
    };



    return {
        connect: function(uri)
        {
            return new ClankSocket(uri);
        }
    }

})();



/*
 AutobahnJS - http://autobahn.ws

 Copyright 2011, 2012 Tavendo GmbH.
 Licensed under the MIT License.
 See license text at http://www.opensource.org/licenses/mit-license.php

 AutobahnJS includes code from:

 when - http://cujojs.com

 (c) copyright B Cavalier & J Hann
 Licensed under the MIT License at:
 http://www.opensource.org/licenses/mit-license.php

 Crypto-JS - http://code.google.com/p/crypto-js/

 (c) 2009-2012 by Jeff Mott. All rights reserved.
 Licensed under the New BSD License at:
 http://code.google.com/p/crypto-js/wiki/License
*/
/*
 MIT License (c) copyright B Cavalier & J Hann */
(function(a){a(function(){function a(){}function f(b){var d=new a;d.then=function(a){try{return h(a?a(b):b)}catch(d){return e(d)}};return i(d)}function e(b){var d=new a;d.then=function(a,d){try{return d?h(d(b)):e(b)}catch(c){return e(c)}};return i(d)}function b(){var d,g,h,o,p,j,n;h=[];o=[];p=function(a,e,d){var c=b();h.push(function(b){b.then(a,e).then(c.resolve,c.reject,c.progress)});d&&o.push(d);return c.promise};j=function(b){for(var a,e=0;a=o[e++];)a(b)};n=function(b){var a,e=0;p=b.then;n=j=
function(){throw Error("already completed");};for(o=q;a=h[e++];)a(b);h=[]};d={};g=new a;g.then=d.then=function(b,a,e){return p(b,a,e)};d.promise=i(g);d.resolver=i({resolve:d.resolve=function(b){n(f(b))},reject:d.reject=function(b){n(e(b))},progress:d.progress=function(b){j(b)}});return d}function d(b){return b&&"function"===typeof b.then}function g(b,a,e,d){return h(b).then(a,e,d)}function h(e){var g;e instanceof a||(g=b(),d(e)?e.then(g.resolve,g.reject,g.progress):g.resolve(e),e=g.promise);return e}
function n(a,e,d,c,f){m(2,arguments);return g(a,function(a){function h(b){m(b)}function j(b){q(b)}function u(b){s(b)}var n,k,l,i,m,q,s,x,w;x=a.length>>>0;n=Math.max(0,Math.min(e,x));k=[];i=b();l=g(i,d,c,f);if(n){m=function(b){k.push(b);--n||(m=q=s=t,i.resolve(k))};q=function(b){m=q=s=t;i.reject(b)};s=i.progress;for(w=0;w<x;++w)w in a&&g(a[w],h,j,u)}else i.resolve(k);return l})}function j(b,a,e){b[e]=a;return b}function k(b,a,e){var d,c;d=b.length;c=[function(b,e,c){return g(b,function(b){return g(e,
function(e){return a(b,e,c,d)})})}];2<arguments.length&&c.push(e);return l.apply(b,c)}function m(b,a){for(var e,d=a.length;d>b;)if(e=a[--d],null!=e&&"function"!=typeof e)throw Error("callback is not a function");}function t(){}var i,l,s,q;g.defer=b;g.reject=function(b){return g(b,function(b){return e(b)})};g.isPromise=d;g.all=function(b,a,e,d){m(1,arguments);return g(b,function(b){return k(b,j,[])}).then(a,e,d)};g.some=n;g.any=function(b,a,e,d){return n(b,1,function(b){return a?a(b[0]):b[0]},e,d)};
g.map=function(b,a){return g(b,function(b){var e,d,c;d=b.length>>>0;e=Array(d);for(c=0;c<d;c++)c in b&&(e[c]=g(b[c],a));return k(e,j,e)})};g.reduce=function(b,a,e){var d=s.call(arguments,1);return g(b,function(b){return k.apply(q,[b].concat(d))})};g.chain=function(b,a,d){var c=2<arguments.length;return g(b,function(b){c&&(b=d);a.resolve(b);return b},function(b){a.reject(b);return e(b)},a.progress)};i=Object.freeze||function(b){return b};a.prototype=i({always:function(b,a){return this.then(b,b,a)},
otherwise:function(b){return this.then(q,b)}});s=[].slice;l=[].reduce||function(b){var a,e,d,c,g;g=0;a=Object(this);c=a.length>>>0;e=arguments;if(1>=e.length)for(;;){if(g in a){d=a[g++];break}if(++g>=c)throw new TypeError;}else d=e[1];for(;g<c;++g)g in a&&(d=b(d,a[g],g,a));return d};return g})})("function"==typeof define?define:function(a){"undefined"!=typeof module?module.exports=a():this.when=a()});("undefined"==typeof Crypto||!Crypto.util)&&function(){var a=window.Crypto={},c=a.util={rotl:function(a,b){return a<<b|a>>>32-b},rotr:function(a,b){return a<<32-b|a>>>b},endian:function(a){if(a.constructor==Number)return c.rotl(a,8)&16711935|c.rotl(a,24)&4278255360;for(var b=0;b<a.length;b++)a[b]=c.endian(a[b]);return a},randomBytes:function(a){for(var b=[];0<a;a--)b.push(Math.floor(256*Math.random()));return b},bytesToWords:function(a){for(var b=[],d=0,c=0;d<a.length;d++,c+=8)b[c>>>5]|=(a[d]&255)<<
24-c%32;return b},wordsToBytes:function(a){for(var b=[],d=0;d<32*a.length;d+=8)b.push(a[d>>>5]>>>24-d%32&255);return b},bytesToHex:function(a){for(var b=[],d=0;d<a.length;d++)b.push((a[d]>>>4).toString(16)),b.push((a[d]&15).toString(16));return b.join("")},hexToBytes:function(a){for(var b=[],d=0;d<a.length;d+=2)b.push(parseInt(a.substr(d,2),16));return b},bytesToBase64:function(a){if("function"==typeof btoa)return btoa(f.bytesToString(a));for(var b=[],d=0;d<a.length;d+=3)for(var c=a[d]<<16|a[d+1]<<
8|a[d+2],h=0;4>h;h++)8*d+6*h<=8*a.length?b.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(c>>>6*(3-h)&63)):b.push("=");return b.join("")},base64ToBytes:function(a){if("function"==typeof atob)return f.stringToBytes(atob(a));for(var a=a.replace(/[^A-Z0-9+\/]/ig,""),b=[],d=0,c=0;d<a.length;c=++d%4)0!=c&&b.push(("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".indexOf(a.charAt(d-1))&Math.pow(2,-2*c+8)-1)<<2*c|"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".indexOf(a.charAt(d))>>>
6-2*c);return b}},a=a.charenc={};a.UTF8={stringToBytes:function(a){return f.stringToBytes(unescape(encodeURIComponent(a)))},bytesToString:function(a){return decodeURIComponent(escape(f.bytesToString(a)))}};var f=a.Binary={stringToBytes:function(a){for(var b=[],d=0;d<a.length;d++)b.push(a.charCodeAt(d)&255);return b},bytesToString:function(a){for(var b=[],d=0;d<a.length;d++)b.push(String.fromCharCode(a[d]));return b.join("")}}}();("undefined"==typeof Crypto||!Crypto.util)&&function(){var a=window.Crypto={},c=a.util={rotl:function(a,b){return a<<b|a>>>32-b},rotr:function(a,b){return a<<32-b|a>>>b},endian:function(a){if(a.constructor==Number)return c.rotl(a,8)&16711935|c.rotl(a,24)&4278255360;for(var b=0;b<a.length;b++)a[b]=c.endian(a[b]);return a},randomBytes:function(a){for(var b=[];0<a;a--)b.push(Math.floor(256*Math.random()));return b},bytesToWords:function(a){for(var b=[],d=0,c=0;d<a.length;d++,c+=8)b[c>>>5]|=(a[d]&255)<<
24-c%32;return b},wordsToBytes:function(a){for(var b=[],d=0;d<32*a.length;d+=8)b.push(a[d>>>5]>>>24-d%32&255);return b},bytesToHex:function(a){for(var b=[],d=0;d<a.length;d++)b.push((a[d]>>>4).toString(16)),b.push((a[d]&15).toString(16));return b.join("")},hexToBytes:function(a){for(var b=[],d=0;d<a.length;d+=2)b.push(parseInt(a.substr(d,2),16));return b},bytesToBase64:function(a){if("function"==typeof btoa)return btoa(f.bytesToString(a));for(var b=[],d=0;d<a.length;d+=3)for(var c=a[d]<<16|a[d+1]<<
8|a[d+2],h=0;4>h;h++)8*d+6*h<=8*a.length?b.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(c>>>6*(3-h)&63)):b.push("=");return b.join("")},base64ToBytes:function(a){if("function"==typeof atob)return f.stringToBytes(atob(a));for(var a=a.replace(/[^A-Z0-9+\/]/ig,""),b=[],d=0,c=0;d<a.length;c=++d%4)0!=c&&b.push(("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".indexOf(a.charAt(d-1))&Math.pow(2,-2*c+8)-1)<<2*c|"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".indexOf(a.charAt(d))>>>
6-2*c);return b}},a=a.charenc={};a.UTF8={stringToBytes:function(a){return f.stringToBytes(unescape(encodeURIComponent(a)))},bytesToString:function(a){return decodeURIComponent(escape(f.bytesToString(a)))}};var f=a.Binary={stringToBytes:function(a){for(var b=[],d=0;d<a.length;d++)b.push(a.charCodeAt(d)&255);return b},bytesToString:function(a){for(var b=[],d=0;d<a.length;d++)b.push(String.fromCharCode(a[d]));return b.join("")}}}();
(function(){var a=Crypto,c=a.util,f=a.charenc,e=f.UTF8,b=f.Binary,d=[1116352408,1899447441,3049323471,3921009573,961987163,1508970993,2453635748,2870763221,3624381080,310598401,607225278,1426881987,1925078388,2162078206,2614888103,3248222580,3835390401,4022224774,264347078,604807628,770255983,1249150122,1555081692,1996064986,2554220882,2821834349,2952996808,3210313671,3336571891,3584528711,113926993,338241895,666307205,773529912,1294757372,1396182291,1695183700,1986661051,2177026350,2456956037,2730485921,
2820302411,3259730800,3345764771,3516065817,3600352804,4094571909,275423344,430227734,506948616,659060556,883997877,958139571,1322822218,1537002063,1747873779,1955562222,2024104815,2227730452,2361852424,2428436474,2756734187,3204031479,3329325298],g=a.SHA256=function(a,d){var e=c.wordsToBytes(g._sha256(a));return d&&d.asBytes?e:d&&d.asString?b.bytesToString(e):c.bytesToHex(e)};g._sha256=function(a){a.constructor==String&&(a=e.stringToBytes(a));var b=c.bytesToWords(a),f=8*a.length,a=[1779033703,3144134277,
1013904242,2773480762,1359893119,2600822924,528734635,1541459225],g=[],m,t,i,l,s,q,u,v,r,o,p;b[f>>5]|=128<<24-f%32;b[(f+64>>9<<4)+15]=f;for(v=0;v<b.length;v+=16){f=a[0];m=a[1];t=a[2];i=a[3];l=a[4];s=a[5];q=a[6];u=a[7];for(r=0;64>r;r++){16>r?g[r]=b[r+v]:(o=g[r-15],p=g[r-2],g[r]=((o<<25|o>>>7)^(o<<14|o>>>18)^o>>>3)+(g[r-7]>>>0)+((p<<15|p>>>17)^(p<<13|p>>>19)^p>>>10)+(g[r-16]>>>0));p=f&m^f&t^m&t;var y=(f<<30|f>>>2)^(f<<19|f>>>13)^(f<<10|f>>>22);o=(u>>>0)+((l<<26|l>>>6)^(l<<21|l>>>11)^(l<<7|l>>>25))+
(l&s^~l&q)+d[r]+(g[r]>>>0);p=y+p;u=q;q=s;s=l;l=i+o>>>0;i=t;t=m;m=f;f=o+p>>>0}a[0]+=f;a[1]+=m;a[2]+=t;a[3]+=i;a[4]+=l;a[5]+=s;a[6]+=q;a[7]+=u}return a};g._blocksize=16;g._digestsize=32})();
(function(){var a=Crypto,c=a.util,f=a.charenc,e=f.UTF8,b=f.Binary;a.HMAC=function(a,f,h,n){f.constructor==String&&(f=e.stringToBytes(f));h.constructor==String&&(h=e.stringToBytes(h));h.length>4*a._blocksize&&(h=a(h,{asBytes:!0}));for(var j=h.slice(0),h=h.slice(0),k=0;k<4*a._blocksize;k++)j[k]^=92,h[k]^=54;a=a(j.concat(a(h.concat(f),{asBytes:!0})),{asBytes:!0});return n&&n.asBytes?a:n&&n.asString?b.bytesToString(a):c.bytesToHex(a)}})();/*
 MIT License (c) 2011,2012 Copyright Tavendo GmbH. */
var AUTOBAHNJS_VERSION="0.7.3",AUTOBAHNJS_DEBUG=!1,ab=window.ab={};ab._version=AUTOBAHNJS_VERSION;
(function(){Array.prototype.indexOf||(Array.prototype.indexOf=function(a){if(null===this)throw new TypeError;var c=Object(this),f=c.length>>>0;if(0===f)return-1;var e=0;0<arguments.length&&(e=Number(arguments[1]),e!==e?e=0:0!==e&&Infinity!==e&&-Infinity!==e&&(e=(0<e||-1)*Math.floor(Math.abs(e))));if(e>=f)return-1;for(e=0<=e?e:Math.max(f-Math.abs(e),0);e<f;e++)if(e in c&&c[e]===a)return e;return-1});Array.prototype.forEach||(Array.prototype.forEach=function(a,c){var f,e;if(this===null)throw new TypeError(" this is null or not defined");
var b=Object(this),d=b.length>>>0;if({}.toString.call(a)!=="[object Function]")throw new TypeError(a+" is not a function");c&&(f=c);for(e=0;e<d;){var g;if(e in b){g=b[e];a.call(f,g,e,b)}e++}})})();ab._sliceUserAgent=function(a,c,f){var e=[],b=navigator.userAgent,a=b.indexOf(a),c=b.indexOf(c,a);0>c&&(c=b.length);f=b.slice(a,c).split(f);b=f[1].split(".");for(c=0;c<b.length;++c)e.push(parseInt(b[c],10));return{name:f[0],version:e}};
ab.getBrowser=function(){var a=navigator.userAgent;return-1<a.indexOf("Chrome")?ab._sliceUserAgent("Chrome"," ","/"):-1<a.indexOf("Safari")?ab._sliceUserAgent("Safari"," ","/"):-1<a.indexOf("Firefox")?ab._sliceUserAgent("Firefox"," ","/"):-1<a.indexOf("MSIE")?ab._sliceUserAgent("MSIE",";"," "):null};ab.browserNotSupportedMessage="Browser does not support WebSockets (RFC6455)";ab._idchars="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";ab._idlen=16;ab._subprotocol="wamp";
ab._newid=function(){for(var a="",c=0;c<ab._idlen;c+=1)a+=ab._idchars.charAt(Math.floor(Math.random()*ab._idchars.length));return a};ab.log=function(){if(window.console&&console.log)if(1<arguments.length){console.group&&console.group("Log Item");for(var a=0;a<arguments.length;a+=1)console.log(arguments[a]);console.groupEnd&&console.groupEnd()}else console.log(arguments[0])};ab._debugrpc=!1;ab._debugpubsub=!1;ab._debugws=!1;
ab.debug=function(a,c){if("console"in window)ab._debugrpc=a,ab._debugpubsub=a,ab._debugws=c;else throw"browser does not support console object";};ab.version=function(){return ab._version};ab.PrefixMap=function(){this._index={};this._rindex={}};ab.PrefixMap.prototype.get=function(a){return this._index[a]};ab.PrefixMap.prototype.set=function(a,c){this._index[a]=c;this._rindex[c]=a};ab.PrefixMap.prototype.setDefault=function(a){this._index[""]=a;this._rindex[a]=""};
ab.PrefixMap.prototype.remove=function(a){var c=this._index[a];c&&(delete this._index[a],delete this._rindex[c])};ab.PrefixMap.prototype.resolve=function(a,c){var f=a.indexOf(":");if(0<=f){var e=a.substring(0,f);if(this._index[e])return this._index[e]+a.substring(f+1)}return!0==c?a:null};ab.PrefixMap.prototype.shrink=function(a,c){for(var f=a.length;0<f;f-=1){var e=this._rindex[a.substring(0,f)];if(e)return e+":"+a.substring(f)}return!0==c?a:null};ab._MESSAGE_TYPEID_WELCOME=0;
ab._MESSAGE_TYPEID_PREFIX=1;ab._MESSAGE_TYPEID_CALL=2;ab._MESSAGE_TYPEID_CALL_RESULT=3;ab._MESSAGE_TYPEID_CALL_ERROR=4;ab._MESSAGE_TYPEID_SUBSCRIBE=5;ab._MESSAGE_TYPEID_UNSUBSCRIBE=6;ab._MESSAGE_TYPEID_PUBLISH=7;ab._MESSAGE_TYPEID_EVENT=8;ab.CONNECTION_CLOSED=0;ab.CONNECTION_LOST=1;ab.CONNECTION_RETRIES_EXCEEDED=2;ab.CONNECTION_UNREACHABLE=3;ab.CONNECTION_UNSUPPORTED=4;ab.CONNECTION_UNREACHABLE_SCHEDULED_RECONNECT=5;ab.CONNECTION_LOST_SCHEDULED_RECONNECT=6;ab._Deferred=when.defer;
ab._construct=function(a,c){return"WebSocket"in window?new WebSocket(a,c):"MozWebSocket"in window?new MozWebSocket(a,c):null};
ab.Session=function(a,c,f,e){var b=this;b._wsuri=a;b._options=e;b._websocket_onopen=c;b._websocket_onclose=f;b._websocket=null;b._websocket_connected=!1;b._session_id=null;b._wamp_version=null;b._server=null;b._calls={};b._subscriptions={};b._prefixes=new ab.PrefixMap;b._txcnt=0;b._rxcnt=0;b._websocket=ab._construct(b._wsuri,[ab._subprotocol]);if(!b._websocket){if(void 0!==f){f(ab.CONNECTION_UNSUPPORTED);return}throw ab.browserNotSupportedMessage;}b._websocket.onmessage=function(a){ab._debugws&&(b._rxcnt+=
1,console.group("WS Receive"),console.info(b._wsuri+"  ["+b._session_id+"]"),console.log(b._rxcnt),console.log(a.data),console.groupEnd());a=JSON.parse(a.data);if(a[1]in b._calls){if(a[0]===ab._MESSAGE_TYPEID_CALL_RESULT){var c=b._calls[a[1]],e=a[2];if(ab._debugrpc&&void 0!==c._ab_callobj){console.group("WAMP Call",c._ab_callobj[2]);console.timeEnd(c._ab_tid);console.group("Arguments");for(var f=3;f<c._ab_callobj.length;f+=1){var j=c._ab_callobj[f];if(void 0!==j)console.log(j);else break}console.groupEnd();
console.group("Result");console.log(e);console.groupEnd();console.groupEnd()}c.resolve(e)}else if(a[0]===ab._MESSAGE_TYPEID_CALL_ERROR){c=b._calls[a[1]];e=a[2];f=a[3];j=a[4];if(ab._debugrpc&&void 0!==c._ab_callobj){console.group("WAMP Call",c._ab_callobj[2]);console.timeEnd(c._ab_tid);console.group("Arguments");for(var k=3;k<c._ab_callobj.length;k+=1){var m=c._ab_callobj[k];if(void 0!==m)console.log(m);else break}console.groupEnd();console.group("Error");console.log(e);console.log(f);void 0!==j&&
console.log(j);console.groupEnd();console.groupEnd()}void 0!==j?c.reject({uri:e,desc:f,detail:j}):c.reject({uri:e,desc:f})}delete b._calls[a[1]]}else if(a[0]===ab._MESSAGE_TYPEID_EVENT){if(c=b._prefixes.resolve(a[1],!0),c in b._subscriptions){var t=a[1],i=a[2];ab._debugpubsub&&(console.group("WAMP Event"),console.info(b._wsuri+"  ["+b._session_id+"]"),console.log(t),console.log(i),console.groupEnd());b._subscriptions[c].forEach(function(a){a(t,i)})}}else if(a[0]===ab._MESSAGE_TYPEID_WELCOME)if(null===
b._session_id){b._session_id=a[1];b._wamp_version=a[2];b._server=a[3];if(ab._debugrpc||ab._debugpubsub)console.group("WAMP Welcome"),console.info(b._wsuri+"  ["+b._session_id+"]"),console.log(b._wamp_version),console.log(b._server),console.groupEnd();null!==b._websocket_onopen&&b._websocket_onopen()}else throw"protocol error (welcome message received more than once)";};b._websocket.onopen=function(){if(b._websocket.protocol!==ab._subprotocol)if("undefined"===typeof b._websocket.protocol)ab._debugws&&
(console.group("WS Warning"),console.info(b._wsuri),console.log("WebSocket object has no protocol attribute: WAMP subprotocol check skipped!"),console.groupEnd());else if(b._options&&b._options.skipSubprotocolCheck)ab._debugws&&(console.group("WS Warning"),console.info(b._wsuri),console.log("Server does not speak WAMP, but subprotocol check disabled by option!"),console.log(b._websocket.protocol),console.groupEnd());else throw b._websocket.close(1E3,"server does not speak WAMP"),"server does not speak WAMP (but '"+
b._websocket.protocol+"' !)";ab._debugws&&(console.group("WAMP Connect"),console.info(b._wsuri),console.log(b._websocket.protocol),console.groupEnd());b._websocket_connected=!0};b._websocket.onerror=function(){};b._websocket.onclose=function(a){ab._debugws&&(b._websocket_connected?console.log("Autobahn connection to "+b._wsuri+" lost (code "+a.code+", reason '"+a.reason+"', wasClean "+a.wasClean+")."):console.log("Autobahn could not connect to "+b._wsuri+" (code "+a.code+", reason '"+a.reason+"', wasClean "+
a.wasClean+")."));void 0!==b._websocket_onclose&&(b._websocket_connected?a.wasClean?b._websocket_onclose(ab.CONNECTION_CLOSED,"WS-"+a.code+": "+a.reason):b._websocket_onclose(ab.CONNECTION_LOST):b._websocket_onclose(ab.CONNECTION_UNREACHABLE));b._websocket_connected=!1;b._wsuri=null;b._websocket_onopen=null;b._websocket_onclose=null;b._websocket=null}};
ab.Session.prototype._send=function(a){if(!this._websocket_connected)throw"Autobahn not connected";a=JSON.stringify(a);this._websocket.send(a);this._txcnt+=1;ab._debugws&&(console.group("WS Send"),console.info(this._wsuri+"  ["+this._session_id+"]"),console.log(this._txcnt),console.log(a),console.groupEnd())};ab.Session.prototype.close=function(){this._websocket_connected&&this._websocket.close()};ab.Session.prototype.sessionid=function(){return this._session_id};
ab.Session.prototype.shrink=function(a,c){void 0===c&&(c=!0);return this._prefixes.shrink(a,c)};ab.Session.prototype.resolve=function(a,c){void 0===c&&(c=!0);return this._prefixes.resolve(a,c)};ab.Session.prototype.prefix=function(a,c){this._prefixes.set(a,c);if(ab._debugrpc||ab._debugpubsub)console.group("WAMP Prefix"),console.info(this._wsuri+"  ["+this._session_id+"]"),console.log(a),console.log(c),console.groupEnd();this._send([ab._MESSAGE_TYPEID_PREFIX,a,c])};
ab.Session.prototype.call=function(){for(var a=new ab._Deferred,c;!(c=ab._newid(),!(c in this._calls)););this._calls[c]=a;for(var f=this._prefixes.shrink(arguments[0],!0),f=[ab._MESSAGE_TYPEID_CALL,c,f],e=1;e<arguments.length;e+=1)f.push(arguments[e]);this._send(f);ab._debugrpc&&(a._ab_callobj=f,a._ab_tid=this._wsuri+"  ["+this._session_id+"]["+c+"]",console.time(a._ab_tid),console.info());return a};
ab.Session.prototype.subscribe=function(a,c){var f=this._prefixes.resolve(a,!0);f in this._subscriptions||(ab._debugpubsub&&(console.group("WAMP Subscribe"),console.info(this._wsuri+"  ["+this._session_id+"]"),console.log(a),console.log(c),console.groupEnd()),this._send([ab._MESSAGE_TYPEID_SUBSCRIBE,a]),this._subscriptions[f]=[]);if(-1===this._subscriptions[f].indexOf(c))this._subscriptions[f].push(c);else throw"callback "+c+" already subscribed for topic "+f;};
ab.Session.prototype.unsubscribe=function(a,c){var f=this._prefixes.resolve(a,!0);if(f in this._subscriptions){var e;if(void 0!==c){var b=this._subscriptions[f].indexOf(c);if(-1!==b)e=c,this._subscriptions[f].splice(b,1);else throw"no callback "+c+" subscribed on topic "+f;}else e=this._subscriptions[f].slice(),this._subscriptions[f]=[];0===this._subscriptions[f].length&&(delete this._subscriptions[f],ab._debugpubsub&&(console.group("WAMP Unsubscribe"),console.info(this._wsuri+"  ["+this._session_id+
"]"),console.log(a),console.log(e),console.groupEnd()),this._send([ab._MESSAGE_TYPEID_UNSUBSCRIBE,a]))}else throw"not subscribed to topic "+f;};
ab.Session.prototype.publish=function(){var a=arguments[0],c=arguments[1],f=null,e=null,b=null,d=null;if(3<arguments.length){if(!(arguments[2]instanceof Array))throw"invalid argument type(s)";if(!(arguments[3]instanceof Array))throw"invalid argument type(s)";e=arguments[2];b=arguments[3];d=[ab._MESSAGE_TYPEID_PUBLISH,a,c,e,b]}else if(2<arguments.length)if("boolean"===typeof arguments[2])f=arguments[2],d=[ab._MESSAGE_TYPEID_PUBLISH,a,c,f];else if(arguments[2]instanceof Array)e=arguments[2],d=[ab._MESSAGE_TYPEID_PUBLISH,
a,c,e];else throw"invalid argument type(s)";else d=[ab._MESSAGE_TYPEID_PUBLISH,a,c];ab._debugpubsub&&(console.group("WAMP Publish"),console.info(this._wsuri+"  ["+this._session_id+"]"),console.log(a),console.log(c),null!==f?console.log(f):null!==e&&(console.log(e),null!==b&&console.log(b)),console.groupEnd());this._send(d)};ab.Session.prototype.authreq=function(a,c){return this.call("http://api.wamp.ws/procedure#authreq",a,c)};
ab.Session.prototype.authsign=function(a,c){c||(c="");return Crypto.util.bytesToBase64(Crypto.HMAC(Crypto.SHA256,a,c,{asBytes:!0}))};ab.Session.prototype.auth=function(a){return this.call("http://api.wamp.ws/procedure#auth",a)};
ab._connect=function(a){var c=new ab.Session(a.wsuri,function(){a.connects+=1;a.retryCount=0;a.onConnect(c)},function(c,e){switch(c){case ab.CONNECTION_CLOSED:a.onHangup(c,"Connection was closed properly ["+e+"]");break;case ab.CONNECTION_UNSUPPORTED:a.onHangup(c,"Browser does not support WebSocket.");break;case ab.CONNECTION_UNREACHABLE:a.retryCount+=1;if(0==a.connects)a.onHangup(c,"Connection could not be established.");else if(a.retryCount<=a.options.maxRetries){var b=a.onHangup(ab.CONNECTION_UNREACHABLE_SCHEDULED_RECONNECT,
"Connection unreachable - scheduled reconnect to occur in "+a.options.retryDelay/1E3+" second(s).",{delay:a.options.retryDelay,retries:a.retryCount,maxretries:a.options.maxRetries});b?(console.log("Connection unreachable - retrying stopped by app"),a.onHangup(ab.CONNECTION_RETRIES_EXCEEDED,"Number of connection retries exceeded.")):(console.log("Connection unreachable - retrying ("+a.retryCount+") .."),window.setTimeout(ab._connect,a.options.retryDelay,a))}else a.onHangup(ab.CONNECTION_RETRIES_EXCEEDED,
"Number of connection retries exceeded.");break;case ab.CONNECTION_LOST:a.retryCount+=1;if(a.retryCount<=a.options.maxRetries)(b=a.onHangup(ab.CONNECTION_LOST_SCHEDULED_RECONNECT,"Connection lost - scheduled reconnect to occur in "+a.options.retryDelay/1E3+" second(s).",{delay:a.options.retryDelay,retries:a.retryCount,maxretries:a.options.maxRetries}))?(console.log("Connection lost - retrying stopped by app"),a.onHangup(ab.CONNECTION_RETRIES_EXCEEDED,"Connection lost.")):(console.log("Connection lost - retrying ("+
a.retryCount+") .."),window.setTimeout(ab._connect,a.options.retryDelay,a));else a.onHangup(ab.CONNECTION_RETRIES_EXCEEDED,"Connection lost.");break;default:throw"unhandled close code in ab._connect";}},a.options)};
ab.connect=function(a,c,f,e){var b={};b.wsuri=a;b.options=e?e:{};void 0==b.options.retryDelay&&(b.options.retryDelay=5E3);void 0==b.options.maxRetries&&(b.options.maxRetries=10);void 0==b.options.skipSubprotocolCheck&&(b.options.skipSubprotocolCheck=!1);if(c)b.onConnect=c;else throw"onConnect handler required!";b.onHangup=f?f:function(a,b){console.log(b)};b.connects=0;b.retryCount=0;ab._connect(b)};ab._UA_FIREFOX=/.*Firefox\/([0-9+]*).*/;ab._UA_CHROME=/.*Chrome\/([0-9+]*).*/;ab._UA_CHROMEFRAME=/.*chromeframe\/([0-9]*).*/;ab._UA_WEBKIT=/.*AppleWebKit\/([0-9+.]*)w*.*/;ab._UA_WEBOS=/.*webOS\/([0-9+.]*)w*.*/;ab._matchRegex=function(a,c){var f=c.exec(a);return f?f[1]:f};
ab.lookupWsSupport=function(){var a=navigator.userAgent;if(-1<a.indexOf("MSIE")){if(-1<a.indexOf("MSIE 10"))return[!0,!0,!0];if(-1<a.indexOf("chromeframe")){var c=parseInt(ab._matchRegex(a,ab._UA_CHROMEFRAME));return 14<=c?[!0,!1,!0]:[!1,!1,!1]}if(-1<a.indexOf("MSIE 8")||-1<a.indexOf("MSIE 9"))return[!0,!0,!0]}else{if(-1<a.indexOf("Firefox")){if(c=parseInt(ab._matchRegex(a,ab._UA_FIREFOX))){if(7<=c)return[!0,!1,!0];if(3<=c)return[!0,!0,!0]}return[!1,!1,!0]}if(-1<a.indexOf("Safari")&&-1==a.indexOf("Chrome")){if(c=
ab._matchRegex(a,ab._UA_WEBKIT))return-1<a.indexOf("Windows")&&"534+"==c||-1<a.indexOf("Macintosh")&&(c=c.replace("+","").split("."),535==parseInt(c[0])&&24<=parseInt(c[1])||535<parseInt(c[0]))?[!0,!1,!0]:-1<a.indexOf("webOS")?(c=ab._matchRegex(a,ab._UA_WEBOS).split("."),2==parseInt(c[0])?[!1,!0,!0]:[!1,!1,!1]):[!0,!0,!0]}else if(-1<a.indexOf("Chrome")){if(c=parseInt(ab._matchRegex(a,ab._UA_CHROME)))return 14<=c?[!0,!1,!0]:4<=c?[!0,!0,!0]:[!1,!1,!0]}else if(-1<a.indexOf("Android")){if(-1<a.indexOf("Firefox")||
-1<a.indexOf("CrMo"))return[!0,!1,!0];if(-1<a.indexOf("Opera"))return[!1,!1,!0];if(-1<a.indexOf("CrMo"))return[!0,!0,!0]}else if(-1<a.indexOf("iPhone")||-1<a.indexOf("iPad")||-1<a.indexOf("iPod"))return[!1,!1,!0]}return[!1,!1,!1]};
