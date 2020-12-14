<?php

namespace Leiturinha\Events;

use leiturinha\Traits\ManagesKinesis;

class EventFactory
{
    use ManagesKinesis;

    protected $client;

    public function __construct()
    {
        $this->client = env('EVENT_CLIENT');
    }

    public function handle($data)
    {
        switch ($this->client) {
            case 'kinesis':
                $this->resolveKinesis($data);
                break;
        }
    }
}
