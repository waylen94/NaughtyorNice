<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class JsonStoragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Faker\Generator::class);
        $date_time = $faker->date . ' ' . $faker->time;
        
        
        DB::table('json_storages')->insert([
            'name' => 'Testing001',
            'file_name' =>'Origin Network',
            'file_content' =>'{"node": [[1, "mri"], [2, "ct"], [3, "thermostat"], [4, "meter"], [5, "camera"], [6, "tv"], [7, "laptop"], [8, "server1"]], "edge": [[1, 8], [2, 8], [3, 8], [3, 6], [3, 7], [4, 8], [4, 6], [4, 7], [5, 8], [5, 6], [5, 7], [6, 8], [7, 8]]}',
            'created_at' => $date_time,
            'updated_at' => $date_time,
        ]);
        DB::table('json_storages')->insert([
            'name' => 'Testing002',
            'file_name' =>'Origin Cyber Deception Network',
            'file_content' =>'{"node": [[100, "decoy_laptop1"], [101, "decoy_laptop2"], [102, "decoy_thermostat3"], [103, "decoy_thermostat4"], [104, "decoy_tv5"], [105, "decoy_tv6"], [106, "decoy_server7"]], "edge": [[100, 106], [101, 106], [102, 106], [103, 106], [104, 106], [105, 106]]}',
            'created_at' => $date_time,
            'updated_at' => $date_time,
        ]);
        DB::table('json_storages')->insert([
            'name' => 'Testing003',
            'file_name' =>'Origin Network with Attacker',
            'file_content' =>'{"node": [[1, "mri"], [2, "ct"], [3, "thermostat"], [4, "meter"], [5, "camera"], [6, "tv"], [7, "laptop"], [8, "server1"], [500, "attacker"]], "edge": [[1, 8], [2, 8], [3, 8], [3, 6], [3, 7], [4, 8], [4, 6], [4, 7], [5, 8], [5, 6], [5, 7], [6, 8], [7, 8], [8, 550], [500, 1], [500, 2], [500, 3], [500, 4], [500, 5], [500, 6], [500, 7]]}',
            'created_at' => $date_time,
            'updated_at' => $date_time,
        ]);
        DB::table('json_storages')->insert([
            'name' => 'Testing004',
            'file_name' =>'Small Scale Network',
            'file_content' =>'{"node": [[1, "mri"], [2, "ct"], [3, "thermostat"], [4, "meter"], [5, "camera"], [6, "tv"], [7, "laptop"], [8, "server1"], [100, "decoy_laptop1"], [101, "decoy_laptop2"], [102, "decoy_thermostat3"], [103, "decoy_thermostat4"], [104, "decoy_tv5"], [105, "decoy_tv6"], [106, "decoy_server7"], [500, "attacker"]], "edge": [[1, 8], [2, 8], [3, 8], [3, 6], [3, 7], [4, 8], [4, 6], [4, 7], [5, 8], [5, 6], [5, 7], [6, 8], [7, 8], [8, 550], [100, 106], [101, 106], [102, 106], [103, 106], [104, 106], [105, 106], [106, 550], [500, 1], [500, 2], [500, 3], [500, 4], [500, 5], [500, 6], [500, 7], [500, 100], [500, 101], [500, 102], [500, 103], [500, 104], [500, 105]]}',
            'created_at' => $date_time,
            'updated_at' => $date_time,
        ]);
    }
}
