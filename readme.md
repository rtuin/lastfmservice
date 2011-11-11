# Lastfm API wrapper for PHP 5.3
This is a (generated) library for use with the Last.fm API. It is for general use, and should cover the entire Last.fm API.

## Example
The library is designed to be slim and simple. In fact it is just a wrapper to the API. The results you receive from the
API calls are instances of `SimpleXmlElement`. This is on purpose as the `SimpleXmlElement` classes allow for easy traversing
over the data and even query against it.

A simple code example is the following:

    // This code sample queries the Last.fm Album.getInfo method
    // Preconfigure the client
    $apiKey = 'yourapikey';
    $client = new Lastfm\Service\Client($apiKey);

    // Instantiate an instance of the service subset (or entity if you like)
    $album = new Lastfm\Service\Album($client);

    // The actual query to the API
    $result = $album->getInfo('On the go', 'Matthew Halsall');

## Thoughts and wishlist
As the library is generated from the documentation that is available [here](http://www.last.fm/api), there is still
some work to do.
As i've just needed a relatively small portion of the library for the project i'm working on, unit tests are not written
for every component.
Also, it would be nice to see the `Client` class remember authentication tokens etc.

Another thing that is worth looking at is the client `httpRequest` method; not sure if CURL is the way to go.