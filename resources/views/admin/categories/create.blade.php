@extends('layout');

@section('pagination')
  @include('admin.pagination')
@stop

@section('content')
  {!! Form::open(['action' => ['Admin\CategoriesController@store']]) !!}
    <div class="form-group">
      <div class='row'>
        {!! Form::label('title','Title:') !!}
      </div>

      <div class='row'>
        {!! Form::text('title', '', ['class' => 'form-control']) !!}
      </div>
    </div>

    <div class="form-group">
      <div class="row">
        {!! Form::submit('Create', ['class' => 'btn btn-lg btn-success btn-submit'])!!}
      </div>
    </div>
  {!! Form::close() !!}

  <script type="text/javascript">
    $(".admin-create-category").addClass("active");
  </script>  
@stop