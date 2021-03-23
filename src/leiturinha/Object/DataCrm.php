<?php

namespace Leiturinha\Object;

/**
 * Main object
 *
 * @property string $event required max 60
 * @property bool $crm_disable
 * @property string $contact_key required
 * @property DataWebCrm|DataCustomerServiceCrm|DataOperationalCrm|DataWebLojaCrm $data
 * @property UserDataCrm $user_data
 */
class DataCrm extends BaseCrm
{
    public $event;

    public $crm_disable = false;

    public $contact_key;

    public $data;

    public $user_data;

    /**
     * Filter and validate
     *
     * @return void
     */
    public function run()
    {
        if(!$this->event) {
            throw new \InvalidArgumentException('field event required');
        }
        if(!filter_var($this->contact_key, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('field contact_key must be an email');
        }

        return $this;
    }

}
