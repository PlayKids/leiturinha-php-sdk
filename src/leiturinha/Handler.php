<?php

namespace Leiturinha;

use Leiturinha\Traits\ManagesData;
use Leiturinha\Events\EventFactory;

class Handler
{
    use ManagesData;

    public static function receiveData($data)
    {
        $streamData = (new Handler)->handleData($data);

        if (!isset($data) || !empty($data)) {
            (new EventFactory)->handle($streamData);
        }
    }
}
