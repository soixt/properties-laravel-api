<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->csvToTable();
    }

    /**
     * This function could be extracted as command to return collection instead of directly storing values for reusability of the reading from csv function
     */
    protected function csvToTable () {
        Property::truncate();
  
        $csvFile = fopen(storage_path("app/properties.csv"), "r");
  
        $header = true;
        while (($data = fgetcsv($csvFile, 0, ",")) !== FALSE) {
            if (!$header) {
                Property::create([
                    "name" => $data[0],
                    "price" => $data[1],
                    "bedrooms" => $data[2],
                    "bathrooms" => $data[3],
                    "storeys" => $data[4],
                    "garages" => $data[5],
                ]);    
            }
            $header = false;
        }
   
        fclose($csvFile);
    }
}
