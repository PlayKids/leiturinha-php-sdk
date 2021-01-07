<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "vendor/autoload.php";

use Leiturinha\Handler;

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$data = '{"event":"register","crm_disable":false,"contact_key":"testestesteste@playkids.com","data":{"browser":"Chrome","device":"Desktop","operational_system":"Ubuntu","utm_source":"","utm_medium":"","utm_campaign":"","source":"","chanel":"Leiturinha","page":"Cadastro"},"user_data":{"email":"testestesteste@playkids.com","phone":{"number":"11989885678","locale":"BR"},"personal_data":{"name":"Jean Rabelo","first_name":"Jean","last_name":"Rabelo"},"subscription":{"id":1000123,"plan_type":"uni","plan_name":"Leiturinha Uni Anual Cheio 39.90 + Frete 10.00","plan_sku":"leiturinha-uni-anual-cheio-3990-shiiping-10","plan_duration":12,"plan_price":39.9,"shipping_price":10,"pin":"LEITURINHA10D","child_name_1":"Jeanzinho","child_gender_1":0,"child_birthday_1":"2012-01-25 12:00:00","child_name_2":"Mariazinha","child_gender_2":1,"child_birthday_2":"2014-06-13 12:00:00","charge_type":1,"zipcode":"13024-001","address":"Rua Cirilo Silva","address_line_2":"Apartamento 22","address_number":"227","address_ neighborhood":"Centro","address_reference":"","address_city":"Pocos de Caldas","address_state":"MG","source":"go_Search_BrandingWords","created_at":"2020-12-09 15:43:09","status":"Ativa"},"invoice":{"id":10000000123,"subscription_id":1000123,"installment":1,"creation_date":"2020-12-08 12:56:01","payment_date":"2020-12-08 12:56:01","checkout_date":"2020-12-08 12:56:01","send_date":"2020-12-08 12:56:01"}}}';

Handler::receiveData($data);
