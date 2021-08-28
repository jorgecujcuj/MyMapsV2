@extends('layouts.app')

@section('template_title')
    Finca
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header" style="background-color: #E9F7EF;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Finca') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('fincas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear') }}
                                </a>
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
                                        <th>id</th> 

										<th>Codigo</th>
										<th>Nombre</th>
										<th>Idruta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fincas as $finca)
                                        <tr>
                                            <td>{{ ++$i }}</td> 
                                            
											<td>{{ $finca->codigo }}</td>
											<td>{{ $finca->nombre }}</td>
											<td>{{ $finca->idruta }}</td>

                                            <td>
                                                <form action="{{ route('fincas.destroy',$finca->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('fincas.show',$finca->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('fincas.edit',$finca->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $fincas->links() !!}
            </div>
        </div>
    </div>
@endsection
