@extends('layouts.app')

@section('template_title')
    Confirmacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Confirmacione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('confirmaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idprogramado</th>
										<th>Latitud</th>
										<th>Longitud</th>
										<th>Abastecida</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($confirmaciones as $confirmacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $confirmacione->idprogramado }}</td>
											<td>{{ $confirmacione->latitud }}</td>
											<td>{{ $confirmacione->longitud }}</td>
											<td>{{ $confirmacione->abastecida }}</td>
											<td>{{ $confirmacione->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('confirmaciones.destroy',$confirmacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('confirmaciones.show',$confirmacione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('confirmaciones.edit',$confirmacione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $confirmaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
