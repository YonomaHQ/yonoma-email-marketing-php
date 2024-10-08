<?php

namespace YonomaEmailMarketing;

class Tags
{
    private $client;

    public function __construct(YonomaClient $client)
    {
        $this->client = $client;
    }

    public function create($groupData)
    {
        $endpoint = 'tags/create';
        return $this->client->request('POST', $endpoint, $groupData);
    }

    public function list()
    {
        $endpoint = 'tags/list';
        return $this->client->request('GET', $endpoint);
    }

    public function retrieve($tagId)
    {
        $endpoint = 'tags/' . $tagId;
        return $this->client->request('GET', $endpoint);
    }

    public function update($tagId, $groupData)
    {
        $endpoint = 'tags/' . $tagId . '/update';
        return $this->client->request('POST', $endpoint, $groupData);
    }
    
    public function delete($tagId)
    {
        $endpoint = 'tags/' . $tagId . '/delete';
        return $this->client->request('POST', $endpoint);
    }
}