<?php
namespace App\Tasks\Models\Pennysaver;

use App\Tasks\Models\Adworks\Customer;
use App\Tasks\Models\PSBase;

class Account extends PSBase
{
    public static function destroyAll()
    {
        self::truncate();
    }
    
    public static function insertAdworksCustomer($customer)
    {
        if ($customer instanceof Customer) {
            return self::insert([
                    "id" => $customer->Cust_Number,
                    "name" => $customer->DISPLAY_NAME,
                    "sp_id" => $customer->Salesperson
                ]
            );
        }

        foreach ($customer as $oneCustomer){
            self::insertAdworksCustomer($oneCustomer);
        }
    }
}