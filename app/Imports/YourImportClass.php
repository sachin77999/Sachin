<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\LocationAndSubLocations;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;

class YourImportClass implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new LocationAndSubLocations([
        //    'subcounty' => $row[0],
            'division' => $row[1],
            'location' => $row[2],
            'sublocation' => $row[3],
            'villages' => $row[4]
        ]);
    }
}
