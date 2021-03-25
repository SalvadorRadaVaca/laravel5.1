@extends('layouts.admin')

@section('content')

    <div id="message-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
        <strong>Género actualizado correctamente.</strong>
    </div>
    
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Operaciones</th>
        </thead>
        <tbody id="data"></tbody>
    </table>

    @include('genre.modal')

@endsection

@section('scripts')
    {!! Html::script('js/script2.js') !!}
@endsection