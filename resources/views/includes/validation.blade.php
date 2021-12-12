<div class="row justify-content-center">
	<div class="col-md-6">
		@if(session()->has('success'))
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true" aria-label="Close">×</button>
				{{ session('success') }}
			</div>
		@endif
		@if($errors->any())
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true" aria-label="Close">×</button>
				@if($errors->count() > 1)
					<div>Есть ошибки формы.</div>
				@else
					<div>Есть ошибка формы.</div>
				@endif
			</div>
		@endif
	</div>
</div>