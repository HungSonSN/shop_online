<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
	public function create()
	{
		return view('admin.categories.create');
	}

  public function store(Request $request)
  {
    $category = \App\Models\Category::create([
        'title'          => $request->title
    ]);

    return redirect('/admin');
  }  

  public function search(Request $request)
  {
    $term = trim($request->q);

    if (empty($term)) {
        return \Response::json([]);
    }

    $categories = \App\Models\Category::where('title', 'like', '%' . $term . '%')->limit(5)->get();

    $formatted_categories = [];

    foreach ($categories as $category) {
        $formatted_categories[] = ['id' => $category->category_id, 'text' => $category->title];
    }

    return \Response::json($formatted_categories);
  }  
}
