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
class Client
{
    const SERVICE_URL = 'http://ws.audioscrobbler.com/2.0/';

    protected $apiKey = '';

    public function __construct($apiKey = null)
    {
        if (null !== $apiKey) {
            $this->setApiKey($apiKey);
        }
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param $method
     * @param array $params Associative array with query parameters
     * @return \SimpleXMLElement
     */
    public function call($method, $params = array())
    {
        $queryString = '';
        foreach ($params as $key => $value) {
            if (null === $value) {
                continue;
            }
            $queryString = '&' . $key . '=' . $value;
        }

        $result = simplexml_load_file(
            self::SERVICE_URL . '?method=' . $method . '&api_key=' . $this->apiKey .
            $queryString
        );

        return $result;
    }
}

