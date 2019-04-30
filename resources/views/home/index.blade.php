@extends('partials.app')

@section('content')
	<div class="py-3 mb-3 bg-primary">
		<div class="container">
			<div class="card" style="max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="..." class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">Featured Course</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row">
			<div class="col-12 mb-3">
				<h2>Featured</h2>
			</div>

			<div class="col-sm-6 col-md-3">
				<div class="card mb-3">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXmFMPFwh53miuMQjrQ0wfixOVfIVSDitTJgLYgHEEK_GXUlLorw" class="card-img-top" alt="teaser-img">
					<div class="card-body p-3">
						<h5 class="card-title">[this supposed to be a title]</h5>
						<p class="card-text"><small class="text-muted">[this where author name comes out]</small></p>
						<div class="stars">
							<i class="fas fa-star"></i>
						</div>
						<p class="card-text text-right">Rp. 720.000,-</p>
					</div>
				</div>
			</div>

			<div class="col-12 mb-3">
				Sort by: 
				<select>
					<option>ooooo</option>
				</select>
			</div>

			<div class="col-sm-12">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="https://lh3.googleusercontent.com/-5qjwcQgce-k/VZaqOuf2uzI/AAAAAAAArlk/qnA0YAjLf7k/s640/Hibike%252521%252520Euphonium%252520-%25252005%252520-%252520Large%25252020.jpg" class="card-img" alt="teaser-img-big">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Card title</h5>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>

		</div>
	</div>
	
@endsection