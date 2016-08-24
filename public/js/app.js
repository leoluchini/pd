$(function(){

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
})