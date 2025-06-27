<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    protected $table = 'admin_profile';

    protected $primaryKey = 'id';

    protected $fillable = [
        'image',
        'instagram',
        'education',
        'name',
        'created_at',
    ];

    public $timestamps = false;
}
