<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PublishersController extends Controller
{
  public function create()
  {
    $categories = \App\Models\Category::all();

  	return view('admin.publishers.create', compact('categories'));
  }

  public function store(Request $request)
  {
    $mytime = Carbon::now();
    $icon_name = $mytime->format('YmdH') . '.' . $request->file('icon')->getClientOriginalExtension();

    $icon_path = '/public/images/publishers/' . $icon_name;

    $request->file('icon')->move(
        base_path() . '/public/images/publishers/', $icon_name
    );
    $publisher = \App\Models\Publisher::create([
        'name'          => $request->name,
        'icon'          => $icon_path,
        'description'   => $request->description
    ]);

    $now = Carbon::now()->toDateTimeString();

    $data = [];
    
    foreach ($request->category_ids as $category_id) {
        $data[] = [
          'publisher_id' => $publisher->id,
          'category_id' => $category_id,
          'created_at' => $now,
          'updated_at' => $now
        ];
    }

    \App\Models\CategoryPublisher::insert($data);    

    return redirect('/admin');
  }

    public function search(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $publishers = \App\Models\Publisher::where('name', 'like', '%' . $term . '%')->limit(5)->get();

        $formatted_publishers = [];

        foreach ($publishers as $publisher) {
            $formatted_publishers[] = ['id' => $publisher->publisher_id, 'text' => $publisher->name];
        }

        return \Response::json($formatted_publishers);
    }  
}
