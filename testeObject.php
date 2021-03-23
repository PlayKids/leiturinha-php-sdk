<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require "vendor/autoload.php";

use Leiturinha\Object\DataCrm;
use Leiturinha\Object\DataCustomerServiceCrm;
use Leiturinha\Object\DataOperationalCrm;
use Leiturinha\Object\DataWebCrm;
use Leiturinha\Object\UserDataCrm;
use Leiturinha\Object\UserDataInvoiceCrm;
use Leiturinha\Object\UserDataKitShipmentsCrm;
use Leiturinha\Object\UserDataPersonalDataCrm;
use Leiturinha\Object\UserDataPhoneCrm;
use Leiturinha\Object\UserDataShipmentProductsCrm;
use Leiturinha\Object\UserDataSubscriptionCrm;

//DATA -----------------------------------------------

//Eventos web leiturinha
// $data = new DataWebCrm;
// $data->browser = 'Chrome';
// $data->device = 'Desktop';
// $data->operational_system = 'Windows';
// $data->run();
// $data->removeNulls();

//Eventos operacionais
$data = new DataOperationalCrm;
$data->channel = 'Leiturinha';
$data->run();
$data->removeNulls();

//Atendimento
// $data = new DataCustomerServiceCrm;
// $data->id = 1;
// $data->user_id = 2;
// $data->subscription_id = 3;
// $data->run();
// $data->removeNulls();

//USER DATA ------------------------------------------

//Telefone do usuário
$phone = new UserDataPhoneCrm;
$phone->number = '(35) 9 0000-3052';
$phone->run();
$phone->removeNulls();

//Dados pessoais do usuário
$personalData = new UserDataPersonalDataCrm;
$personalData->name = 'Fernando Zueet';
$personalData->cpf = '000.000.000-00';
$personalData->run();
$personalData->removeNulls();

//Assinatura de usuário
$subscription = new UserDataSubscriptionCrm;
$subscription->id = 1;
$subscription->plan_type = 'Teste';
$subscription->run();
$subscription->removeNulls();

//Faturas do usuário
$invoice = new UserDataInvoiceCrm;
$invoice->id = 1;
$invoice->subscription_id = 2;
$invoice->installment = 3;
$invoice->creation_date = '2021-03-01 20:04';
$invoice->run();
$invoice->removeNulls();
$invoices[0] = $invoice; // objeto simples ou array de UserDataInvoiceCrm

//Envios de kits de usuário
$kitShipments = new UserDataKitShipmentsCrm;
$kitShipments->id = 1;
$kitShipments->invoice_id = 2;
$kitShipments->run();
$kitShipments->removeNulls();

//Produtos do Envio do usuário
$shipmentProduct = new UserDataShipmentProductsCrm;
$shipmentProduct->id = 1;
$shipmentProduct->kit_shipment_id = 2;
$shipmentProduct->run();
$shipmentProduct->removeNulls();
$shipmentProducts[0] = $shipmentProduct; // objeto simples ou array de UserDataShipmentProductsCrm

//

//Monto objeto user_data
$userData = new UserDataCrm;
$userData->email = 'fernando.zueet@playkids.com';
$userData->phone = $phone;
$userData->personal_data = $personalData;
$userData->subscription = $subscription;
$userData->invoice = $invoices;
$userData->kit_shipments = $kitShipments;
$userData->shipment_products = $shipmentProducts;
$userData->run();
$userData->removeNulls();

//----------------------------------------------------
//MONTO OBJETO PRINCIPAL -----------------------------
$crm = new DataCrm;
$crm->event = 'register';
$crm->contact_key = 'fernando.zueet@playkids.com';
$crm->data = $data;
$crm->user_data = $userData;
$crm->run();
$crm->removeNulls();

//PEGO OBJETO MONTADO
print_r($crm->getArray());

//ENVIO OBJETO
//$crm->send();

