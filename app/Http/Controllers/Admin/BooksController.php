<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class BooksController extends Controller
{
    public function create()
    { 
      return view('admin.books.create');
    }

    public function store(Request $request)
    {
      $mytime = Carbon::now();
      $front_photo_path = '';
      if ($request->hasFile('front_photo')) {
        $front_photo_name = 'front_' . $mytime->format('YmdH') . '.' . $request->file('front_photo')->getClientOriginalExtension();
        $front_photo_path = '/public/images/books/' . $request->name . '/' . $front_photo_name;
        $request->file('front_photo')->move(
            base_path() . '/public/images/books/' . $request->name . '/', $front_photo_name
        );        
      }

      $back_photo_path = '';
      if ($request->hasFile('back_photo')) {
        $back_photo_name = 'back_' . $mytime->format('YmdH') . '.' . $request->file('back_photo')->getClientOriginalExtension();
        $back_photo_path = '/public/images/books/' . $request->name . '/' . $back_photo_name;  
        $request->file('back_photo')->move(
            base_path() . '/public/images/books/' . $request->name . '/', $back_photo_name
        );         
      }    

      $book = \App\Models\Book::create([
          'name'          => $request->name,
          'author_id'     => $request->author_id,
          'subject_id'     => $request->subject_id,
          'publisher_id'     => $request->publisher_id,
          'description'   => $request->description,
          'orig_price'   => $request->orig_price,
          'discount_value'   => $request->discount_value,
          'total_page'   => $request->total_page,
          'width_size'   => $request->width_size,
          'length_size'   => $request->length_size,
          'language'   => $request->language,
          'front_photo' => $front_photo_path,
          'back_photo' => $back_photo_path,
          'code_product'   => $request->code_product,
          'weight'   => $request->weight,
          'format'   => $request->format,
          'published_date'   => $request->published_date
      ]);

      return redirect('/admin');
    }
}
