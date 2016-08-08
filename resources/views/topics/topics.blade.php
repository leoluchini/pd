@foreach($topics as $topic)
	<a href="{{ route('entities.topics.items.index', [$entity->id, $topic->id]) }}" class="list-group-item">{{ $topic->name }}</a>
@endforeach