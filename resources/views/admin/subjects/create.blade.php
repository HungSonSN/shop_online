@extends('layout');

@section('pagination')
  @include('admin.pagination')
@stop

@section('content')
  {!! Form::open(['action' => ['Admin\SubjectsController@store']]) !!}
    <div class="form-group">
      <div class='row'>
        {!! Form::label('title','Title:') !!}
      </div>

      <div class='row'>
        {!! Form::text('title', '', ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class="form-group">
      <div class='row'>
        {!! Form::label('category_id','Category:') !!}
      </div>   
      <div class='row'>   
        <select class="form-control" name='category_id' id='category_id'>
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

  @include('admin.subjects.subject_js')
@stop