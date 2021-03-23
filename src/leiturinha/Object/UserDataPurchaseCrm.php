<?php

namespace Leiturinha\Object;

/**
 * Data extension: Compras (Loja Leiturinha)
 * ex: user_data.purchase.id
 *
 * @property int $id required
 * @property string $price decimal
 * @property int $quantity
 * @property string $pin max 50
 * @property string $zipcode max 50
 * @property string $address max 250
 * @property string $address_line_2 max 250
 * @property string $address_number max 50
 * @property string $address_neighborhood max 50
 * @property string $address_reference max 50
 * @property string $address_city max 50
 * @property string $address_state max 50
 * @property string $created_at datetime
 */
class UserDataPurchaseCrm extends BaseCrm
{
    public $id;

    public $price;

    public $quantity;

    public $pin;

    public $zipcode;

    public $address;

    public $address_line_2;

    public $address_number;

    public $address_neighborhood;

    public $address_reference;

    public $address_city;

    public $address_state;

    public $created_at;

    /**
     * Filter and validate
     *
     * @return void
     */
    public function run()
    {
        if(!$this->id) {
            throw new \InvalidArgumentException('field purchase.id required');
        }

        return $this;
    }

}
