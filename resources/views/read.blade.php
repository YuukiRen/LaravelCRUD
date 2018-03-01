@include('inc.header')
	</br>
	<div class="container">
		<div class="row-md-2">
			<div class="jumbotron">
			  <h2 class="display-4">{{ $articles->title }}</h2>
			  <hr class="my-2">
			  <p>{{ $articles->description }}</p>
			</div>
		</div>
	</div>
@include('inc.footer')