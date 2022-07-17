<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experte;
class AdminUserSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Experte::delete();
      
        $expert= [
            ['skill_type'=>"1", 'experties_name' => 'Vedic Puja-path'],
            ['skill_type'=>"1", 'experties_name' => 'Karamkand visheshgya'],
            ['skill_type'=>"1", 'experties_name' => 'Kathavachak'],
            ['skill_type'=>"1", 'experties_name' => 'Vedic Puja-path'],
            ['skill_type'=>"1", 'experties_name' => 'Karamkand'],
            ['skill_type'=>"1", 'experties_name' => 'Puja-path Consultation'],
            ['skill_type'=>"1", 'experties_name' => 'Gemstone consultation'],
            ['skill_type'=>"1", 'experties_name' => 'Puja Muhurat Consultation'],
            ['skill_type'=>"1", 'experties_name' => 'Bhajan/Sandhya- Sangeetmay Path'],
            ['skill_type'=>"2", 'experties_name' => 'Birth Chart Analysis'],
            ['skill_type'=>"2", 'experties_name' => 'Gemstone consultation'],
            ['skill_type'=>"2", 'experties_name' => 'Vastu Consultation'],
            ['skill_type'=>"2", 'experties_name' => 'Kundali Matching'],
            ['skill_type'=>"2", 'experties_name' => 'Marriage consultation'],
            ['skill_type'=>"2", 'experties_name' => 'Career and business advice'],
            ['skill_type'=>"2", 'experties_name' => 'Love and Relationship advice'],
            ['skill_type'=>"2", 'experties_name' => 'Health and Family issues advice'],
            ['skill_type'=>"2", 'experties_name' => 'Spiritual/Reiki healing']
        ];
        Experte::insert($expert);
    }
}
