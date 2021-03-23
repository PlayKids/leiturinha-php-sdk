<?php

namespace Leiturinha\Object;

/**
 * Data extension: Dados Pessoais
 * ex: user_data.personal_data.name
 *
 * @property string $name max 250
 * @property string $first_name max 200
 * @property string $last_name max 150
 * @property string $cpf max 50
 * @property string $country max 5
 * @property string $language max 10
 * @property int $nps
 */
class UserDataPersonalDataCrm extends BaseCrm
{
    public $name;

    public $first_name;

    public $last_name;

    public $cpf;

    public $country;

    public $language;

    public $nps;

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
