<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SubjectsController extends Controller
{
  public function create()
  {
    $categories = \App\Models\Category::all();
    return view('admin.subjects.create', compact('categories'));
  }

  public function store(Request $request)
  {
    $category = \App\Models\Subject::create([
        'title'          => $request->title,
        'category_id'  => $request->category_id
    ]);

    return redirect('/admin');
  } 

  public function search(Request $request)
  {
    $term = trim($request->q);

    if (empty($term)) {
        return \Response::json([]);
    }

    $subjects = \App\Models\Subject::where('title', 'like', '%' . $term . '%')->limit(5)->get();

    $formatted_subjects = [];

    foreach ($subjects as $subject) {
        $formatted_subjects[] = ['id' => $subject->subject_id, 'text' => $subject->title];
    }

    return \Response::json($formatted_subjects);
  }
}
