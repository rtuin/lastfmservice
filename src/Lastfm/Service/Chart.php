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
class Chart
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
     * @return Chart
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
     * Get the hyped artists chart
     * 
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getHypedArtists($page = null, $limit = null)
    {
        return $this->getClient()->call('chart.gethypedartists', array(
            'page' => $page,
            'limit' => $limit,
        ));
    }

    /**
     * Get the top artists chart
     * 
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getHypedTracks($page = null, $limit = null)
    {
        return $this->getClient()->call('chart.gethypedtracks', array(
            'page' => $page,
            'limit' => $limit,
        ));
    }

    /**
     * Get the most loved tracks chart
     * 
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getLovedTracks($page = null, $limit = null)
    {
        return $this->getClient()->call('chart.getlovedtracks', array(
            'page' => $page,
            'limit' => $limit,
        ));
    }

    /**
     * Get the top artists chart
     * 
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopArtists($page = null, $limit = null)
    {
        return $this->getClient()->call('chart.gettopartists', array(
            'page' => $page,
            'limit' => $limit,
        ));
    }

    /**
     * Get the top artists chart
     * 
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopTags($page = null, $limit = null)
    {
        return $this->getClient()->call('chart.gettoptags', array(
            'page' => $page,
            'limit' => $limit,
        ));
    }

    /**
     * Get the top tracks chart
     * 
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopTracks($page = null, $limit = null)
    {
        return $this->getClient()->call('chart.gettoptracks', array(
            'page' => $page,
            'limit' => $limit,
        ));
    }


}

