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
class Tasteometer
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
     * @return Tasteometer
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
     * Get a Tasteometer score from two inputs, along with a list of shared artists. If
     * the input is a User some additional information is returned.
     * 
     * @param string $value [Last.fm username] | [Comma-separated artist names (max.
     * 100)]
     * @param string $type 'user' | 'artists'
     * @param string|null $limit How many shared artists to display
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function compare($value, $type, $limit = null)
    {
        return $this->getClient()->call('tasteometer.compare', array(
            'value' => $value,
            'type' => $type,
            'limit' => $limit,
        ));
    }

    /**
     * Get the scores between every user in a group of users, plus shared artists. Cuts
     * off any similarities below a cutoff. Also returns a list of all users in the
     * comparison and a small amount of metadata about each. Can take the list of users
     * from a group, or a users friends.
     * 
     * @param string $value [Last.fm username] | [Last.fm group name]
     * @param string $source 'user' | 'group'
     * @param string|null $cutoff The minimum level over which comparisons should be
     * returned
     * @param string|null $connectionLimit The maximum number of connections each user
     * should have
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function compareGroup($value, $source, $cutoff = null, $connectionLimit = null)
    {
        return $this->getClient()->call('tasteometer.comparegroup', array(
            'value' => $value,
            'source' => $source,
            'cutoff' => $cutoff,
            'connectionLimit' => $connectionLimit,
        ));
    }


}

