@extends('layouts.admin')

@section('content')
    {!! Form::open() !!}
        <div id="message-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
            <strong>Género agregado correctamente.</strong>
        </div>

        <div id="message-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
            <strong id="message"></strong>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        @include('genre.forms.genre')
        {!! link_to('#', $title = 'Registrar', $attributes = ['id' => 'register', 'class' => 'btn btn-primary'], $secure = null) !!}
    {!! Form::close() !!}
@endsection

@section('scripts')
    {!! Html::script('js/script.js') !!}
@endsection