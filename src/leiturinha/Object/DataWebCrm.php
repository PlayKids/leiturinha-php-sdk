<?php

namespace Leiturinha\Object;

/**
 * Data extension: Evento Web Leiturinha
 * ex: data.browser
 *
 * @property string $browser max 150
 * @property string $device max 50
 * @property string $operational_system max 50
 * @property string $utm_source max 50
 * @property string $utm_medium max 50
 * @property string $utm_campaign max 50
 * @property string $source max 50
 * @property string $page max 150
 * @property string $plan_type max 100
 * @property string $plan_name max 150
 * @property string $plan_sku max 100
 * @property int $plan_duration
 * @property string $plan_price decimal
 * @property string $shipping_price decimal
 * @property string $plan_id max 50
 * @property string $channel required max 50
 */
class DataWebCrm extends BaseCrm
{
    public $browser;

    public $device;

    public $operational_system;

    public $utm_source;

    public $utm_medium;

    public $utm_campaign;

    public $source;

    public $page;

    public $plan_type;

    public $plan_name;

    public $plan_sku;

    public $plan_duration;

    public $plan_price;

    public $shipping_price;

    public $plan_id;

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
