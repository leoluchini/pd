<div class="carousel-inner" role="listbox">
  @foreach($cover_pages as $key => $cover_page)
    <div class="item{{ $key == 0 ? ' active' : ''}}">
      {{ Html::image($cover_page->image, $cover_page->title) }}
      <div class="container">
        <div class="carousel-caption">
            {{ HTML::image('images/pm-white.png', 'pm', array('height' => '80')) }}
            <h1>{!! $cover_page->title !!}</h1>
            <p>{!! $cover_page->description!!}</p>
        </div>
      </div>
    </div>
  @endforeach
</div>