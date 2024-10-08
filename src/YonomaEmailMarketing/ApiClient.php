<?php

namespace YonomaEmailMarketing;

class ApiClient
{
    private $client;
    public $contacts;
    public $groups;
    public $tags;

    public function __construct($apiKey)
    {
        $this->client = new YonomaClient($apiKey);
        $this->contacts = new Contacts($this->client);
        $this->groups = new Groups($this->client);
        $this->tags = new Tags($this->client);
    }
}