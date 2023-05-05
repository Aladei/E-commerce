<?php namespace Aladei\ECommerce\Database\Seeders;

use Aladei\Base\Database\Seeders\Seeder as BaseSeeder;

class EcommerceSeeder extends BaseSeeder
{
    private static $_seeders = [];

    public function run()
    {
        $this->call(self::$_seeders);
    }

}
