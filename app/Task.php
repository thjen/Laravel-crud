<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'task_id';

    protected $fillable = [
        'task_id',
        'task_name',
        'task_description',
        'created_at',
        'updated_at',
        'user_id'
    ];
}
