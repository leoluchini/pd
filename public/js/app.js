$(function(){
  
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

	$('[data-toggle="tooltip"]').tooltip() 
  
  var $modalDelete = $("#deleteModal");

  $("body").on("click",".confirm-delete",function(event){
    event.preventDefault();

    var deleteUrl = $(this).attr('href');
    
    $modalDelete.modal('show');

    $("#deleteModalConfirm").click(function(event){
      var form = $modalDelete.find("#formDelete")
      form.attr('action', deleteUrl);
      form.submit();
    })
  })

  var fixHelperModified = function(e, tr) {
    var $originals = tr.children();
    var $helper = tr.clone();
    $helper.children().each(function(index) {
        $(this).width($originals.eq(index).width())
    });
    return $helper;
  },
  updateIndex = function(e, ui) {
    $('tr', ui.item.parent()).each(function (i) {
      $.ajax({
        url: $(this).data('update'),
        type: 'PUT',
        data: { orden: (i + 1) },
        success:function(data, textStatus, jqXHR) 
        {
            //data: return data from server
        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            //if fails      
        } 
      })
    });
  };

  $("#sort tbody").sortable({
      helper: fixHelperModified,
      stop: updateIndex
  }).disableSelection();
})