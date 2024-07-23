<?php

namespace App\Models;
use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table      = 'buku';
    protected $primaryKey = 'id';
    //protected $useTimestamps = false;

    protected $protectFields = false;
    protected $allowedFields = [
        'id',
        'sampul',
        'judul',
        'pengarang'
    ];
}

?>
