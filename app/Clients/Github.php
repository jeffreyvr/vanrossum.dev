<?php

namespace App\Clients;

use GuzzleHttp\Client;

class Github
{
    public $client;
    public $repository;
    public $base_uri = 'https://api.github.com/';

    public function __construct()
    {
        $this->token = config('services.github.access_token');

        if (empty($this->token)) {
            throw new \Exception('No token is set.');
        }

        $this->client = new Client([
            'base_uri' => $this->base_uri,
            'timeout'  => 15.0,
            'headers' => [
                'Authorization' => 'token ' . $this->token
            ]
        ]);
    }

    public function setRepository($repository)
    {
        $this->repository = $repository;

        return $this;
    }

    public function getRepositoryData()
    {
        if (empty($this->repository)) {
            throw new \Exception('Repository has not been set.');
        }

        $response = $this->client->request('GET', "/repos/{$this->repository}");

        return json_decode($response->getBody());
    }

    public function getRepositoryTags()
    {
        $response = $this->client->request('GET', "/repos/{$this->repository}/tags");

        return json_decode($response->getBody());
    }

    public function getRepositoryReleases()
    {
        $response = $this->client->request('GET', "/repos/{$this->repository}/releases");

        return json_decode($response->getBody());
    }

    public function getRelease($tag)
    {
        $response = $this->client->request('GET', "/repos/{$this->repository}/releases/tags/{$tag}");

        return json_decode($response->getBody());
    }

    public function downloadAsset($id)
    {
        $response = $this->client->request('GET', "/repos/{$this->repository}/releases/assets/{$id}", [
            'headers' => [
                'Accept' => 'application/octet-stream'
            ]
        ]);

        return $response->getBody();
    }
}
