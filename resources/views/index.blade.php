@extends('layouts.main')

	@section('content')

		@include('alerts.errors')
		@include('alerts.request')
		<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Cine</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-info">
				<h1>BIG HERO 6</h1>
				{!! Form::open(['route' => 'iniciar.store', 'method' => 'POST']) !!}
					<div class="form-group">
						{!! Form::label('email', 'Correo:') !!}
						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa tu correo']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('password', 'Contraseña:') !!}
						{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa tu contraseña']) !!}
					</div>
					{!! Form::submit('Iniciar', ['class' => 'btn btn-primary']) !!}
				{!! Form::close() !!}
				{!! link_to('contra/correo', $title = 'Olvidaste tu contraseña?', $attributes = null, $secure = null) !!}
			</div>
		</div>
		<div class="review-slider">
			<ul id="flexiselDemo1">
				<li><img src="images/r1.jpg" alt=""/></li>
				<li><img src="images/r2.jpg" alt=""/></li>
				<li><img src="images/r3.jpg" alt=""/></li>
				<li><img src="images/r4.jpg" alt=""/></li>
				<li><img src="images/r5.jpg" alt=""/></li>
				<li><img src="images/r6.jpg" alt=""/></li>
			</ul>
		</div>

    @endsection	