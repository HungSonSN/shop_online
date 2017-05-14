<div class='col-md-12 main-header-cate-search'>
  <div class='row'>
    <div class='col-md-3'>
      <div class='home_page'>
        <a href="/" title="Laravel PHP Framework"><img src="/book_image.png"></a>
      </div>
    </div>
    <div class='col-md-6'>
      <div class='top_search'>
        {!! Form::open(['action' => ['SearchesController@search'], 'class' => 'navbar-form navbar-left']) !!}
          <div class="form-group">
            {!! Form::text('search_text', '', ['class' => 'form-control']) !!}
          </div>
          {!! Form::submit('Search', ['class' => 'btn btn-lg btn-submit'])!!}
        {!! Form::close() !!}
      </div>
    </div>
    <div class='col-md-3'></div>
  </div>
</div>