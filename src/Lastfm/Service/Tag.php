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
class Tag
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
     * @return Tag
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
     * Get the metadata for a tag
     * 
     * @param string|null $artist The artist name
     * @param string|null $lang The language to return the biography in, expressed as
     * an ISO 639 alpha-2 code.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getInfo($artist = null, $lang = null)
    {
        return $this->getClient()->call('tag.getinfo', array(
            'artist' => $artist,
            'lang' => $lang,
        ));
    }

    /**
     * Search for tags similar to this one. Returns tags ranked by similarity, based on
     * listening data.
     * 
     * @param string $tag The tag name
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getSimilar($tag)
    {
        return $this->getClient()->call('tag.getsimilar', array(
            'tag' => $tag,
        ));
    }

    /**
     * Get the top albums tagged by this tag, ordered by tag count.
     * 
     * @param string $tag The tag name
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopAlbums($tag, $limit = null, $page = null)
    {
        return $this->getClient()->call('tag.gettopalbums', array(
            'tag' => $tag,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Get the top artists tagged by this tag, ordered by tag count.
     * 
     * @param string $tag The tag name
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopArtists($tag, $limit = null, $page = null)
    {
        return $this->getClient()->call('tag.gettopartists', array(
            'tag' => $tag,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Fetches the top global tags on Last.fm, sorted by popularity (number of times
     * used)
     * 
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopTags()
    {
        return $this->getClient()->call('tag.gettoptags', array(
        ));
    }

    /**
     * Get the top tracks tagged by this tag, ordered by tag count.
     * 
     * @param string $tag The tag name
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopTracks($tag, $limit = null, $page = null)
    {
        return $this->getClient()->call('tag.gettoptracks', array(
            'tag' => $tag,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Get an artist chart for a tag, for a given date range. If no date range is
     * supplied, it will return the most recent artist chart for this tag.
     * 
     * @param string $tag The tag name
     * @param string|null $from The date at which the chart should start from. See
     * Tag.getWeeklyChartList for more.
     * @param string|null $to The date at which the chart should end on. See
     * Tag.getWeeklyChartList for more.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getWeeklyArtistChart($tag, $from = null, $to = null, $limit = null)
    {
        return $this->getClient()->call('tag.getweeklyartistchart', array(
            'tag' => $tag,
            'from' => $from,
            'to' => $to,
            'limit' => $limit,
        ));
    }

    /**
     * Get a list of available charts for this tag, expressed as date ranges which can
     * be sent to the chart services.
     * 
     * @param string $tag The tag name
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getWeeklyChartList($tag)
    {
        return $this->getClient()->call('tag.getweeklychartlist', array(
            'tag' => $tag,
        ));
    }

    /**
     * Search for a tag by name. Returns matches sorted by relevance.
     * 
     * @param string $tag The tag name
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 30.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function search($tag, $limit = null, $page = null)
    {
        return $this->getClient()->call('tag.search', array(
            'tag' => $tag,
            'limit' => $limit,
            'page' => $page,
        ));
    }


}

