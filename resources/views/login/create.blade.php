<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dash/vendors/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dash/vendors/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dash/vendors/images/favicon-16x16.png') }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/src/plugins/jquery-steps/jquery.steps.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/vendors/styles/style.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>

</head>

<body>

    <div class="padd" style="padding: 1% 35% 6% 35%; background-color: #fff;">

        <!-- Pills content -->
        <div class="tab-content">
            @include('includes.mensagens')

            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form class="needs-validation" novalidate action="{{ route('cliente.create.acount') }}"
                method="POST" enctype="multipart/form-data">
                @csrf

                    <div style="padding: 0px 10px 2px 0px; text-align: center; height: 170px;">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="width: 40%;">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome de Utilizador</label>
                        <input type="text" class="form-control" id="name" name='name' required>
                        <div class="valid-feedback">
                          @lang('validation.good')
                        </div>
                        <div class="invalid-feedback">
                          @lang('validation.required', ['atributo' => __('atributo Nome')])
                        </div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="loginName">Email</label>
                        <input type="email" id="email" name='email' class="form-control" required>
                        <div class="valid-feedback">
                            @lang('validation.good')
                          </div>
                          <div class="invalid-feedback">
                            @lang('validation.required', ['atributo' => __('atributo Email')])
                        </div>
                    </div>

                    <input type="hidden" name="id_role" value="2">
                    <input type="hidden" name="saldo" value="{{ 10 }}">

                    <!-- Password input -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="loginPassword">Password</label>
                        <input type="password" id="loginPassword" name="password" class="form-control" required>
                        <div class="valid-feedback">
                            @lang('validation.good')
                          </div>
                          <div class="invalid-feedback">
                            @lang('validation.required', ['atributo' => __('atributo Password')])
                        </div>
                    </div>

                    <div  class="form-outline mb-4" >
                        <label class="form-label" for="loginName">Género</label>
                        <div class="col-sm">
                            <div class="custom-control custom-radio custom-control-inline pb-0">
                                <input type="radio" id="male" name="genero"
                                    value="Masculino" class="custom-control-input" required>
                                <label class="custom-control-label" for="male">Masculino</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline pb-0">
                                <input type="radio" id="female" name="genero" value="Feminino"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="female">Feminino</label>
                            </div>
                        </div>
                    </div>



                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Registar-se</button>

                </form>
            </div>

        </div>
        <!-- Pills content -->
    </div>

    @include('admin.valid.vendor-scripts')

</body>

</html>
