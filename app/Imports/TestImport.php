<?php

namespace App\Imports;

use App\Models\Import;
use Maatwebsite\Excel\Concerns\ToModel;


class TestImport implements ToModel
{
    public function model(array $row)
    {
        return new Import([

                              "code" => $row[1],
                              "name" => $row[2],
                              "level1" => $row[3],
                              "level2" => $row[4],
                              "level3" => $row[5],
                              "price" => $row[6],
                              "price_sp" => $row[7],
                              "quantity" => $row[8],
                              "properties" => $row[9],
                              "purchases" => $row[10],
                              "image" => $row[11],
                              "show" => $row[12],
                              "description" => $row[13],
                          ]);
    }
}
