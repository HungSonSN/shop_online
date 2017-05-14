<ul class="nav nav-pills nav-stacked admin-pagination">
  <li role="presentation" class="admin-create-author"><a href="/admin/authors/create">Create author</a></li>
  <li role="presentation" class="admin-create-book"><a href="/admin/books/create">Create books</a></li>
  <li role="presentation" class="admin-create-category"><a href="/admin/categories/create">Create categories</a></li>
  <li role="presentation" class="admin-create-subject"><a href="/admin/subjects/create">Create subjects</a></li>
  <li role="presentation" class="admin-create-publisher"><a href="/admin/publishers/create">Create publishers</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>

<script type="text/javascript">
	$(".admin-pagination li").click(function(){
		$(".admin-pagination li.active").removeClass('active');
		$(this).addClass('active');
	});
</script>