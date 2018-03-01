@include('inc.header')
	<div class="container">
		<div class="row">
			<legend>Database Application</legend>
			@if(session('info'))
			<div class="alert alert-dismissible alert-success">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
				<p class="mb-0">{{session('info')}}</p>

			</div>
			@endif
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">Num</th>
			      <th scope="col">Title</th>
			      <th scope="col">Description</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	$counter=0;
			  	?>
			  	@if(count($articles)>0)
			  		@foreach($articles->all() as $article)
			  	<?php
			  	$counter++;
			  	?>	
			  		
			    <tr class="table-active">
			      <th scope="row">{{ $counter }}</th>
			      <td>{{ $article->title }}</td>
			      <td>{{ $article->description }}</td>
			      <td>
			      		<a href='{{ url("/read/{$article->id}") }}' class="btn btn-info" >
			      			<font color="white">Read</font>
			      		</a>
			      		<a href='{{ url("/update/{$article->id}") }}' class="btn btn-success">
			      			<font color="white">Update </font>
			      		</a>
			      		<a href='{{ url("/delete/{$article->id}") }}' class="btn btn-danger">
			      			<font color="white">Delete </font>
			      		</a>
			      </td>
			    </tr>
			    <tr>
			    	@endforeach
			  	@endif
			  </tbody>
			</table> 
		</div>
	</div>
@include('inc.footer')