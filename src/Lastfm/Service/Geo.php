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
class Geo
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
     * @return Geo
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
     * Get all events in a specific location by country or city name.
     * 
     * @param string|null $lat Specifies a latitude value to retrieve events for
     * (service returns nearby events by default)
     * @param string|null $location Specifies a location to retrieve events for
     * (service returns nearby events by default)
     * @param string|null $long Specifies a longitude value to retrieve events for
     * (service returns nearby events by default)
     * @param string|null $distance Find events within a specified radius (in
     * kilometres)
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 10.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getEvents($lat = null, $location = null, $long = null, $distance = null, $limit = null, $page = null)
    {
        return $this->getClient()->call('geo.getevents', array(
            'lat' => $lat,
            'location' => $location,
            'long' => $long,
            'distance' => $distance,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Get a chart of artists for a metro
     * 
     * @param string $metro The metro's name
     * @param string $country A country name, as defined by the ISO 3166-1 country
     * names standard
     * @param string|null $start Beginning timestamp of the weekly range requested
     * (c.f. geo.getWeeklyChartlist)
     * @param string|null $end Ending timestamp of the weekly range requested (c.f.
     * geo.getWeeklyChartlist)
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getMetroArtistChart($metro, $country, $start = null, $end = null)
    {
        return $this->getClient()->call('geo.getmetroartistchart', array(
            'metro' => $metro,
            'country' => $country,
            'start' => $start,
            'end' => $end,
        ));
    }

    /**
     * Get a chart of hyped (up and coming) artists for a metro
     * 
     * @param string $metro The metro's name
     * @param string $country A country name, as defined by the ISO 3166-1 country
     * names standard
     * @param string|null $start Beginning timestamp of the weekly range requested
     * (c.f. geo.getWeeklyChartlist)
     * @param string|null $end Ending timestamp of the weekly range requested (c.f.
     * geo.getWeeklyChartlist)
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getMetroHypeArtistChart($metro, $country, $start = null, $end = null)
    {
        return $this->getClient()->call('geo.getmetrohypeartistchart', array(
            'metro' => $metro,
            'country' => $country,
            'start' => $start,
            'end' => $end,
        ));
    }

    /**
     * Get a chart of tracks for a metro
     * 
     * @param string $metro The metro's name
     * @param string $country A country name, as defined by the ISO 3166-1 country
     * names standard
     * @param string|null $start Beginning timestamp of the weekly range requested
     * (c.f. geo.getWeeklyChartlist)
     * @param string|null $end Ending timestamp of the weekly range requested (c.f.
     * geo.getWeeklyChartlist)
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getMetroHypeTrackChart($metro, $country, $start = null, $end = null)
    {
        return $this->getClient()->call('geo.getmetrohypetrackchart', array(
            'metro' => $metro,
            'country' => $country,
            'start' => $start,
            'end' => $end,
        ));
    }

    /**
     * Get a chart of tracks for a metro
     * 
     * @param string $metro The metro's name
     * @param string $country A country name, as defined by the ISO 3166-1 country
     * names standard
     * @param string|null $start Beginning timestamp of the weekly range requested
     * (c.f. geo.getWeeklyChartlist)
     * @param string|null $end Ending timestamp of the weekly range requested (c.f.
     * geo.getWeeklyChartlist)
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getMetroTrackChart($metro, $country, $start = null, $end = null)
    {
        return $this->getClient()->call('geo.getmetrotrackchart', array(
            'metro' => $metro,
            'country' => $country,
            'start' => $start,
            'end' => $end,
        ));
    }

    /**
     * Get a chart of the artists which make that metro unique
     * 
     * @param string $metro The metro's name
     * @param string $country A country name, as defined by the ISO 3166-1 country
     * names standard
     * @param string|null $start Beginning timestamp of the weekly range requested
     * (c.f. geo.getWeeklyChartlist)
     * @param string|null $end Ending timestamp of the weekly range requested (c.f.
     * geo.getWeeklyChartlist)
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getMetroUniqueArtistChart($metro, $country, $start = null, $end = null)
    {
        return $this->getClient()->call('geo.getmetrouniqueartistchart', array(
            'metro' => $metro,
            'country' => $country,
            'start' => $start,
            'end' => $end,
        ));
    }

    /**
     * Get a chart of tracks for a metro
     * 
     * @param string $metro The metro's name
     * @param string $country A country name, as defined by the ISO 3166-1 country
     * names standard
     * @param string|null $start Beginning timestamp of the weekly range requested
     * (c.f. geo.getWeeklyChartlist)
     * @param string|null $end Ending timestamp of the weekly range requested (c.f.
     * geo.getWeeklyChartlist)
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getMetroUniqueTrackChart($metro, $country, $start = null, $end = null)
    {
        return $this->getClient()->call('geo.getmetrouniquetrackchart', array(
            'metro' => $metro,
            'country' => $country,
            'start' => $start,
            'end' => $end,
        ));
    }

    /**
     * Get a list of available chart periods for this metro, expressed as date ranges
     * which can be sent to the chart services.
     * 
     * @param string $metro The metro name to fetch the charts list for.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getMetroWeeklyChartlist($metro)
    {
        return $this->getClient()->call('geo.getmetroweeklychartlist', array(
            'metro' => $metro,
        ));
    }

    /**
     * Get a list of valid countries and metros for use in the other webservices
     * 
     * @param string|null $country Optionally restrict the results to those Metros from
     * a particular country, as defined by the ISO 3166-1 country names standard
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getMetros($country = null)
    {
        return $this->getClient()->call('geo.getmetros', array(
            'country' => $country,
        ));
    }

    /**
     * Get the most popular artists on Last.fm by country
     * 
     * @param string $country A country name, as defined by the ISO 3166-1 country
     * names standard
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopArtists($country, $limit = null, $page = null)
    {
        return $this->getClient()->call('geo.gettopartists', array(
            'country' => $country,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Get the most popular tracks on Last.fm last week by country
     * 
     * @param string $country A country name, as defined by the ISO 3166-1 country
     * names standard
     * @param string|null $location A metro name, to fetch the charts for (must be
     * within the country specified)
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopTracks($country, $location = null, $limit = null, $page = null)
    {
        return $this->getClient()->call('geo.gettoptracks', array(
            'country' => $country,
            'location' => $location,
            'limit' => $limit,
            'page' => $page,
        ));
    }


}

