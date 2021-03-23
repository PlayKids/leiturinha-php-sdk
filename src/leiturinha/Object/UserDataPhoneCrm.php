<?php

namespace Leiturinha\Object;

/**
 * Data extension: Phone
 * ex: user_data.phone.number
 *
 * @property string $number
 * @property string $locale
 */
class UserDataPhoneCrm extends BaseCrm
{
    public $number;

    public $locale = 'BR';

    /**
     * Filter and validate
     *
     * @return void
     */
    public function run()
    {
        if($this->number) {
            $this->number = str_replace([" ", "(", ")", "-"], ["","","",""], $this->number);
        }

        return $this;
    }

}
