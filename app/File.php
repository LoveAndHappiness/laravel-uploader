<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model {

	//
	protected $fillable = [
		'order_id', 
		'originalFilename',
		'filename',
		'filepath'
		];

	public function orders() {
		return $this->belongsTo('App\Order');
	}

}
