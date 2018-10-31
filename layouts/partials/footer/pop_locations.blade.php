<div class="footer_citta">
	<h5>Random locations</h5>
	<ul>
		@foreach($location->archive()->inRandomOrder()->limit(6)->get() as $item0)
		<li><a href="{{ $item0->url}}" title="{{ $item0->title}}">{{ $item0->title}}</a> </li>
		@endforeach
		<li><a href="{{url($lang.'/location')}}">Other locations..</a></li>
	</ul>
</div>