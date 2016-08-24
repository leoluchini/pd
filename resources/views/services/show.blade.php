@extends('layouts.app')

@section('content-backend')
	<div class="page-header">
		<div class='btn-toolbar pull-right'>
      <div class='btn-group'>
          <a href="{{ route('servicios.index') }}" class='btn btn-default btn-circle'><span class="glyphicon glyphicon-chevron-left"></span></a>
      </div>
    </div>
  	<h1>{{ $service->name }}</h1>
	</div>
	<div class="row">
		<div class="col-md-6">
			{!! $service->description !!}
		</div>
		<div class="col-md-6">
			<ul class="list-group">
			  <li class="list-group-item">Cras justo odio 
			  	<span class="pull-right">
	    			<button class="btn btn-xs btn-default">
	        		<span class="glyphicon glyphicon-file"></span>
						</button>
	      		<button class="btn btn-xs btn-default">
	        		<span class="glyphicon glyphicon-save-file"></span>
	      		</button>
    			</span>
    		</li>
			  <li class="list-group-item">Dapibus ac facilisis in</li>
			  <li class="list-group-item">Morbi leo risus</li>
			  <li class="list-group-item">Porta ac consectetur ac</li>
			  <li class="list-group-item">Vestibulum at eros</li>
			</ul>
		</div>
	</div>
@endsection