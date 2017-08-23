<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PartnerItem extends Model
{
    //
    protected $table = 'partner_item';

    protected $fillable = array('id_partner','id_item', 'item','description','price','image');

   	protected $hidden = ['created_at', 'updated_at'];  

   	public function partner(){
		return $this->belongsTo('App\Model\Partner','id_partner','id');
	}
}
