<?php
//
//namespace App\Helper;
//
//use App\Models\CreateEcltable;
////use Maatwebsite\Excel\Concerns\ToModel;
//
//
//
//class ImportsExcl
//{
//
//    public function model(array $row)
//    {
//
//        return new CreateEcltable([
//            'name'       => $row[0] ?? null,
//            'department' => $row[1] ?? null,
//            'amount'     => $row[2] ?? null,
//            'status'     => $row[3] ?? null,
//        ]);
//    }
//}


namespace App\Helper;

use App\Models\CreateEcltable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ImportsExcl implements ToModel , WithHeadingRow
{

    public function model(array $row)
    {


//dd($row);
        return new CreateEcltable([
            'qty'              => isset($row['kmy_mtlob']) ? trim($row['kmy_mtlob']) : '',
            'sale_report_type' => isset($row['alrsyd']) ? trim($row['alrsyd']) : '',
            'sale_report'      => isset($row['alkmy_almnsrf']) ? trim($row['alkmy_almnsrf']) : '',
            'pk_type'          => isset($row['alohd']) ? trim($row['alohd']) : '',
            'name'             => isset($row['asm_alsnf']) ? trim($row['asm_alsnf']) : '',
            'barcode'          => isset($row['rkm_alsnf']) ? trim($row['rkm_alsnf']) : '',

        ]);
    }

}
//        if (empty($row['name'])) {
//            return null;
//        }

//        return new CreateEcltable([
//            'name'                   => trim($row[0]),
//            'barcode'                => trim($row[1]) ?? '',
//            'pk_type'                => trim($row[2]) ?? '',
//            'sale_report'            => trim($row[3]) ?? '',
//            'sale_report_type'       => trim($row[4]) ?? '',
//            'qty'                    => trim($row[5]) ?? '',
//
//        ]);