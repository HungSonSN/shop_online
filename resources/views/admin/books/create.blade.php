@extends('layout');

@section('pagination')
  @include('admin.pagination')
@stop

@section('content')
  {!! Form::open(['action' => ['Admin\BooksController@store'], 'files' => 'true']) !!}
    <div class="form-group">
      <div class='row'>
        {!! Form::label('name','Name:') !!}
      </div>

      <div class='row'>
        {!! Form::text('name', '', ['class' => 'form-control']) !!}
      </div>
    </div>   

    <div class="form-group">
      <div class='row'>
        {!! Form::label('author_id','Author:') !!}
      </div>   
      <div class='row'>   
        {!! Form::select('author_id', []) !!}
      </div>
    </div>   

    <div class="form-group">
      <div class='row'>
        {!! Form::label('subject_id','Subject:') !!}
      </div>   
      <div class='row'>   
        {!! Form::select('subject_id', []) !!}
      </div>
    </div>  

    <div class="form-group">
      <div class='row'>
        {!! Form::label('publisher_id','Publisher:') !!}
      </div>   
      <div class='row'>   
        {!! Form::select('publisher_id', []) !!}
      </div>
    </div>         
 
    <div class="form-group">
      <div class='row'>
        {!! Form::label('description','Description:') !!}
      </div>   
      <div class='row'>   
        {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class="form-group">
      <div class='row'>
        {!! Form::label('front_photo','FrontPhoto:') !!}
      </div>

      <div class='row'>
        {!! Form::file('front_photo') !!}
      </div>
    </div>

    <div class="form-group">
      <div class='row'>
        {!! Form::label('back_photo','BackPhoto:') !!}
      </div>

      <div class='row'>
        {!! Form::file('back_photo') !!}
      </div>
    </div>

    <div class="form-group">
      <div class='row'>
        {!! Form::label('orig_price','Original Price:') !!}
      </div>   
      <div class='row'>   
        {!! Form::number('orig_price', '', ['class' => 'form-control']) !!}
      </div>
    </div>    

    <div class="form-group">
      <div class='row'>
        {!! Form::label('discount_value','Discount Value:') !!}
      </div>   
      <div class='row'>   
        {!! Form::number('discount_value', '', ['class' => 'form-control']) !!}
      </div>
    </div>    

    <div class="form-group">
      <div class='row'>
        {!! Form::label('total_page','Total Page:') !!}
      </div>   
      <div class='row'>   
        {!! Form::number('total_page', '', ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class="form-group">
      <div class='row'>
        {!! Form::label('width_size','Width Size:') !!}
      </div>   
      <div class='row'>   
        {!! Form::number('width_size', '', ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class="form-group">
      <div class='row'>
        {!! Form::label('length_size','Length Size:') !!}
      </div>   
      <div class='row'>   
        {!! Form::number('length_size', '', ['class' => 'form-control']) !!}
      </div>
    </div>   

    <div class="form-group">
      <div class='row'>
        {!! Form::label('language','Language:') !!}
      </div>   
      <div class='row'>   
        {!! Form::text('language', '', ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class="form-group">
      <div class='row'>
        {!! Form::label('code_product','Code Product:') !!}
      </div>   
      <div class='row'>   
        {!! Form::text('code_product', '', ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class="form-group">
      <div class='row'>
        {!! Form::label('weight','Weight:') !!}
      </div>   
      <div class='row'>   
        {!! Form::number('weight', '', ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class="form-group">
      <div class='row'>
        {!! Form::label('format','Format:') !!}
      </div>   
      <div class='row'>   
        {!! Form::text('format', '', ['class' => 'form-control']) !!}
      </div>
    </div>       

    <div class="form-group">
      <div class='row'>
        {!! Form::label('published_date','Published Date:') !!}
      </div>   
      <div class='row'>   
        {!! Form::date('published_date', Carbon::now(), ['class' => 'form-control']) !!}
      </div>
    </div>              

    <div class="form-group">
      <div class="row">
        {!! Form::submit('Create', ['class' => 'btn btn-lg btn-success btn-submit'])!!}
      </div>
    </div>
  {!! Form::close() !!}

	<script type="text/javascript">
	  $(".admin-create-book").addClass("active");
	</script>  

  <style type="text/css">
    .select2-container {
      width: 100% !important;
    }
  </style>

  @include('admin.books.book_js')
@stop