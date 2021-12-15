@extends('layouts.app')

@section('title', 'Department')

@section('content')
	<div class="department container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>Сотрудники отдела - {{ $department->name }}</b></h2>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ФИО</th>
						<th>Дата рождения</th>
						<th>Должность</th>
						<th>Тип сотрудника</th>
						<th>Оплата за месяц</th>
					</tr>
				</thead>
				<tbody>
					@foreach($employees as $employee)
						<tr>
							<td>{{ $employee->name }}</td>
							<td>{{ $employee->date_of_birth }}</td>
							<td>{{ $employee->position }}</td>
							<td>{{ $employee->type_of_employee }}</td>
							<td>{{ $employee->monthly_pay }} гр</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Показано <b>{{ $employees->count() }}</b> из <b>{{ $employees->total() }}</b> записей</div>
				{{ $employees->links('includes.pagination-bootstrap-4') }}
			</div>
		</div>
	</div>


@endsection
