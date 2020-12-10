<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'         =>  'SMAEL Water proof Military',
            'price'        =>  '59',
            'category'     =>  'Watch',
            'description'  =>  'SMAEL Water proof Military Digital Watche Shock Men Analog Quartz',
            'gallery'      =>  '/img/watch2.jpg'
            ],
            [
            'name'         =>  'Fashion Sport',
            'price'        =>  '65',
            'category'     =>  'Watch',
            'description'  =>  'Fashion Sport Men s Stainless Steel Case Leather Band Quartz 
                                Analog Wrist Watch',
            'gallery'      =>  '/img/watch1.jpg'
            ],
            [
            'name'         =>  'SMAEL Water proof Military ',
            'price'        =>  '60',
            'category'     =>  'Watch',
            'description'  =>  '2019 SMAEL Waterproof Military Watches Shock Men Analog Quartz 
                                Digital Watch',
            'gallery'      =>  '/img/watch4.jpg'
            ],
            [
            'name'         =>  'Fashion Sport 2',
            'price'        =>  '65',
            'category'     =>  'Watch',
            'description'  =>  'Fashion Sport Men s Stainless Steel Case Leather Band Quartz
                                Analog Wrist Watch',
            'gallery'      =>  '/img/watch5.jpg'
            ],
            [
            'name'         =>  'M4',
            'price'        =>  '22',
            'category'     =>  'Watch',
            'description'  =>  'Bluetooth Smart Watch M4 Heart Rate Blood Pressure 
                                Fitness FIT BIT Sport Tracker',
            'gallery'      =>  '/img/watch6.jpg'
            ],
            [
            'name'         =>  '1 Million',
            'price'        =>  '80',
            'category'     =>  'Parfum',
            'description'  =>  '1 Million by Paco Rabanne 3.4 Fl. Oz. Pure Parfum Spray for Men New',
            'gallery'      =>  '/img/parfum1.jpg'
            ],
            [
            'name'         =>  'Sauvage',
            'price'        =>  '70',
            'category'     =>  'Parfum',
            'description'  =>  'DIOR SAUVAGE EAU DE PARFUM EDP 100ml spray',
            'gallery'      =>  '/img/parfum2.jpg'
            ],
            [
            'name'         =>  'Homme Ideal',
            'price'        =>  '80',
            'category'     =>  'Parfum',
            'description'  =>  'Guerlain L\'Homme Ideal L\'Intense for Men Eau de Parfum 
                                spray 3.4 oz 100 ml Seale',
            'gallery'      =>  '/img/parfum3.jpg'
            ],
            [
            'name'         =>  'Homme Ideal',
            'price'        =>  '71',
            'category'     =>  'Parfum',
            'description'  =>  'GUERLAIN IDEAL L HOMME All Version For Men 100 ml NIB Authentic',
            'gallery'      =>  '/img/parfum4.png'
            ],
            [
            'name'         =>  'Kids Dragon',
            'price'        =>  '43',
            'category'     =>  'Parfum',
            'description'  =>  'NEW Eau de Parfum for Boys Kids Dragon Fresh Fragrance 55 ml',
            'gallery'      =>  '/img/parfum5.jpg'
            ],
            [
            'name'         =>  'Chanel',
            'price'        =>  '39',
            'category'     =>  'Parfum',
            'description'  =>  'CHANEL No 5 EDP 3.4 FL Oz 100 Ml Eau De Parfum - Perfume Spray 
                                For Women New',
            'gallery'      =>  '/img/parfum6.jpg'
            ],
            [
            'name'         =>  'Sauvage',
            'price'        =>  '62',
            'category'     =>  'Parfum',
            'description'  =>  'Dior SAUVAGE EAU DE PARFUM 10 ml 0.34 FL OZ MINIATURE IN BOX 
                                CASE VIP GIFT',
            'gallery'      =>  '/img/parfum7.jpg'
            ],
            [
            'name'         =>  'Love',
            'price'        =>  '36',
            'category'     =>  'Parfum',
            'description'  =>  'Love Perfume by Herban Cowboy, 1.7 oz',
            'gallery'      =>  '/img/parfum8.jpg'
            ],
            [
            'name'         =>  'Creed Aventus',
            'price'        =>  '85',
            'category'     =>  'Parfum',
            'description'  =>  'Creed Aventus Cologne Eau de Parfum EDP For Men 
                                3.3 fl. oz  100 ml France NEW',
            'gallery'      =>  '/img/parfum9.jpg'
            ],
        ]);
    }
}
