<div class="panel panel-default">
  <div class="panel-body">
    <ul class="list-group">
      @foreach($entity->itemExpeditures as $item)
        <li class="list-group-item propio-pyme" data-url="{{ route('propio_pyme', [ $entity->id, $item->id ]) }}">{{ $item->name }}</li>
      @endforeach
      </ul>
      <div class="pull-right">
				<button class="btn btn-propio previous"><span class="glyphicon glyphicon-chevron-left"></span></button>
				<button class="btn btn-propio next"><span class="glyphicon glyphicon-chevron-right"></span></button>
			</div>
  </div>
</div>