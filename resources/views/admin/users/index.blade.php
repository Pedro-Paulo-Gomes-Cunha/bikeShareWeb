@extends('admin.dashboard.layouts')
@section('title', 'BikeShared | Index')
@section('conteudo')


    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                   
                    @include('includes.mensagens')

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Registo de Utilizadores</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Utilizadores</li>
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
                    <h2 class="h4 pd-20" style="color: blue;">Utilizadores do Sistema</h2>
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Número</th>
                                <th class="table-plus datatable-nosort">Imagem</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Id Role</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)

                                <tr>
                                    <td class="table-plus" style="padding-left: 3%;">
                                        {{ $loop->index + 1}}
                                    </td>
                                    <td class="table-plus">
                                        <img src="{{ asset('dash/vendors/images/photo12.jpg') }}" width="70" height="70" alt="Admin">
                                    </td>
                                    <td>
                                        <h5 class="font-16">{{$user->name}}</h5>
                                    </td>
                                    <td>
                                        <h5 class="font-16">{{$user->email}}</h5>
                                    </td>
                                    <td style="padding-left: 3%;">{{$user->id_role}}</td>
                                    <td><a class="dropdown-item" href="#" style="color: blue;"><i class="dw dw-edit2"></i> Edit</a></td>
                                    <td>
                                        <form action="{{ route('destroyUser', $user->id) }}" method="POST">
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
