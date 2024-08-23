@if (session('msg'))
    <div class="col alert" style="background-color: rgb(0, 166, 6);" role="alert">
        <p class="p-3" style="text-align: center; color: #fff;">{{ session('msg') }}</p>
    </div>
@endif


@if($mensagem = Session::get('login_error'))
    <div class="col alert" style="background-color: rgb(233, 5, 5); height: 70px; padding: -70px;" role="alert">
        <p class="p-3" style="text-align: center; color: #fff;">{{ $mensagem }}</p>
    </div>
@endif


@if($mensagem = Session::get('error'))
    <div class="col alert" style="background-color: rgb(233, 5, 5); height: 70px; padding: -70px;" role="alert">
        <p class="p-3" style="text-align: center; color: #fff;">{{ $mensagem }}</p>
    </div>
@endif



@if ($errors->all())
    <div class="col alert alert-dark bg-dark" role="alert">
        @foreach ($errors->all() as $error)
            <p class="p-3 text-danger" style="text-align: center;">{{ $error }}</p>
        @endforeach
    </div>
@endif




{{--

<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered max-width-400" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                @if ($mensagem = Session::get('sucesso'))
                    <h3 class="mb-20">Parabéns</h3>
                    <div class="mb-30 text-center"><img src="{{ asset('vendors/images/success.png') }}"></div>
                    <p>{{ $mensagem }}</p>
                @endif
            </div>
            <div class="modal-footer justify-content-center">
                <a href="{{ route('login.logar') }}" class="btn btn-primary">Entrar</a>
            </div>
        </div>
    </div>
</div>
 --}}
