<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $primaryKey = 'file_id';
    public $timestamps = false;
}
