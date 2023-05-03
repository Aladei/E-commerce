<?php namespace Aladei\ECommerce\Database\Seeders;

use Aladei\ContentBuilder\Database\Seeders\ContentBuilderNavigationItemsTargetsSeeder;

class EcommerceNavigationItemsTargetsSeeder extends ContentBuilderNavigationItemsTargetsSeeder
{
    protected function target()
    {
        $aReturn[] = [
            'const' => 'ecommerce-product',
            'package' => 'aladei/e-commerce',
            'translations' => [
                'nl' => [
                    'value' => 'E-commerce | Product',
                    'description' => null
                ],
                'en' => [
                    'value' => 'E-commerce | Product',
                    'description' => null
                ],
                'de' => [
                    'value' => 'E-commerce | Produkt',
                    'description' => null
                ]
            ]
        ];

        $aReturn[] = [
            'const' => 'ecommerce-category',
            'package' => 'aladei/e-commerce',
            'translations' => [
                'nl' => [
                    'value' => 'E-commerce | Categorie',
                    'description' => null
                ],
                'en' => [
                    'value' => 'E-commerce | Category',
                    'description' => null
                ],
                'de' => [
                    'value' => 'E-commerce | Kategorie',
                    'description' => null
                ]
            ]
        ];

        return $aReturn;
    }

}
