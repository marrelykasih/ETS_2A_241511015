<?php
namespace App\Models;

use CodeIgniter\Model;

class PenggajianModel extends Model
{
    protected $table = 'penggajian';
    protected $allowedFields = ['id_anggota', 'id_komponen_gaji'];
    public function getPenggajian()
    {
        return $this->db->table('penggajian')
            ->select('anggota.id_anggota, anggota.gelar_depan, anggota.nama_depan, anggota.nama_belakang, anggota.gelar_belakang, anggota.jabatan, anggota.status_pernikahan, anggota.jumlah_anak, SUM(komponen_gaji.nominal) as total_gaji')
            ->join('anggota', 'anggota.id_anggota = penggajian.id_anggota')
            ->join('komponen_gaji', 'komponen_gaji.id_komponen_gaji = penggajian.id_komponen_gaji')
            ->groupBy('anggota.id_anggota')
            ->get()->getResultArray();
    }

  
    public function getDetail($id)
    {
        return $this->db->table('penggajian')
            ->select('komponen_gaji.*, anggota.*')
            ->join('anggota', 'anggota.id_anggota = penggajian.id_anggota')
            ->join('komponen_gaji', 'komponen_gaji.id_komponen_gaji = penggajian.id_komponen_gaji')
            ->where('penggajian.id_anggota', $id)
            ->get()->getResultArray();
    }
}
