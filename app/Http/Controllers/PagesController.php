<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductType;
use App\Slide;
use Illuminate\Http\Request;

/*use Illuminate\Http\Request;*/

class PagesController extends Controller {
	public function getIndex() {
		$slide = Slide::all();
		/*var_dump($slide);*/
		/*exit();*/
		$type_product_2 = ProductType::all()->where('id_cat', 2);
		return view('pages.home', compact('slide', 'type_product_2'));
	}

	public function getCatalog() {

		$category = Category::all();
		/*var_dump($category);*/
		/*exit();*/

		$type_product_2 = ProductType::all()->where('id_cat', 2);
		$type_product_3 = ProductType::all()->where('id_cat', 3);
		$type_product_4 = ProductType::all()->where('id_cat', 4);
		$type_product_5 = ProductType::all()->where('id_cat', 5);
		return view('pages.allproducts', compact('category', 'type_product_2', 'type_product_3', 'type_product_4', 'type_product_5'));
	}

	public function getCeramic() {

		$product = Product::all()->where('id_cat', 1);
		$type_product_2 = ProductType::all()->where('id_cat', 2);
		$type_product_3 = ProductType::all()->where('id_cat', 3);
		$type_product_4 = ProductType::all()->where('id_cat', 4);
		$type_product_5 = ProductType::all()->where('id_cat', 5);
		/*var_dump($product);*/
		/*exit();*/
		return view('pages.ceramictiles', compact('product', 'type_product_2', 'type_product_3', 'type_product_4', 'type_product_5'));
	}

	public function getDetail(Request $req) {
		$product = Product::where('id', $req->id)->first();
		/*var_dump($product);
		exit();*/
		$type_product_2 = ProductType::all()->where('id_cat', 2);
		return view('pages.detailproduct', compact('product', 'type_product_2'));
	}

	public function getSlab() {
		$type_product_2 = ProductType::all()->where('id_cat', 2);
		$type_product_3 = ProductType::all()->where('id_cat', 3);
		$type_product_4 = ProductType::all()->where('id_cat', 4);
		$type_product_5 = ProductType::all()->where('id_cat', 5);
		return view('pages.slabs', compact('type_product_2', 'type_product_3', 'type_product_4', 'type_product_5'));
	}

}
