<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Language::create(
        ['lang_name' => 'Telgu'],
    
     );
    }
}
