@extends('layouts.app')

@section('template_title')
    Programado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Programado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('programados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>
                                        
										<th>Idsolicitud</th>
										<th>Operador</th>
										<th>Estado</th>
										<th>Idfinca</th>
										<th>Idunidad</th>
										<th>Salida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($programados as $programado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $programado->idsolicitud }}</td>
											<td>{{ $programado->operador }}</td>
											<td>{{ $programado->estado }}</td>
											<td>{{ $programado->idfinca }}</td>
											<td>{{ $programado->idunidad }}</td>
											<td>{{ $programado->salida }}</td>

                                            <td>
                                                <form action="{{ route('programados.destroy',$programado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('programados.show',$programado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('programados.edit',$programado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $programados->links() !!}
            </div>
        </div>
    </div>
@endsection
