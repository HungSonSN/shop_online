<script type="text/javascript">
  $('#author_id').select2({
      placeholder: "Choose author...",
      minimumInputLength: 1,
      ajax: {
          url: '/admin/authors/search',
          dataType: 'json',
          data: function (params) {
              return {
                  q: $.trim(params.term)
              };
          },
          processResults: function (data) {
              return {
                  results: data
              };
          },
          cache: true
      }
  });

  $('#subject_id').select2({
      placeholder: "Choose subject...",
      minimumInputLength: 1,
      ajax: {
          url: '/admin/subjects/search',
          dataType: 'json',
          data: function (params) {
              return {
                  q: $.trim(params.term)
              };
          },
          processResults: function (data) {
              return {
                  results: data
              };
          },
          cache: true
      }
  });  

  $('#publisher_id').select2({
      placeholder: "Choose publisher...",
      minimumInputLength: 1,
      ajax: {
          url: '/admin/publishers/search',
          dataType: 'json',
          data: function (params) {
              return {
                  q: $.trim(params.term)
              };
          },
          processResults: function (data) {
              return {
                  results: data
              };
          },
          cache: true
      }
  });   
</script>