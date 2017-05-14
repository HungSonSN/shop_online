<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AuthorsController extends Controller
{
    public function index()
    {
        return view('admin.authors.index');
    }

    public function create()
    {
        $categories = \App\Models\Category::all();
      
        return view('admin.authors.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $author = \App\Models\Author::create([
            'name'          => $request->name,
            'description' => $request->description
        ]);

        $now = Carbon::now()->toDateTimeString();

        $data = [];
        
        foreach ($request->category_ids as $category_id) {
            $data[] = [
              'author_id' => $author->id,
              'category_id' => $category_id,
              'created_at' => $now,
              'updated_at' => $now
            ];
        }

        \App\Models\AuthorCategory::insert($data);

        return redirect('/admin');
    }

    public function search(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $authors = \App\Models\Author::where('name', 'like', '%' . $term . '%')->limit(5)->get();

        $formatted_authors = [];

        foreach ($authors as $author) {
            $formatted_authors[] = ['id' => $author->author_id, 'text' => $author->name];
        }

        return \Response::json($formatted_authors);
    }
}
