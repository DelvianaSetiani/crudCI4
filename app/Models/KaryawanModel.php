<?php
namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'jekel', 'tanggal_lahir', 'telp', 'alamat'];
}