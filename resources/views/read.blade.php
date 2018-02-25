@include('inc.header')
	<div class="container">
		<div class="row-md-2">
			<legend>Read Article</legend>
				<h2><p class="lead">{{ $articles->title }}</p></h2>
				<p>{{ $articles->description }}</p>

		</div>
	</div>
@include('inc.footer')