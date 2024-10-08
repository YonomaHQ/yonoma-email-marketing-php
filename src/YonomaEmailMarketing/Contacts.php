<?php

namespace YonomaEmailMarketing;

class Contacts
{
    private $client;

    public function __construct(YonomaClient $client)
    {
        $this->client = $client;
    }

    public function create($groupId, $contactData)
    {
        $endpoint = 'contacts/' . $groupId . '/create';
        return $this->client->request('POST', $endpoint, $contactData);
    }

    public function update($groupId, $contactId, $contactData)
    {
        $endpoint = 'contacts/' . $groupId . '/status/' . $contactId;
        return $this->client->request('POST', $endpoint, $contactData);
    }

    public function addTag($tagId, $contactData)
    {
        $endpoint = 'contacts/tags/' . $tagId . '/add';
        return $this->client->request('POST', $endpoint, $contactData);
    }

    public function removeTag($tagId, $contactData)
    {
        $endpoint = 'contacts/tags/' . $tagId . '/remove';
        return $this->client->request('POST', $endpoint, $contactData);
    }
}