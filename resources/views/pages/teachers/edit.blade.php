@extends('layouts.app')

@section('title', 'Edit teacher')

@section('content')
	<form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data" class="teachers-edit content">
		@method('PATCH')
		@csrf
		<div class="container">
			@include('includes.validation')
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card card-primary">
						<h2 class="edit-teacher">Редактировать Преподавателя</h2>
						<hr>
						<div class="card-body">
							<div class="form-group">
								<label>Имя</label>
								<input value="{{ $teacher->name }}" name="name" class="form-control" placeholder="Введите имя">

								@error('name')
									<div class="errors">{{ $message }}</div>
								@enderror
							</div>
							<div class="form-group">
								<label>Фамилия</label>
								<input value="{{ $teacher->surname }}" name="surname" class="form-control" placeholder="Введите фамилию">

								@error('surname')
									<div class="errors">{{ $message }}</div>
								@enderror
							</div>
							<div class="form-group">
								<label>Е-мейл</label>
								<input value="{{ $teacher->email }}" type="email" name="email" class="form-control" placeholder="Введите е-мейл">

								@error('email')
									<div class="errors">{{ $message }}</div>
								@enderror
							</div>
							<div class="form-group">
								<label>Дисциплины</label>
								<select name="disciplines_id[]" multiple="multiple" class="disciplines" style="width: 100%;">
									@foreach($teacher->disciplines as $discipline)
										<option selected value="{{ $discipline->id }}">{{ $discipline->name }}</option>
									@endforeach
									@foreach($disciplines as $discipline)
										<option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
									@endforeach
								</select>
								@error('disciplines_id')
									<div class="errors">{{ $message }}</div>
								@enderror
							</div>
							<div class="form-group">
								<label>Изображение (нажмите на изображение чтобы его изменить)</label>

								<img src="{{ $teacher->photo }}" class="image-preview" alt="">
								<input class="upload-file d-none" type="file" name="photo" accept="image/*">

								@error('photo')
									<div class="errors">{{ $message }}</div>
								@enderror
							</div>
						</div>

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Обновить</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection