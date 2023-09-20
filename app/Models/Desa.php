<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Desa extends Model
{
    use HasFactory;
    use Sortable;

    
    protected $table = 'desa';
    protected $fillable = [
        'id_desa', 'kec_id', 'nama'
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kec_id', 'id_kec');
    }

    public $sortable = [
        'id_desa', 'kec_id', 'nama'
    ];
}
