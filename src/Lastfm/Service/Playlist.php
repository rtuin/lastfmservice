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
class Playlist
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
     * @return Playlist
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
     * Add a track to a Last.fm user's playlist
     * 
     * @param string $playlistID The ID of the playlist - this is available in
     * user.getPlaylists.
     * @param string $track The track name to add to the playlist.
     * @param string $artist The artist name that corresponds to the track to be added.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @param string $sk A session key generated by authenticating a user via the
     * authentication protocol.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function addTrack($playlistID, $track, $artist, $api_sig, $sk)
    {
        return $this->getClient()->call('playlist.addtrack', array(
            'playlistID' => $playlistID,
            'track' => $track,
            'artist' => $artist,
            'api_sig' => $api_sig,
            'sk' => $sk,
        ));
    }

    /**
     * Create a Last.fm playlist on behalf of a user
     * 
     * @param string $sk A session key generated by authenticating a user via the
     * authentication protocol.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @param string|null $title Title for the playlist
     * @param string|null $description Description for the playlist
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function create($sk, $api_sig, $title = null, $description = null)
    {
        return $this->getClient()->call('playlist.create', array(
            'sk' => $sk,
            'api_sig' => $api_sig,
            'title' => $title,
            'description' => $description,
        ));
    }


}
