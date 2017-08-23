<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	protected $table = 'category';

	protected $primaryKey = 'id';

    protected $fillable = 'description';

    protected $hidden = ['created_at', 'updated_at'];     
}
