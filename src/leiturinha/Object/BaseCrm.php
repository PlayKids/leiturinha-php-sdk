<?php

namespace Leiturinha\Object;

use Leiturinha\Handler;

abstract class BaseCrm
{
    /**
     * Filter and validate
     *
     * @return void
     */
    abstract public function run();

    /**
     * Remove values empty or null
     *
     * @return void
     */
    public function removeNulls()
    {
        foreach ($this as $key => $value) {
            if(!$value) {
                unset($this->$key);
            }
        }
    }

    /**
     * Get array attributes
     *
     * @return void
     */
    public function getArray()
    {
        return get_object_vars($this);
    }

    /**
     * Send event
     *
     * @return void
     */
    public function send()
    {
        return Handler::receiveData(json_encode($this->getArray()));
    }

}
