<div class='navigation-home-page'>
  <ul class="nav nav-pills nav-stacked categories-content">
    <li>
      <a href="/" title="Sach giam gia">Sach giam gia</a>
    </li>
    <li>
      <a href="/" title="Sach giam gia">Sach ban chay</a>
    </li>
    <li>
      <a href="/" title="Sach moi phat hanh">Sach moi phat hanh</a>
    </li>
    <li>
      <a href="/" title="Sach sap phat hanh">Sach sap phat hanh</a>
    </li>
    @foreach($categories as $category)
      <li id="category-{{$category->category_id}}" class="categories-list">
        <a href="/categories/{{$category->category_id}}">{{$category->title}}</a>
        <div id="sub-menu-{{$category->category_id}}" class='sub-menu-lists'>
          <div class='popover-content'>
            <div class='col-md-3'>
              <div class='sub-list-menu'>
                <p>Danh Muc</p>
                @foreach($category->subjects as $subject)
                  <p><a href=/"categories/{{$category->category_id}}/subjects/{{$subject->subject_id}}">{{$subject->title}}</a></p>
                @endforeach
              </div>
            </div>
            <div class='col-md-3'>
              <div class='sub-list-menu'>
                <p>Tac Gia</p>
                @foreach($category->authors as $author)
                  <p><a href=/"authors/{{$author->author_id}}">{{$author->name}}</a></p>
                @endforeach
              </div>
            </div>
            <div class='col-md-3'>
              <div class='sub-list-menu'>
                <p>Nha phat hanh</p>
                @foreach($category->publishers as $publisher)
                  <p><a href=/"authors/{{$publisher->publisher_id}}">{{$publisher->name}}</a></p>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </li>
    @endforeach
  </ul>
</div>

<style type="text/css">
  .sub-menu-lists {
    display: none;
  }
</style>

<script type="text/javascript">
  $(".categories-list").hover(function(){
    $(this).find(".sub-menu-lists").show();
  }, function(){
    $(this).find(".sub-menu-lists").hide();
  });
</script>