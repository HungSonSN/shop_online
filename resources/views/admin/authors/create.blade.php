@extends('layout');

@section('pagination')
  @include('admin.pagination')
@stop

@section('content')
  {!! Form::open(['action' => ['Admin\AuthorsController@store']]) !!}
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
        {!! Form::label('description','Description:') !!}
      </div>   
      <div class='row'>   
        {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class="form-group">
      <div class='row'>
        {!! Form::label('category_ids','Categories:') !!}
      </div>   
      <div class='row'>   
        <select class="form-control" name='category_ids[]' id='category_ids' multiple='multiple'>
          @foreach($categories as $category)
            <option value="{{$category->category_id}}">{{$category->title}}</option>
          @endforeach
        </select>
      </div>
    </div>     

    <div class="form-group">
      <div class="row">
        {!! Form::submit('Create', ['class' => 'btn btn-lg btn-success btn-submit'])!!}
      </div>
    </div>
  {!! Form::close() !!}

  <style type="text/css">
    .select2-container {
      width: 100% !important;
    }
  </style>    
  
  @include('admin.authors.author_js')
@stop