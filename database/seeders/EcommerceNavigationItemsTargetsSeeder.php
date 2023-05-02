<?php namespace Aladei\ECommerce\Database\Seeders;

use Aladei\Navigation\Database\Seeders\NavigationItemsTargetsSeeder;

class EcommerceNavigationItemsTargetsSeeder extends NavigationItemsTargetsSeeder
{
    protected function target()
    {
        $aReturn[] = [
            'const' => 'ecommerce-product',
            'package' => 'aladei/e-commerce',
            'translations' => [
                'nl' => [
                    'value' => 'Product',
                    'description' => null
                ],
                'en' => [
                    'value' => 'Product',
                    'description' => null
                ],
                'de' => [
                    'value' => 'Produkt',
                    'description' => null
                ]
            ]
        ];

        $aReturn[] = [
            'const' => 'ecommerce-category',
            'package' => 'aladei/e-commerce',
            'translations' => [
                'nl' => [
                    'value' => 'Categorie',
                    'description' => null
                ],
                'en' => [
                    'value' => 'Category',
                    'description' => null
                ],
                'de' => [
                    'value' => 'Kategorie',
                    'description' => null
                ]
            ]
        ];

        return $aReturn;
    }

}
