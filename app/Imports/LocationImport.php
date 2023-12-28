<?php

namespace App\Imports;

use App\Models\LocationAndSubLocations;
use Maatwebsite\Excel\Concerns\ToModel;

class LocationImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new LocationAndSubLocations([
            'subcounty' => $row[0],
            'division' => $row[1],
            'location' => $row[2],
            'sublocation' => $row[3],
            'villages' => $row[4]
        ]);
    }
}
