<div class="form-group">
    {!! Form::label('name', 'Nombre: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre de una pelicula']) !!}
</div>
<div class="form-group">
    {!! Form::label('cast', 'Elenco: ') !!}
    {!! Form::text('cast', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el elenco']) !!}
</div>
<div class="form-group">
    {!! Form::label('direction', 'Dirección: ') !!}
    {!! Form::text('direction', null, ['class' => 'form-control', 'placeholder' => 'Ingresa al director']) !!}
</div>
<div class="form-group">
    {!! Form::label('duration', 'Duración: ') !!}
    {!! Form::text('duration', null, ['class' => 'form-control', 'placeholder' => 'Ingresa la duración']) !!}
</div>
<div class="form-group">
    {!! Form::label('poster', 'Póster: ') !!}
    {!! Form::file('path') !!}
</div>
<div class="form-group">
    {!! Form::label('genre', 'Género: ') !!}
    {!! Form::select('genre_id', $genres) !!}
</div>