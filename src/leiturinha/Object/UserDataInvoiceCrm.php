<?php

namespace Leiturinha\Object;

/**
 * Data extension: Faturas
 * ex: user_data.invoice.id
 *
 * @property int $id required
 * @property int $subscription_id required
 * @property int $installment required
 * @property string $creation_date required datetime
 * @property string $payment_date datetime
 * @property string $checkout_date datetime
 * @property string $send_date datetime
 * @property string $price decimal
 * @property string $delivery_date datetime
 * @property int $invoices_paid
 * @property string $first_payment
 * @property string $last_payment
 */
class UserDataInvoiceCrm extends BaseCrm
{
    public $id;

    public $subscription_id;

    public $installment;

    public $creation_date;

    public $payment_date;

    public $checkout_date;

    public $send_date;

    public $price;

    public $delivery_date;

    public $invoices_paid;

    public $first_payment;

    public $last_payment;

    /**
     * Filter and validate
     *
     * @return void
     */
    public function run()
    {
        if(!$this->id) {
            throw new \InvalidArgumentException('field invoice.id required');
        }
        if(!$this->subscription_id) {
            throw new \InvalidArgumentException('field invoice.subscription_id required');
        }
        if(!$this->installment) {
            throw new \InvalidArgumentException('field invoice.installment required');
        }
        if(!$this->creation_date) {
            throw new \InvalidArgumentException('field invoice.creation_date required');
        }

        return $this;
    }

}
