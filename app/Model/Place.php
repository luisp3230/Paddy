<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //
    protected $table = 'place';

    protected $primaryKey = 'id';

    protected $fillable = 'name';

   	protected $hidden = ['created_at', 'updated_at'];
}
