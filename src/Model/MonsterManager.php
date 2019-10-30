<?php


namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class MonsterManager
{
    const API_PATH = "https://hackathon-wild-hackoween.herokuapp.com";

    private $httpClient;

    public function __construct()
    {
        $this->httpClient = HttpClient::create();
    }

    private function requestApi(string $url, string $method = 'GET')
    {
        return $this->httpClient->request($method, self::API_PATH . $url);
    }

    public function getMonsters() {

        $response = $this->requestApi('/monsters');

        $statusCode = $response->getStatusCode();

        if ($statusCode === 200) {
            $content = $response->toArray();
            // convert the response (here in JSON) to an PHP array
        } else {
            $content = $statusCode;
        }
        return $content;
    }


}