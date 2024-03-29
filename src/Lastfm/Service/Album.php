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
class Album
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
     * @return Album
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
     * Tag an album using a list of user supplied tags.
     * 
     * @param string $artist The artist name
     * @param string $album The album name
     * @param string $tags A comma delimited list of user supplied tags to apply to
     * this album. Accepts a maximum of 10 tags.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @param string $sk A session key generated by authenticating a user via the
     * authentication protocol.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function addTags($artist, $album, $tags, $api_sig, $sk)
    {
        return $this->getClient()->call('album.addtags', array(
            'artist' => $artist,
            'album' => $album,
            'tags' => $tags,
            'api_sig' => $api_sig,
            'sk' => $sk,
        ));
    }

    /**
     * Get a list of Buy Links for a particular Album.  It is required that you supply
     * either the artist and track params or the mbid param.
     * 
     * @param string|null $artist The artist name
     * @param string|null $album The album
     * @param string|null $mbid The musicbrainz id for the album
     * @param string|null $autocorrect Transform misspelled artist names into correct
     * artist names, returning the correct version instead. The corrected artist name
     * will be returned in the response.
     * @param string|null $country A country name, as defined by the ISO 3166-1 country
     * names standard.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getBuylinks($artist = null, $album = null, $mbid = null, $autocorrect = null, $country = null)
    {
        return $this->getClient()->call('album.getbuylinks', array(
            'artist' => $artist,
            'album' => $album,
            'mbid' => $mbid,
            'autocorrect' => $autocorrect,
            'country' => $country,
        ));
    }

    /**
     * Get the metadata for an album on Last.fm using the album name or a musicbrainz
     * id. See playlist.fetch on how to get the album playlist.
     * 
     * @param string|null $album The album name
     * @param string|null $artist The artist name
     * @param string|null $mbid The musicbrainz id for the album
     * @param string|null $lang The language to return the biography in, expressed as
     * an ISO 639 alpha-2 code.
     * @param string|null $autocorrect Transform misspelled artist names into correct
     * artist names, returning the correct version instead. The corrected artist name
     * will be returned in the response.
     * @param string|null $username The username for the context of the request. If
     * supplied, the user's playcount for this album is included in the response.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getInfo($album = null, $artist = null, $mbid = null, $lang = null, $autocorrect = null, $username = null)
    {
        return $this->getClient()->call('album.getinfo', array(
            'album' => $album,
            'artist' => $artist,
            'mbid' => $mbid,
            'lang' => $lang,
            'autocorrect' => $autocorrect,
            'username' => $username,
        ));
    }

    /**
     * Get shouts for this album. Also available as an rss feed.
     * 
     * @param string|null $artist The artist name
     * @param string|null $mbid The musicbrainz id for the artist
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $autocorrect Transform misspelled artist names into correct
     * artist names, returning the correct version instead. The corrected artist name
     * will be returned in the response.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getShouts($artist = null, $mbid = null, $limit = null, $autocorrect = null, $page = null)
    {
        return $this->getClient()->call('album.getshouts', array(
            'artist' => $artist,
            'mbid' => $mbid,
            'limit' => $limit,
            'autocorrect' => $autocorrect,
            'page' => $page,
        ));
    }

    /**
     * Get the tags applied by an individual user to an album on Last.fm.
     * 
     * @param string $sk A session key generated by authenticating a user via the
     * authentication protocol.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @param string|null $artist The artist name
     * @param string|null $album The album name
     * @param string|null $mbid The musicbrainz id for the album
     * @param string|null $autocorrect Transform misspelled artist names into correct
     * artist names, returning the correct version instead. The corrected artist name
     * will be returned in the response.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTags($sk, $api_sig, $artist = null, $album = null, $mbid = null, $autocorrect = null)
    {
        return $this->getClient()->call('album.gettags', array(
            'sk' => $sk,
            'api_sig' => $api_sig,
            'artist' => $artist,
            'album' => $album,
            'mbid' => $mbid,
            'autocorrect' => $autocorrect,
        ));
    }

    /**
     * Get the top tags for an album on Last.fm, ordered by popularity.
     * 
     * @param string|null $artist The artist name
     * @param string|null $album The album name
     * @param string|null $mbid The musicbrainz id for the album
     * @param string|null $autocorrect Transform misspelled artist names into correct
     * artist names, returning the correct version instead. The corrected artist name
     * will be returned in the response.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopTags($artist = null, $album = null, $mbid = null, $autocorrect = null)
    {
        return $this->getClient()->call('album.gettoptags', array(
            'artist' => $artist,
            'album' => $album,
            'mbid' => $mbid,
            'autocorrect' => $autocorrect,
        ));
    }

    /**
     * Remove a user's tag from an album.
     * 
     * @param string $artist The artist name
     * @param string $album The album name
     * @param string $tag A single user tag to remove from this album.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @param string $sk A session key generated by authenticating a user via the
     * authentication protocol.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function removeTag($artist, $album, $tag, $api_sig, $sk)
    {
        return $this->getClient()->call('album.removetag', array(
            'artist' => $artist,
            'album' => $album,
            'tag' => $tag,
            'api_sig' => $api_sig,
            'sk' => $sk,
        ));
    }

    /**
     * Search for an album by name. Returns album matches sorted by relevance.
     * 
     * @param string $album The album name
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 30.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function search($album, $limit = null, $page = null)
    {
        return $this->getClient()->call('album.search', array(
            'album' => $album,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Share an album with one or more Last.fm users or other friends.
     * 
     * @param string $sk A session key generated by authenticating a user via the
     * authentication protocol.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @param string $recipient Email Address | Last.fm Username - A comma delimited
     * list of email addresses or Last.fm usernames. Maximum is 10.
     * @param string $album An album name.
     * @param string $artist An artist name.
     * @param string|null $public Optionally show in the sharing users activity feed.
     * Defaults to 0 (false).
     * @param string|null $message An optional message to send with the recommendation.
     * If not supplied a default message will be used.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function share($sk, $api_sig, $recipient, $album, $artist, $public = null, $message = null)
    {
        return $this->getClient()->call('album.share', array(
            'sk' => $sk,
            'api_sig' => $api_sig,
            'recipient' => $recipient,
            'album' => $album,
            'artist' => $artist,
            'public' => $public,
            'message' => $message,
        ));
    }


}

