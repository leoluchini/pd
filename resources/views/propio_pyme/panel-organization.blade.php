<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">{{ $organization->name }}</h3>
  </div>
  <div class="panel-body">
  	<div class="row">
	    <div class="col-md-12">
	      <p><b>Descripci&oacute;n:</b></p>
	      {!! $organization->description !!}
	      <hr>
	    </div>
	    <div class="col-md-12">
	      <p><b>Beneficio, monto y plazo:</b></p>
	      {!! $organization->benefit_amount_term !!}
	    </div>
  	</div>
    <button class="btn btn-propio pull-right previous"><span class="glyphicon glyphicon-chevron-left"></span></button>
  </div>
</div>