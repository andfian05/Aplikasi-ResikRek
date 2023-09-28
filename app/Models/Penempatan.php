<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Penempatan extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'penempatan';
    protected $fillable = [
        'kab_id', 'kec_id', 'desa_id', 'alamat'
    ];

    public function kabupaten() 
    {
        return $this->belongsTo(Kabupaten::class, 'kab_id', 'id_kab');
    }

    public function kecamatan() 
    {
        return $this->belongsTo(Kecamatan::class, 'kec_id', 'id_kec');
    }

    public function desa() 
    {
        return $this->belongsTo(Desa::class, 'desa_id', 'id_desa');
    }

    public $sortable = [
        'kab_id', 'kec_id', 'desa_id', 'alamat',
    ];
}
