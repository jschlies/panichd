@section('panichd_errors')


	1111111111111111111111111
	<div class="container-fluid">
	<div class="alert alert-danger" id="form_errors" style="{{ $errors->first() == '' ? 'display: none;' : '' }}">
		<button type="button" class="close" data-dismiss="alert">{{ trans('panichd::sslang.flash-x') }}</button>
		<div style="font-weight: bold">{{ trans('panichd::lang.validation-error') . trans('panichd::lang.colon') }}</div>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }} xxxxxxx</li>
			@endforeach
		</ul>
	</div>
		22222222222222222
	@if(Session::has('warning'))
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">{{ trans('panichd::lang.flash-x') }}</button>
			{!! session('warning') !!}
		</div>
	@endif
		3333333333333333333333333
	@if(Session::has('status'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">{{ trans('panichd::lang.flash-x') }}</button>
			{!! session('status') !!}
		</div>
	@endif
	</div>
@stop
