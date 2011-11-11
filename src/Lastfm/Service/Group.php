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
class Group
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
     * @return Group
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
     * Get the hype list for a group
     * 
     * @param string $Group The last.fm group name
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getHype($Group)
    {
        return $this->getClient()->call('group.gethype', array(
            'Group' => $Group,
        ));
    }

    /**
     * Get a list of members for this group.
     * 
     * @param string $group The group name to fetch the members of.
     * @param string|null $page The results page you would like to fetch
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getMembers($group, $page = null, $limit = null)
    {
        return $this->getClient()->call('group.getmembers', array(
            'group' => $group,
            'page' => $page,
            'limit' => $limit,
        ));
    }

    /**
     * Get an album chart for a group, for a given date range. If no date range is
     * supplied, it will return the most recent album chart for this group.
     * 
     * @param string $group The last.fm group name to fetch the charts of.
     * @param string|null $from The date at which the chart should start from. See
     * Group.getWeeklyChartList for more.
     * @param string|null $to The date at which the chart should end on. See
     * Group.getWeeklyChartList for more.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getWeeklyAlbumChart($group, $from = null, $to = null)
    {
        return $this->getClient()->call('group.getweeklyalbumchart', array(
            'group' => $group,
            'from' => $from,
            'to' => $to,
        ));
    }

    /**
     * Get an artist chart for a group, for a given date range. If no date range is
     * supplied, it will return the most recent album chart for this group.
     * 
     * @param string $group The last.fm group name to fetch the charts of.
     * @param string|null $from The date at which the chart should start from. See
     * Group.getWeeklyChartList for more.
     * @param string|null $to The date at which the chart should end on. See
     * Group.getWeeklyChartList for more.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getWeeklyArtistChart($group, $from = null, $to = null)
    {
        return $this->getClient()->call('group.getweeklyartistchart', array(
            'group' => $group,
            'from' => $from,
            'to' => $to,
        ));
    }

    /**
     * Get a list of available charts for this group, expressed as date ranges which
     * can be sent to the chart services.
     * 
     * @param string $group The last.fm group name to fetch the charts list for.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getWeeklyChartList($group)
    {
        return $this->getClient()->call('group.getweeklychartlist', array(
            'group' => $group,
        ));
    }

    /**
     * Get a track chart for a group, for a given date range. If no date range is
     * supplied, it will return the most recent album chart for this group.
     * 
     * @param string $group The last.fm group name to fetch the charts of.
     * @param string|null $from The date at which the chart should start from. See
     * Group.getWeeklyChartList for more.
     * @param string|null $to The date at which the chart should end on. See
     * Group.getWeeklyChartList for more.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getWeeklyTrackChart($group, $from = null, $to = null)
    {
        return $this->getClient()->call('group.getweeklytrackchart', array(
            'group' => $group,
            'from' => $from,
            'to' => $to,
        ));
    }


}

