$(function(){
  
  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
        $('#back-to-top').fadeIn();
    } else {
        $('#back-to-top').fadeOut();
    }
  });
  // scroll body to 0px on click
  $('#back-to-top').click(function () {
      $('#back-to-top').tooltip('hide');
      $('body,html').animate({
          scrollTop: 0
      }, 800);
      return false;
  });

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

  $("body").on('submit', 'form.form-service', function(e){
    e.preventDefault();
    form = $(this);
    form.find('.has-error').tooltip('destroy');
    form.find('.form-group').removeClass('has-error').removeClass('has-feedback').removeAttr('data-toggle').removeAttr('data-title').removeAttr('data-original-title').removeAttr('title');
    form.find('.form-group').find('span').remove();
    $.ajax({
      url: $(this).attr('action'),
      type    : $(this).attr('method'),
      dataType: 'json',
      data    : $(this).serialize(),
      success : function( data ) {
                  form.html('Suscripción exitosa');
                },
      error   : function( xhr, err ) {
                  form.find('.form-group').addClass('has-error').addClass('has-feedback').attr('data-toggle', "tooltip").attr('data-title', xhr.responseJSON.email[0]);
                  form.find('.form-group').tooltip();
                  form.find('.form-group').append("<span class='glyphicon glyphicon-remove form-control-feedback'></span>");
                       
                }
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