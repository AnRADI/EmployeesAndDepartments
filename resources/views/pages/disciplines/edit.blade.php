@extends('layouts.app')

@section('title', 'Edit discipline')

@section('content')
	<form action="{{ route('disciplines.update', $discipline->id) }}" method="POST" enctype="multipart/form-data" class="disciplines-edit content">
		@method('PATCH')
		@csrf
		<div class="container">
			@include('includes.validation')
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card card-primary">
						<h2 class="edit-discipline">Редактировать Дисциплину</h2>
						<hr>
						<div class="card-body">
							<div class="form-group">
								<label>Имя</label>
								<input value="{{ $discipline->name }}" name="name" class="form-control" placeholder="Введите имя">

								@error('name')
									<div class="errors">{{ $message }}</div>
								@enderror
							</div>
							<div class="form-group">
								<label>Дата начала</label>
								<input name="start_date" value="{{ $discipline->start_date }}" class="form-control" placeholder="Введите дату и время в формате: YYYY-MM-DD hh:mm:ss">
							</div>
							<div class="form-group">
								<label>Дата окончания</label>
								<input name="end_date" value="{{ $discipline->end_date }}" class="form-control" placeholder="Введите дату и время в формате: YYYY-MM-DD hh:mm:ss">
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