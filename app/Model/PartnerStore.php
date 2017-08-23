<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PartnerStore extends Model
{
    //
    protected $table = 'partner_store';

    protected $fillable = array('id_partner','id_store', 'store','description','x','y','address_reference','image');

   	protected $hidden = ['created_at', 'updated_at'];  

   	public function partner(){
		return $this->belongsTo('App\Model\Partner','id_partner','id');
	}    
}
