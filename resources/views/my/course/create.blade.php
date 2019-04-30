@extends('partials.app')

@section('content')
	<div class="container">
		<div class="my-4">
			<h3>Add Course</h3>
		</div>
		<div class="row">
			<div class="col-3">
				sidebars
			</div>
			<div class="col-9">
				<div class="card p-3">
					<form class="card-body" action="{{ route('courses.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<label for="title">Course Title</label>
							<input type="text" name="title" class="form-control" id="title" placeholder="eg. Lowrider life">
						</div>
						<div class="form-group">
							<label for="subtitle">Course Subtitle</label>
							<input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="1234 Main St">
						</div>
						<div class="form-group">
							<label for="description">Course Description</label>
							<textarea type="text" name="description" class="form-control" id="description" placeholder="Apartment, studio, or floor"></textarea>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-4">
								<label for="category">Course Category</label>
								<select name="category" class="custom-select">
									<option selected value="0">Uncategorized</option>
									<option value="1">One</option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label for="category">user id </label>
								<select name="user_id" class="custom-select">
									<option selected value="0">Uncategorized</option>
									<option value="1">One</option>
								</select>
							</div>
							<div class="form-group col-sm-4">
								<label for="category">category id</label>
								<select name="category_id" class="custom-select">
									<option selected value="0">Uncategorized</option>
									<option value="1">One</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-6">	
								<p class="mb-2">Course Thumbnail</p>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="file">
									<label class="custom-file-label" for="file">Choose file</label>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Create</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
