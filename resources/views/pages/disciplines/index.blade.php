@extends('layouts.app')

@section('title', 'Disciplines')

@section('content')
	<div class="disciplines container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>Дисциплины</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('disciplines.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Добавить Дисциплину</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Название</th>
						<th>Дата начала</th>
						<th>Дата окончания</th>
						<th>Действия</th>
					</tr>
				</thead>
				<tbody>
					@foreach($disciplines as $discipline)
						<tr>
							<td>{{ $discipline->name }}</td>
							<td>{{ $discipline->start_date }}</td>
							<td>{{ $discipline->end_date }}</td>
							<td>
								<div class="d-flex">
									<a href="{{ route('disciplines.edit', $discipline->id) }}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
									<form action="{{ route('disciplines.destroy', $discipline->id) }}" method="POST">
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
				<div class="hint-text">Показано <b>{{ $disciplines->count() }}</b> из <b>{{ $disciplines->total() }}</b> записей</div>
				{{ $disciplines->links('includes.pagination-bootstrap-4') }}
			</div>
		</div>
	</div>


@endsection
