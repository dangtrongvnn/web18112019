<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	protected $table = "category";

	public function product_type() {
		return $this->hasMany('App\ProductType', 'id_cat', 'id');
	}

	public function product() {
		return $this->hasMany('App\Product', 'id_cat', 'id');
	}
}
