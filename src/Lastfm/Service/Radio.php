<?php
/**
 * This file is part of the Lastfm API wrapper library.
 * The file is generated based on API documentation available at
 * http://www.last.fm/api
 * 
 * @category  Last.fm
 * @package   Service
 * @link      http://github.com/rtuin/lastfmservice
 */


/** @namespace */
namespace Lastfm\Service;

/**
 * @category Last.fm
 * @package  Service
 * @link     http://github.com/rtuin/lastfmservice
 */
class Radio
{

    /**
     * @val Client An instance of the Lastfm client
     */
    public $client = null;

    /**
     * @param Client|null $client An instance of the Lastfm client
     */
    public function __construct(Client $client = null)
    {
        if (null !== $client &&  $client instanceof Client) {
            $this->client = $client;
        }
    }

    /**
     * @param Client $client An instance of the Lastfm client
     * @return Radio
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return Client An instance of the Lastfm client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Fetch new radio content periodically in an XSPF format.
     * 
     * @param string $sk A session key generated by authenticating a user via the
     * authentication protocol.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @param string|null $discovery Whether to request last.fm content with discovery
     * mode switched on.
     * @param string|null $rtp Whether the user is scrobbling or not during this radio
     * session (helps content generation)
     * @param string|null $buylinks Whether the response should contain links for
     * purchase/download, if available (default false)
     * @param string|null $speed_multiplier The rate at which to provide the stream
     * (supported multipliers are 1.0 and 2.0)
     * @param string|null $bitrate What bitrate to stream content at, in kbps
     * (supported bitrates are 64 and 128)
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getPlaylist($sk, $api_sig, $discovery = null, $rtp = null, $buylinks = null, $speed_multiplier = null, $bitrate = null)
    {
        return $this->getClient()->call('radio.getplaylist', array(
            'sk' => $sk,
            'api_sig' => $api_sig,
            'discovery' => $discovery,
            'rtp' => $rtp,
            'buylinks' => $buylinks,
            'speed_multiplier' => $speed_multiplier,
            'bitrate' => $bitrate,
        ));
    }

    /**
     * Resolve the name of a resource into a station depending on which resource it is
     * most likely to represent
     * 
     * @param string $name The tag or artist to resolve
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function search($name)
    {
        return $this->getClient()->call('radio.search', array(
            'name' => $name,
        ));
    }

    /**
     * Tune in to a Last.fm radio station.
     * 
     * @param string $sk A session key generated by authenticating a user via the
     * authentication protocol.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @param string $station A lastfm:// radio URL
     * @param string|null $lang An ISO language code to determine the language to
     * return the station name in, expressed as an ISO 639 alpha-2 code.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function tune($sk, $api_sig, $station, $lang = null)
    {
        return $this->getClient()->call('radio.tune', array(
            'sk' => $sk,
            'api_sig' => $api_sig,
            'station' => $station,
            'lang' => $lang,
        ));
    }


}

