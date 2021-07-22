<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class webinar extends Model
{
    protected $table = 'tb_webinar';
    protected $primaryKey = 'id';
    protected $fillable = [
        'pamflet_webinar', 'judul_webinar', 'deskripsi', 'deadline', 'link',
    ];
}
