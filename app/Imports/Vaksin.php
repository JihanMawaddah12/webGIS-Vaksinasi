<?php

namespace App\Imports;

use App\Http\Controllers\HalamanData;
use App\Models\Desa;
use App\Models\Tematik;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Vaksin implements ToCollection, WithHeadingRow
{
    public function transformDate($value, $format = 'Y-m-d')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    
    public function collection(Collection $collection)
    {
        $dataToAdd = [];
        foreach ($collection as $row) {
            $tematik = Tematik::where('kecamatan', $row['kecamatan'])->first()->id;
            try {
                $desa = Desa::where('desa', $row['desa'])->first()->id;
            } catch (\Throwable $th) {
                dd($row['desa']);
            }
            
            $data= [
                'tematik_id' => $tematik,
                'Kelompok' => $row['kelompok'],
                'nakes' => $row['nakes'],
                'petugas_publik' => $row['petugas_publik'],
                'lansia' => $row['lansia'],
                'masyarakat_umum' => $row['masyarakat_umum'],
                'remaja' => $row['remaja'],
                'desa_id' => $desa,
                'usia' => $row['usia_6_sampai_11_tahun'],
                'tanggal' =>$this->transformDate($row['tanggal']),
            ];
            array_push($dataToAdd, $data);
        }
        $datas = DB::table('halaman_data')->insert($dataToAdd);
        return $datas;
    }
}
