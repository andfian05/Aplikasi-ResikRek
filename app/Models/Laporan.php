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
        'user_id', 'sebelum', 'sesudah', 'deskripsi', 'lokasi', 'catatan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public $sortable = [
        'user_id',
        'sebelum',
        'sesudahs',
        'deskripdi',
        'lokasi',
        'catatan',
    ];
}
