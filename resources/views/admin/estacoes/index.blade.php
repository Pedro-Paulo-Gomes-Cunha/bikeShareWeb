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
                            <h4>Registo de Estações</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Estações</li>
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


            <!-- Input Validation Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix pd-2">
                    <div class="pull-center">
                        <h4 class="text-blue h4">Registar Estação</h4>
                    </div>

                </div>

                <form id="form" class="row g-3" action="{{route('admin.createEstacao')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="col-md-6 form-group">
                        <label for="title">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="name" placeholder="Nome da Estação" required>

                    </div>

                    <div class="col-md-6 form-group">
                        <label for="title">Capacidade:</label>
                        <input type="text" class="form-control" id="nome" name="capacity" placeholder="Capacidade da Estação" required>
                    </div>


                    <div class="col-md-6 form-group">
                        <label for="title">Latitude</label>
                        <input type="text" class="form-control" id="demo1" name="demo1" placeholder="Latitude" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="title">Longitude</label>
                        <input type="text" class="form-control" id="demo2" name="demo2" placeholder="Longitude" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="title">Definir Prémio</label>
                        <input type="text" class="form-control" id="premio_entrega" name="premio_entrega" placeholder="Definir Prémio" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="title">Modelo da Bicicleta</label>
                        <select name="id_bicicleta" id="id_bicicleta" class="form-control">

                            @foreach ($bicicletas as $bicicleta)
                                <option value="{{$bicicleta->id}}">{{$bicicleta->modelo}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col-md-12 form-group">
                        <input type="submit" class="btn btn-primary col-md-12" value="Registar Estação">
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>


@endsection
