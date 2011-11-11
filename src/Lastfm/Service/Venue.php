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
class Venue
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
     * @return Venue
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
     * Get a list of upcoming events at this venue.
     * 
     * @param string $venue The id for the venue you would like to fetch event listings
     * for.
     * @param string|null $festivalsonly Whether only festivals should be returned, or
     * all events.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getEvents($venue, $festivalsonly = null)
    {
        return $this->getClient()->call('venue.getevents', array(
            'venue' => $venue,
            'festivalsonly' => $festivalsonly,
        ));
    }

    /**
     * Get a paginated list of all the events held at this venue in the past.
     * 
     * @param string $venue The id for the venue you would like to fetch event listings
     * for.
     * @param string|null $festivalsonly Whether only festivals should be returned, or
     * all events.
     * @param string|null $page The page of results to return.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getPastEvents($venue, $festivalsonly = null, $page = null, $limit = null)
    {
        return $this->getClient()->call('venue.getpastevents', array(
            'venue' => $venue,
            'festivalsonly' => $festivalsonly,
            'page' => $page,
            'limit' => $limit,
        ));
    }

    /**
     * Search for a venue by venue name
     * 
     * @param string $venue The venue name you would like to search for.
     * @param string|null $page The results page you would like to fetch
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $country Filter your results by country. Expressed as an ISO
     * 3166-2 code.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function search($venue, $page = null, $limit = null, $country = null)
    {
        return $this->getClient()->call('venue.search', array(
            'venue' => $venue,
            'page' => $page,
            'limit' => $limit,
            'country' => $country,
        ));
    }


}

