@foreach($topic->items as $item)
	<a href="{{ route('entities.topics.items.show', [$entity->id, $topic->id, $item->id]) }}" class="list-group-item">{{ $item->name }}</a>
@endforeach