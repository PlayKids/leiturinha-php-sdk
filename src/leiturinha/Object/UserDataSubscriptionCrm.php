<?php

namespace Leiturinha\Object;

/**
 * Data extension: Assinatura
 * ex: user_data.subscription.id
 *
 * @property int $id required
 * @property string $plan_type max 50
 * @property string $plan_name max 150
 * @property string $plan_sku max 150
 * @property int $plan_duration
 * @property string $plan_price decimal
 * @property string $shipping_price decimal
 * @property string $pin max 50
 * @property string $child_name_1 max 50
 * @property string $child_gender_1 max 50
 * @property string $child_birthday_1 datetime
 * @property string $child_name_2 max 50
 * @property string $child_gender_2 max 50
 * @property string $child_birthday_2 datetime
 * @property string $charge_type max 50
 * @property string $zipcode max 50
 * @property string $address max 250
 * @property string $address_number max 50
 * @property string $address_neighborhood max 255
 * @property string $address_reference max 255
 * @property string $address_city max 255
 * @property string $address_state max 255
 * @property string $source max 50
 * @property string $created_at datetime
 * @property string $status max 50
 * @property string $address_line_2 max 250
 * @property string $invoices_paid max 8
 * @property string $first_payment datetime
 * @property string $last_payment datetime
 * @property string $canceled_at datetime
 * @property string $canceled_reason max 50
 */
class UserDataSubscriptionCrm extends BaseCrm
{
    public $id;

    public $plan_type;

    public $plan_name;

    public $plan_sku;

    public $plan_duration;

    public $plan_price;

    public $shipping_price;

    public $pin;

    public $child_name_1;

    public $child_gender_1;

    public $child_birthday_1;

    public $child_name_2;

    public $child_gender_2;

    public $child_birthday_2;

    public $charge_type;

    public $zipcode;

    public $address;

    public $address_number;

    public $address_neighborhood;

    public $address_reference;

    public $address_city;

    public $source;

    public $address_state;

    public $created_at;

    public $status;

    public $address_line_2;

    public $invoices_paid;

    public $first_payment;

    public $last_payment;

    public $canceled_at;

    public $canceled_reason;

    /**
     * Filter and validate
     *
     * @return void
     */
    public function run()
    {
        if(!$this->id) {
            throw new \InvalidArgumentException('field subscription.id required');
        }

        return $this;
    }

}
