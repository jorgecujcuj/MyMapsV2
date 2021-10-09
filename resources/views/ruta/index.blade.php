@extends('layouts.app')

@section('template_title')
    Ruta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ruta') }}
                            </span>

                             <div class="col-xl-5">
                                <a href="{{ route('rutas.create') }}" class="btn btn-primary btn-sm"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                             </div>

                              <div class="col-xl-12">
                                    <form action="{{ route('rutas.index') }}" method="get">
                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" placeholder="" name="texto" value="{{ $texto }}">
                                            </div>
                                            <div class="col-auto">
                                                <input type="submit" class="btn btn-primary" name="Buscar">
                                            </div>
                                        </div>
                                    </form>
                              </div>

                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>

										<th>Codigo</th>
										<th>Nombre</th>
										<th>Latitud</th>
										<th>Longitud</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rutas as $ruta)
                                        <tr>
                                            
											<td>{{ $ruta->codigo }}</td>
											<td>{{ $ruta->nombre }}</td>
											<td>{{ $ruta->latitud }}</td>
											<td>{{ $ruta->longitud }}</td>

                                            <td>
                                                <form action="{{ route('rutas.destroy',$ruta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('rutas.show',$ruta->id) }}"><i class="fa fa-fw fa-eye"></i> Trazar Ruta</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('rutas.edit',$ruta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $rutas->links() !!}
            </div>
        </div>
    </div>
@endsection
