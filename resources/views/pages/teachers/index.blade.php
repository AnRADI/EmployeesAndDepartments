@extends('layouts.app')

@section('title', 'Teachers')

@section('content')
	<div class="teachers container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>Преподаватели</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('teachers.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Добавить Преподавателя</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Имя</th>
						<th>Фамилия</th>
						<th>Е-мейл</th>
						<th>Дисциплины</th>
						<th>Фото</th>
						<th>Действия</th>
					</tr>
				</thead>
				<tbody>
					@foreach($teachers as $teacher)
						<tr>
							<td>{{ $teacher->name }}</td>
							<td>{{ $teacher->surname }}</td>
							<td>{{ $teacher->email }}</td>
							<td>
								@foreach($teacher->disciplines as $discipline)
									{{ $discipline->name }}
									<br>
								@endforeach
							</td>
							<td><img class="img-size" src="{{ mix($teacher->photo) }}" alt=""></td>
							<td>
								<div class="d-flex">
									<a href="{{ route('teachers.edit', $teacher->id) }}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
									<form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
										@method('DELETE')
										@csrf
										<button type="submit" class="delete"><i class="material-icons" title="Delete">&#xE872;</i></button>
									</form>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Показано <b>{{ $teachers->count() }}</b> из <b>{{ $teachers->total() }}</b> записей</div>
				{{ $teachers->links('includes.pagination-bootstrap-4') }}
			</div>
		</div>
	</div>


@endsection
