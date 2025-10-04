<?php
namespace App\Models;

use CodeIgniter\Model;

class KomponenModel extends Model
{
    protected $table      = 'komponen_gaji';
    protected $primaryKey = 'id_komponen';
    protected $allowedFields = [
        'id_komponen', 'nama_komponen', 'kategori', 'jabatan', 'nominal', 'satuan'
    ];
}
