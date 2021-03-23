<?php

namespace Leiturinha\Object;

/**
 * Data extension: Items da Compra (Loja Leiturinha)
 * ex: user_data.purchase_items.id
 *
 * @property int $id required
 * @property int $purchase_id required
 * @property string $price decimal
 * @property int $quantity
 * @property int $product_id
 * @property string $product_slug max 150
 * @property string $product_name max 250
 */
class UserDataPurchaseItemsCrm extends BaseCrm
{
    public $id;

    public $purchase_id;

    public $price;

    public $quantity;

    public $product_id;

    public $product_slug;

    public $product_name;

    /**
     * Filter and validate
     *
     * @return void
     */
    public function run()
    {
        if(!$this->id) {
            throw new \InvalidArgumentException('field purchase_items.id required');
        }
        if(!$this->purchase_id) {
            throw new \InvalidArgumentException('field purchase_items.purchase_id required');
        }

        return $this;
    }

}
