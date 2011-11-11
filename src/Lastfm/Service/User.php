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
class User
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
     * @return User
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
     * Get a list of tracks by a given artist scrobbled by this user, including
     * scrobble time. Can be limited to specific timeranges, defaults to all time.
     * 
     * @param string $artist The artist name you are interested in
     * @param string $user The last.fm username to fetch the recent tracks of.
     * @param string|null $startTimestamp An unix timestamp to start at.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @param string|null $endTimestamp An unix timestamp to end at.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getArtistTracks($artist, $user, $startTimestamp = null, $page = null, $endTimestamp = null)
    {
        return $this->getClient()->call('user.getartisttracks', array(
            'artist' => $artist,
            'user' => $user,
            'startTimestamp' => $startTimestamp,
            'page' => $page,
            'endTimestamp' => $endTimestamp,
        ));
    }

    /**
     * Returns the tracks banned by the user
     * 
     * @param string $user The user name
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getBannedTracks($user, $limit = null, $page = null)
    {
        return $this->getClient()->call('user.getbannedtracks', array(
            'user' => $user,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Get a list of upcoming events that this user is attending. Easily integratable
     * into calendars, using the ical standard (see 'more formats' section below).
     * 
     * @param string $user The user to fetch the events for.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $festivalsonly Whether only festivals should be returned, or
     * all events.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getEvents($user, $page = null, $limit = null, $festivalsonly = null)
    {
        return $this->getClient()->call('user.getevents', array(
            'user' => $user,
            'page' => $page,
            'limit' => $limit,
            'festivalsonly' => $festivalsonly,
        ));
    }

    /**
     * Get a list of the user's friends on Last.fm.
     * 
     * @param string $user The last.fm username to fetch the friends of.
     * @param string|null $recenttracks Whether or not to include information about
     * friends' recent listening in the response.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getFriends($user, $recenttracks = null, $limit = null, $page = null)
    {
        return $this->getClient()->call('user.getfriends', array(
            'user' => $user,
            'recenttracks' => $recenttracks,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Get information about a user profile.
     * 
     * @param string|null $user The user to fetch info for. Defaults to the
     * authenticated user.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getInfo($user = null)
    {
        return $this->getClient()->call('user.getinfo', array(
            'user' => $user,
        ));
    }

    /**
     * Get the last 50 tracks loved by a user.
     * 
     * @param string $user The user name to fetch the loved tracks for.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getLovedTracks($user, $limit = null, $page = null)
    {
        return $this->getClient()->call('user.getlovedtracks', array(
            'user' => $user,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Get a list of a user's neighbours on Last.fm.
     * 
     * @param string $user The last.fm username to fetch the neighbours of.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getNeighbours($user, $limit = null)
    {
        return $this->getClient()->call('user.getneighbours', array(
            'user' => $user,
            'limit' => $limit,
        ));
    }

    /**
     * Gets a list of forthcoming releases based on a user's musical taste.
     * 
     * @param string $user The Last.fm username.
     * @param string|null $userecs 0 or 1. If 1, the feed contains new releases based
     * on Last.fm's artist recommendations for this user. Otherwise, it is based on
     * their library (the default).
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getNewReleases($user, $userecs = null)
    {
        return $this->getClient()->call('user.getnewreleases', array(
            'user' => $user,
            'userecs' => $userecs,
        ));
    }

    /**
     * Get a paginated list of all events a user has attended in the past.
     * 
     * @param string $user The username to fetch the events for.
     * @param string|null $page The page number to scan to.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getPastEvents($user, $page = null, $limit = null)
    {
        return $this->getClient()->call('user.getpastevents', array(
            'user' => $user,
            'page' => $page,
            'limit' => $limit,
        ));
    }

    /**
     * Get the user's personal tags
     * 
     * @param string $taggingtype The type of items which have been tagged
     * @param string $tag The tag you're interested in.
     * @param string $user The user who performed the taggings.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getPersonalTags($taggingtype, $tag, $user, $limit = null, $page = null)
    {
        return $this->getClient()->call('user.getpersonaltags', array(
            'taggingtype' => $taggingtype,
            'tag' => $tag,
            'user' => $user,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Get a list of a user's playlists on Last.fm.
     * 
     * @param string $user The last.fm username to fetch the playlists of.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getPlaylists($user)
    {
        return $this->getClient()->call('user.getplaylists', array(
            'user' => $user,
        ));
    }

    /**
     * Get a list of the recent Stations listened to by this user.
     * 
     * @param string $sk A session key generated by authenticating a user via the
     * authentication protocol.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @param string $user The last.fm username to fetch the recent Stations of.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 10. Maximum is 25.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getRecentStations($sk, $api_sig, $user, $limit = null, $page = null)
    {
        return $this->getClient()->call('user.getrecentstations', array(
            'sk' => $sk,
            'api_sig' => $api_sig,
            'user' => $user,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Get a list of the recent tracks listened to by this user. Also includes the
     * currently playing track with the nowplaying="true" attribute if the user is
     * currently listening.
     * 
     * @param string $user The last.fm username to fetch the recent tracks of.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50. Maximum is 200.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @param string|null $to End timestamp of a range - only display scrobbles before
     * this time, in UNIX timestamp format (integer number of seconds since 00:00:00,
     * January 1st 1970 UTC). This must be in the UTC time zone.
     * @param string|null $from Beginning timestamp of a range - only display scrobbles
     * after this time, in UNIX timestamp format (integer number of seconds since
     * 00:00:00, January 1st 1970 UTC). This must be in the UTC time zone.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getRecentTracks($user, $limit = null, $page = null, $to = null, $from = null)
    {
        return $this->getClient()->call('user.getrecenttracks', array(
            'user' => $user,
            'limit' => $limit,
            'page' => $page,
            'to' => $to,
            'from' => $from,
        ));
    }

    /**
     * Get Last.fm artist recommendations for a user
     * 
     * @param string $sk A session key generated by authenticating a user via the
     * authentication protocol.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getRecommendedArtists($sk, $api_sig, $page = null, $limit = null)
    {
        return $this->getClient()->call('user.getrecommendedartists', array(
            'sk' => $sk,
            'api_sig' => $api_sig,
            'page' => $page,
            'limit' => $limit,
        ));
    }

    /**
     * Get a paginated list of all events recommended to a user by Last.fm, based on
     * their listening profile.
     * 
     * @param string $sk A session key generated by authenticating a user via the
     * authentication protocol.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @param string|null $page The page number to scan to.
     * @param string|null $limit The number of events to return per page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getRecommendedEvents($sk, $api_sig, $page = null, $limit = null)
    {
        return $this->getClient()->call('user.getrecommendedevents', array(
            'sk' => $sk,
            'api_sig' => $api_sig,
            'page' => $page,
            'limit' => $limit,
        ));
    }

    /**
     * Get shouts for this user. Also available as an rss feed.
     * 
     * @param string $user The username to fetch shouts for
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getShouts($user, $page = null, $limit = null)
    {
        return $this->getClient()->call('user.getshouts', array(
            'user' => $user,
            'page' => $page,
            'limit' => $limit,
        ));
    }

    /**
     * Get the top albums listened to by a user. You can stipulate a time period. Sends
     * the overall chart by default.
     * 
     * @param string $user The user name to fetch top albums for.
     * @param string|null $period overall | 7day | 3month | 6month | 12month - The time
     * period over which to retrieve top albums for.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopAlbums($user, $period = null, $limit = null, $page = null)
    {
        return $this->getClient()->call('user.gettopalbums', array(
            'user' => $user,
            'period' => $period,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Get the top artists listened to by a user. You can stipulate a time period.
     * Sends the overall chart by default.
     * 
     * @param string $user The user name to fetch top artists for.
     * @param string|null $period overall | 7day | 3month | 6month | 12month - The time
     * period over which to retrieve top artists for.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopArtists($user, $period = null, $limit = null, $page = null)
    {
        return $this->getClient()->call('user.gettopartists', array(
            'user' => $user,
            'period' => $period,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Get the top tags used by this user.
     * 
     * @param string $user The user name
     * @param string|null $limit Limit the number of tags returned
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopTags($user, $limit = null)
    {
        return $this->getClient()->call('user.gettoptags', array(
            'user' => $user,
            'limit' => $limit,
        ));
    }

    /**
     * Get the top tracks listened to by a user. You can stipulate a time period. Sends
     * the overall chart by default.
     * 
     * @param string $user The user name to fetch top tracks for.
     * @param string|null $period overall | 7day | 3month | 6month | 12month - The time
     * period over which to retrieve top tracks for.
     * @param string|null $limit The number of results to fetch per page. Defaults to
     * 50.
     * @param string|null $page The page number to fetch. Defaults to first page.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getTopTracks($user, $period = null, $limit = null, $page = null)
    {
        return $this->getClient()->call('user.gettoptracks', array(
            'user' => $user,
            'period' => $period,
            'limit' => $limit,
            'page' => $page,
        ));
    }

    /**
     * Get an album chart for a user profile, for a given date range. If no date range
     * is supplied, it will return the most recent album chart for this user.
     * 
     * @param string $user The last.fm username to fetch the charts of.
     * @param string|null $from The date at which the chart should start from. See
     * User.getChartsList for more.
     * @param string|null $to The date at which the chart should end on. See
     * User.getChartsList for more.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getWeeklyAlbumChart($user, $from = null, $to = null)
    {
        return $this->getClient()->call('user.getweeklyalbumchart', array(
            'user' => $user,
            'from' => $from,
            'to' => $to,
        ));
    }

    /**
     * Get an artist chart for a user profile, for a given date range. If no date range
     * is supplied, it will return the most recent artist chart for this user.
     * 
     * @param string $user The last.fm username to fetch the charts of.
     * @param string|null $from The date at which the chart should start from. See
     * User.getWeeklyChartList for more.
     * @param string|null $to The date at which the chart should end on. See
     * User.getWeeklyChartList for more.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getWeeklyArtistChart($user, $from = null, $to = null)
    {
        return $this->getClient()->call('user.getweeklyartistchart', array(
            'user' => $user,
            'from' => $from,
            'to' => $to,
        ));
    }

    /**
     * Get a list of available charts for this user, expressed as date ranges which can
     * be sent to the chart services.
     * 
     * @param string $user The last.fm username to fetch the charts list for.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getWeeklyChartList($user)
    {
        return $this->getClient()->call('user.getweeklychartlist', array(
            'user' => $user,
        ));
    }

    /**
     * Get a track chart for a user profile, for a given date range. If no date range
     * is supplied, it will return the most recent track chart for this user.
     * 
     * @param string $user The last.fm username to fetch the charts of.
     * @param string|null $from The date at which the chart should start from. See
     * User.getWeeklyChartList for more.
     * @param string|null $to The date at which the chart should end on. See
     * User.getWeeklyChartList for more.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getWeeklyTrackChart($user, $from = null, $to = null)
    {
        return $this->getClient()->call('user.getweeklytrackchart', array(
            'user' => $user,
            'from' => $from,
            'to' => $to,
        ));
    }

    /**
     * Shout on this user's shoutbox
     * 
     * @param string $user The name of the user to shout on.
     * @param string $message The message to post to the shoutbox.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @param string $sk A session key generated by authenticating a user via the
     * authentication protocol.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function shout($user, $message, $api_sig, $sk)
    {
        return $this->getClient()->call('user.shout', array(
            'user' => $user,
            'message' => $message,
            'api_sig' => $api_sig,
            'sk' => $sk,
        ));
    }


}

