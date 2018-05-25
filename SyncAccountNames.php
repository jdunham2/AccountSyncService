<?php

namespace App\Tasks\PsOnline;

use App\Tasks\Commanding;
use App\Tasks\Models\Adworks\Customer as AdworksCustomers;
use App\Tasks\Models\PS\Account as PSAccounts;

class SyncAccountNames implements Commanding
{
    public static function handle()
    {
        PSAccounts::destroyAll();

        $adworks_customers = AdworksCustomers::getCustomerAccountDetails();

        PSAccounts::insertAdworksCustomer($adworks_customers);
    }
}
