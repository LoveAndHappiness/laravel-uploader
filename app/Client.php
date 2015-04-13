<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	//
	protected $fillable = [
		'salutation', 
		'firstName',
		'lastName',
		'email',
		'phone'
	];

	public function orders() {
		return $this->hasMany('App\Order');
	}

}
