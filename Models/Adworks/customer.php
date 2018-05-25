<?php
/**
 * Created by PhpStorm.
 * User: jeshuadunham
 * Date: 5/1/17
 * Time: 8:07 PM
 */

namespace App\Tasks\Models\Adworks;

use App\Tasks\Models\AdworksBase;

class Customer extends AdworksBase
{
    public static function getCustomerAccountDetails()
    {
        return static::query("
              SELECT cust_number, 
              display_name, 
              salesperson
              FROM customers 
              ORDER BY cust_number")->get();
    }
}