@extends('layouts.main')
	@section('content')
        @include('alerts.success')
		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="/images/logo.png" alt="" /></a>
					<p>Cine</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<!---contact-->
        <div class="main-contact">
            <h3 class="head">CONTACTO</h3>
            <p>ESTAMOS SIEMPRE ÁQUI PARA AYUDARTE</p>
            <div class="contact-form">
                {!! Form::open(['url' => '/contra/resetear']) !!}
                    <div class="col-md-6 contact-left">
                        {!! Form::hidden('token', $token, null) !!}
                        {!! Form::text('email', null, ['value' => "{{ old('email') }}"]) !!}
                        {!! Form::password('password') !!}
                        {!! Form::password('password_confirmation') !!}
                    </div>
                    {!! Form::submit('Restablecer contraseña') !!}
                {!! Form::close() !!}
            </div>
        </div>
	@endsection	