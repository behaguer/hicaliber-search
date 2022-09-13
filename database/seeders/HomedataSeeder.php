<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomedataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        $demodatafile = base_path().DIRECTORY_SEPARATOR."demodata".DIRECTORY_SEPARATOR."property-data.csv";
        $rows   = array_map('str_getcsv', file($demodatafile));
        $header = array_shift($rows);
        $csv    = array();

        foreach($rows as $row) {
            $csv[] = array_combine($header, $row);
        } 

        foreach ($csv as $property) {

            DB::table('homedata')->insert([
                'name' => $property['Name'],
                'price' => $property['Price'],
                'bedrooms' => $property['Bedrooms'],
                'bathrooms' => $property['Bathrooms'],
                'stories' => $property['Storeys'],
                'garages' => $property['Garages'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

    }
}
