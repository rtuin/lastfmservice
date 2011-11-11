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
            $queryString .= '&' . $key . '=' . urlencode($value);
        }

        $callUrl = self::SERVICE_URL . '?method=' . $method . '&api_key=' . $this->apiKey . $queryString;
        $data = $this->httpRequest($callUrl);

        $result = simplexml_load_string($data);

        return $result;
    }

    /**
     * Do a simple HTTP-GET request
     *
     * @param string $callUrl The url that the request is to.
     * @return mixed
     */
    public function httpRequest($callUrl)
    {
        $curl = curl_init($callUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        curl_close($curl);

        return $data;
    }
}

