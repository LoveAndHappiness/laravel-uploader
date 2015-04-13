<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	//
	protected $fillable = [
		'user_id', 
		'client_id',
		'householdCount',
		'comments',
		'paid',
		'claimed',
		'sent',
		'objected',
		'refunded',
		'resolved',
		'completed'
	];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function client() {
		return $this->belongsTo('App\Client');
	}

	public function files() {
		return $this->hasMany('App\File');
	}

}
