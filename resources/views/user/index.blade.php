@extends('layouts.admin')

    @include('alerts.success');

    @section('content')
        <div class="users">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Operacion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            {!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary']) !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $users->render() !!}
        </div>
    @endsection

    @section('scripts')
        {!! Html::script('js/script3.js') !!}
    @endsection