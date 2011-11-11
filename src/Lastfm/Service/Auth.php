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
class Auth
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
     * @return Auth
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
     * Create a web service session for a user. Used for authenticating a user when the
     * password can be inputted by the user. Only suitable for standalone mobile
     * devices. See the authentication how-to for more.
     * 
     * @param string $username The last.fm username.
     * @param string $authToken A 32-byte ASCII hexadecimal MD5 hash of the last.fm
     * username and the user's password hash. i.e. md5(username + md5(password)), where
     * '+' represents a concatenation.
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getMobileSession($username, $authToken, $api_sig)
    {
        return $this->getClient()->call('auth.getmobilesession', array(
            'username' => $username,
            'authToken' => $authToken,
            'api_sig' => $api_sig,
        ));
    }

    /**
     * Fetch a session key for a user. The third step in the authentication process.
     * See the authentication how-to for more information.
     * 
     * @param string $token A 32-character ASCII hexadecimal MD5 hash returned by step
     * 1 of the authentication process (following the granting of permissions to the
     * application by the user)
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getSession($token, $api_sig)
    {
        return $this->getClient()->call('auth.getsession', array(
            'token' => $token,
            'api_sig' => $api_sig,
        ));
    }

    /**
     * Fetch an unathorized request token for an API account. This is step 2 of the
     * authentication process for desktop applications. Web applications do not need to
     * use this service.
     * 
     * @param string $api_sig A Last.fm method signature. See authentication for more
     * information.
     * @return \SimpleXmlElement The direct response from the Lastfm server
     */
    public function getToken($api_sig)
    {
        return $this->getClient()->call('auth.gettoken', array(
            'api_sig' => $api_sig,
        ));
    }


}

