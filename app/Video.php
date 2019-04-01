<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $primaryKey = 'video_id';
    protected $fillable = [
        'video_id',
        'uuid',
        'title',
        'file',
        'created_at',
        'updated_at',
    ];
}
