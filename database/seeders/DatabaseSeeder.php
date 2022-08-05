<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PujaCategory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        PujaCategory::create([
            'name' => 'With Samagri',
            'name_desc' => 'If you wish that the pooja of your choice is to be performed specially with more pandits or your pooja is to be performed from holy places in India of your choice. Then, you can book your pooja under this category'
        ]);

        PujaCategory::create([
            'name' => 'Without Samagri',
            'name_desc' => 'If you wish that the pooja of your choice is to be performed specially with more pandits or your pooja is to be performed from holy places in India of your choice. Then, you can book your pooja under this category'
        ]);
        
        PujaCategory::create([
            'name' => 'All',
            'name_desc' => 'Urgency: If date for your pooja is not available in category i) and you wish to book your pooja on early date'
        ]);

    }
}
