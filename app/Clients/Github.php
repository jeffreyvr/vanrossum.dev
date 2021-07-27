<?php

namespace App\Clients;

use GuzzleHttp\Client;

class Github
{
    public $client;
    public $user;
    public $repository;

    public function __construct()
    {
        $this->token = config('services.github.access_token');
        $this->user = config('services.github.username');

        if (empty($this->token) || empty($this->user)) {
            throw new \Exception('No token or user set.');
        }

        $this->client = new Client([
            'base_uri' => 'https://api.github.com/',
            'timeout'  => 15.0,
            'headers' => [
                'Authorization' => 'bearer ' . $this->token
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

        $response = $this->client->request('GET', "/repos/{$this->user}/{$this->repository}");

        return json_decode($response->getBody());
    }

    public function getRepositoryTags()
    {
        $response = $this->client->request('GET', "/repos/{$this->user}/{$this->repository}/tags");

        return json_decode($response->getBody());
    }

    public function getRepositoryReleases()
    {
        $response = $this->client->request('GET', "/repos/{$this->user}/{$this->repository}/releases");

        return json_decode($response->getBody());
    }

    public function downloadRepositoryZip($ref)
    {
        $response = $this->client->request('GET', "/repos/{$this->user}/{$this->repository}/zipball/{$ref}");

        return json_decode($response->getBody());
    }
}
