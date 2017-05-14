@extends('layout');

@section('pagination')
  @include('admin.pagination')
@stop

@section('content')
  {!! Form::open(['action' => ['Admin\PublishersController@store'], 'files' => 'true']) !!}
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
      <div class='row'>
        {!! Form::label('icon','Icon:') !!}
      </div>

      <div class='row'>
        {!! Form::file('icon') !!}
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
      <div class="row">
        {!! Form::submit('Create', ['class' => 'btn btn-lg btn-success btn-submit'])!!}
      </div>
    </div>
  {!! Form::close() !!}

  <script type="text/javascript">
    $(".admin-create-publisher").addClass("active");
    $('#category_ids').select2();
  </script>  
@stop