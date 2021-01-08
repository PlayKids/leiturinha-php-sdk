<?php

namespace Leiturinha;

use Leiturinha\Events\EventFactory;

class Handler
{
    private $factory;

    public static function receiveData($data)
    {
        if (!isset($data) || !empty($data)) {
            (new EventFactory)->handle($data);
        }
    }

    public function __construct()
    {
        $this->factory = new EventFactory();
    }
}
