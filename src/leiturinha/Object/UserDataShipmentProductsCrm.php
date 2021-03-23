<?php

namespace Leiturinha\Object;

/**
 * Data extension: Produtos do Envio
 * ex: user_data.shipment_products.id
 *
 * @property string $id required max 128
 * @property string $kit_shipment_id required max 128
 * @property string $product_code max 50
 * @property string $product_type max 50
 * @property string $name max 200
 * @property int $score_rate
 */
class UserDataShipmentProductsCrm extends BaseCrm
{
    public $id;

    public $kit_shipment_id;

    public $product_code;

    public $product_type;

    public $name;

    public $score_rate;

    /**
     * Filter and validate
     *
     * @return void
     */
    public function run()
    {
        if(!$this->id) {
            throw new \InvalidArgumentException('field shipment_products.id required');
        }
        if(!$this->kit_shipment_id) {
            throw new \InvalidArgumentException('field shipment_products.kit_shipment_id required');
        }

        return $this;
    }

}
