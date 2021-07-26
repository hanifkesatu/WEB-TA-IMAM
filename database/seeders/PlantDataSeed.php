<?php

namespace Database\Seeders;

use App\Models\MDataPlant;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class PlantDataSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0 ; $i < 10; $i++){
            MDataPlant::create(
                [
                'plant-type' => 'plant-1',
                'value' => rand(80,150),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ]
            );
        }

        for($i = 0 ; $i < 10; $i++){
            MDataPlant::create(
                [
                'plant-type' => 'plant-2',
                'value' => rand(80,150),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ]
            );
        }
        
    }
}
