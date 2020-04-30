<?php
declare(strict_types=1);
namespace TrelloPhpApi;

use Psr\Http\Message\RequestInterface;

class Client
{
    private $guzzleClient;

    private $key;
    private $token;
    private $host = 'api.trello.com';
    private $apiVersion = '1';

    public function __construct(string $key, string $token)
    {
        $this->guzzleClient = new \GuzzleHttp\Client();

        $this->key = $key;
        $this->token = $token;
    }

    public function send(RequestInterface $request): array
    {
        $uri = $request->getUri()
            ->withScheme('https')
            ->withHost($this->host)
            ->withPath($this->apiVersion . '/' . $request->getUri()->getPath())
            ->withQuery('key=' . $this->key . '&token='. $this->token);

        $request = $request->withUri($uri);

        return json_decode($this->guzzleClient->send($request)->getBody()->getContents(), true);
    }
}
