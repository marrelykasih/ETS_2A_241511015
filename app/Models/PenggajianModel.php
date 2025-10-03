<?php namespace App\Models;

use CodeIgniter\Model;

class PenggajianModel extends Model
{
    protected $table = 'penggajian';
    protected $allowedFields = ['id_komponen_gaji', 'id_anggota'];

    public function getGajiAnggota($id_anggota)
    {
        return $this->select('komponen_gaji.nama_komponen, komponen_gaji.nominal, komponen_gaji.satuan')
                    ->join('komponen_gaji', 'komponen_gaji.id_komponen_gaji = penggajian.id_komponen_gaji')
                    ->where('penggajian.id_anggota', $id_anggota)
                    ->findAll();
    }
}
