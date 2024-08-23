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
                                <h4>Registo de Bicicletas</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bicicletas</li>
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
                            <h4 class="text-blue h4">Registar Bicicleta</h4>
                        </div>

                    </div>

                    <form class="row g-3" action="{{route('admin.createBicicleta')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="col-md-12 form-group">
                            <label class="form-label" for="image">Imagem da Bicicleta:</label>
                            <input type="file" id="image" name="image" class="form-control-file" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="title">Modelo da Bicicleta:</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="submit" class="btn btn-primary col-md-12" value="Registar Bicicleta">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
