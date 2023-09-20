<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Laporan extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'laporan';
    protected $fillable = [
        'user_id', 'before_foto', 'after_foto', 'deskripsi', 'lokasi', 'catatan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public $sortable = [
        'user_id',
        'before_foto',
        'after_foto',
        'deskripdi',
        'lokasi',
        'catatan',
    ];
}
