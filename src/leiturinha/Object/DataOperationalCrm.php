<?php

namespace Leiturinha\Object;

/**
 * Data extension: Eventos Operacionais
 * ex: data.channel
 *
 * @property string $channel required max 50
 */
class DataOperationalCrm extends BaseCrm
{
    public $channel = 'Leiturinha';

    /**
     * Filter and validate
     *
     * @return void
     */
    public function run()
    {
        //

        return $this;
    }

}
