<?php
/**
 * Created by PhpStorm.
 * User: jeshuadunham
 * Date: 5/10/17
 * Time: 9:31 PM
 */

namespace App\Tasks;


interface Commanding
{
    public static function handle();
}