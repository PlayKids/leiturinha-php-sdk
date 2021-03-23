<?php

namespace Leiturinha\Object;

/**
 * Data extension: Envios de Kit
 * user_data.kit_shipments.id
 *
 * @property string $id required
 * @property int $invoice_id required
 * @property string $production_date datetime
 * @property string $send_date datetime
 * @property string $delivery_date datetime
 * @property string $tracking_code max 50
 * @property string $shipping_company max 150
 * @property string $tracking_url max 250
 * @property string $category max 30
 * @property string $creation_date datetime
 * @property string $bill_key max 200
 * @property string $bill_url max 250
 */
class UserDataKitShipmentsCrm extends BaseCrm
{
    public $id;

    public $invoice_id;

    public $production_date;

    public $send_date;

    public $delivery_date;

    public $tracking_code;

    public $shipping_company;

    public $tracking_url;

    public $category;

    public $creation_date;

    public $bill_key;

    public $bill_url;

    /**
     * Filter and validate
     *
     * @return void
     */
    public function run()
    {
        if(!$this->id) {
            throw new \InvalidArgumentException('field kit_shipments.id required');
        }
        if(!$this->invoice_id) {
            throw new \InvalidArgumentException('field kit_shipments.invoice_id required');
        }

        return $this;
    }

}
