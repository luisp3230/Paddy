<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
	use Notifiable;

    protected $table = 'admin';

    protected $primaryKey = 'id';

    protected $fillable = ['password','first_name','last_name','email'];

    protected $hidden = ['password', 'remember_token','created_at', 'updated_at'];

}