@extends('admin.dashboard.layouts')
@section('title', 'BikeShared | Index')
@section('conteudo')


    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    @if(session('msg'))
                        <div class="col alert" style="background-color: rgb(0, 166, 6);" role="alert">
                            <p class="p-3" style="text-align: center; color: #fff;">{{session('msg')}}</p>
                        </div>
                    @endif
                    @if($errors->all())
                        <div class="col alert alert-dark bg-dark" role="alert">
                            @foreach ($errors->all() as $error )
                            <p class="p-3 text-danger" style="text-align: center;">{{$error}}</p>
                            @endforeach
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Registo de Docas</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Docas</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" role="button" style="color: #fff">
                                    Junho 2023
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-box mb-30">
                    <h2 class="h4 pd-20" style="color: blue;">Docas Resistadas</h2>
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Número</th>
                                <th>Estado</th>
                                <th>Estação</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($docas as $doca)

                                <tr>
                                    <td class="table-plus" style="padding-left: 3%;">
                                        {{ $loop->index + 1}}
                                    </td>
                                    <td>
                                        <h5 class="font-16" style="padding-left: 3%;">{{$doca->status}}</h5>
                                    </td>
                                    <td style="padding-left: 3%;">{{$doca->id_estacao}}</td>
                                    <td><a class="dropdown-item" href="{{ route('indexUpdateDoca',$doca->id) }}" style="color: blue;"><i class="dw dw-edit2"></i> Edit</a></td>
                                    <td>
                                        <form action="{{ route('destroyDoca', $doca->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn" data-toggle="tooltip" data-placement="top" title="Delete" style="color: red;">
                                                <i class="dw dw-delete-3"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>


@endsection
