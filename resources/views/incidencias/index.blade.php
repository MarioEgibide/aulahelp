@extends('layouts.app')

@section('content')
    <section class="card">
        <div class="card-header">

            <h2>Bienvenidos al Listado de incidencias</h2>
            <p>Listamos las incidencias una vez mas</p>

        </div>

        @if($incidencias->isEmpty())
            <div class="empty">No hay incidencias registradas en este momento.</div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Equipo</th>
                        <th>Descripción</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($incidencias as $incidencia)
                        <tr>
                            <td><span class="badge">#{{ $incidencia->id }}</span></td>
                            <td>{{ $incidencia->titulo }}</td>
                            <td>{{ $incidencia->equipo }}</td>
                            <td class="muted">{{ $incidencia->descripcion ?: 'Sin descripción' }}</td>
                            <td>{{ optional($incidencia->created_at)->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>
@endsection
