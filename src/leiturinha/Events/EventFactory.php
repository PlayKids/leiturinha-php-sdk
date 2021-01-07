<?php

namespace Leiturinha\Events;

use Leiturinha\Traits\ManagesKinesis;

class EventFactory implements EventFactoryInterface
{
    use ManagesKinesis;

    protected $client;

    public function __construct()
    {
        $this->client = getenv('EVENT_CLIENT');
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
