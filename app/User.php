<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Nicolaslopezj\Searchable\SearchableTrait;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   // protected $table = 'user';
    protected $primaryKey = 'id';
    public $timestamps = false;

    use Notifiable;
    use SearchableTrait;


     /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'users.First_Name' => 10,
          
            'users.id' => 3,
        ]
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'First_Name', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
