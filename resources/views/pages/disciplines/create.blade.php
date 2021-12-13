
@extends('layouts.app')

@section('title', 'Create discipline')

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

@section('content')
	<form action="{{ route('disciplines.store') }}" method="POST" class="disciplines-create content">
		@csrf

		<div class="container">
			@include('includes.validation')
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card card-primary">
						<h2 class="add-discipline">Добавить Дисциплину</h2>
						<hr>
						<div class="card-body">
							<div class="form-group">
								<label>Название</label>
								<input name="name" class="form-control" placeholder="Введите название">

								@error('name')
									<div class="errors">{{ $message }}</div>
								@enderror
							</div>
							<div class="form-group">
								<label>Дата начала</label>
								<input name="start_date" class="form-control" placeholder="Введите дату и время в формате: YYYY-MM-DD hh:mm:ss">
							</div>
							<div class="form-group">
								<label>Дата окончания</label>
								<input name="end_date" class="form-control" placeholder="Введите дату и время в формате: YYYY-MM-DD hh:mm:ss">
							</div>
						</div>

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Добавить</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection