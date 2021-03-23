<?php

namespace Leiturinha\Object;

/**
 * Data extension: Evento Web Loja
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
 * @property string $search_term max 150
 * @property string $category_slugs max 1000
 * @property int $product_id
 * @property string $product_slug max 150
 * @property string $product_name max 200
 * @property string $age_ranges max 1000
 * @property string $product_price decimal
 * @property string $channel max 50
 */
class DataWebLojaCrm extends BaseCrm
{
    public $browser;

    public $device;

    public $operational_system;

    public $utm_source;

    public $utm_medium;

    public $utm_campaign;

    public $source;

    public $page;

    public $search_term;

    public $category_slugs;

    public $product_id;

    public $product_slug;

    public $product_name;

    public $age_ranges;

    public $product_price;

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
