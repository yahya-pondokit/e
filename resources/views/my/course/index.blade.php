@extends('partials.app')

@section('content')
	<div class="container pt-5">
		<div class="row">
			<div class="col-3">
				<a href="courses/create" class="text-decoration-none">
					<button class="btn btn-outline-primary btn-block btn-lg mb-3">
						Add Course
					</button>
				</a>

				<input class="form-control mb-3" type="text" placeholder="search course">
				<div class="input-group">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">sort by:</label>
					</div>
					<select class="custom-select" id="inputGroupSelect01">
						<option selected>Choose...</option>
						<option value="1">name asc</option>
						<option value="2">name desc</option>
						<option value="3">date asc</option>
					</select>
				</div>
			</div>

			<div class="col-9">
				@foreach($courses as $course)
				<div class="course-card card mb-2">
					<a href="#" class="text-decoration-none">
						<div class="row no-gutters">
							<div class="col-md-3 bg-primary">
								<img src="..." class="card-img" alt="...">
							</div>
							<div class="col-md-9">
								<div class="card-body">
									<h5 class="card-title">{{ $course->title }}</h5>
									<p class="card-text"><small class="text-muted">{{ $course->subtitle }}</small></p>
								</div>
							</div>
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		$(".course-card").hover(function() {
			$( this ).toggleClass("shadow", 1000)
		});
	</script>
@endsection