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
                {!! Form::open(['route' => 'correo.store', 'method' => 'POST']) !!}
                    <div class="col-md-6 contact-left">
                        {!! Form::text('name', null, ['placeholder' => 'Nombre']) !!}
                        {!! Form::text('email', null, ['placeholder' => 'Correo electrónico']) !!}
                    </div>
                    <div class="col-md-6 contact-right">
                        {!! Form::textarea('mssg', null, ['placeholder' => 'Mensaje']) !!}
                    </div>
                    {!! Form::submit('ENVIAR') !!}
                {!! Form::close() !!}
            </div>
        </div>
	@endsection	