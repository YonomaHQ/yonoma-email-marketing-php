<?php

namespace YonomaEmailMarketing;

class Groups
{
    private $client;

    public function __construct(YonomaClient $client)
    {
        $this->client = $client;
    }

    public function create($groupData)
    {
        $endpoint = 'groups/create';
        return $this->client->request('POST', $endpoint, $groupData);
    }

    public function list()
    {
        $endpoint = 'groups/list';
        return $this->client->request('GET', $endpoint);
    }

    public function retrieve($groupId)
    {
        $endpoint = 'groups/' . $groupId;
        return $this->client->request('GET', $endpoint);
    }

    public function update($groupId, $groupData)
    {
        $endpoint = 'groups/' . $groupId . '/update';
        return $this->client->request('POST', $endpoint, $groupData);
    }

    public function delete($groupId)
    {
        $endpoint = 'groups/' . $groupId . '/delete';
        return $this->client->request('POST', $endpoint);
    }
}