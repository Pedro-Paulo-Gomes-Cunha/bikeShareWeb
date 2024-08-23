<style>
    h3 span {
        color: aliceblue;
    }

    #lista a {
        color: darkgrey;
    }
</style>

<!-- ======= Footer ======= -->
<footer class="footer" role="contentinfo" style="background-color: black;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h3><span>Sobre BikeShared</span></h3>
                <p style="text-align: justify;">O BikeShared é o maior programa de compartilhamento de Bicletas de Luanda
                    com mais de 25.000 Bicletas e mais de 1500 estações em Viana, Kilamba, Talano e Mutamba.
                </p>
                <p class="social">
                    <a href="#"><span class="bi bi-twitter"></span></a>
                    <a href="#"><span class="bi bi-facebook"></span></a>

                    <!--
               <a href="#"><span class="bi bi-instagram"></span></a>
            <a href="#"><span class="bi bi-linkedin"></span></a>
            -->

                </p>
            </div>
            <div class="col-md-7 ms-auto">
                <div class="row site-section pt-0">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h3><span>Navegações</span></h3>
                        <ul class="list-unstyled" id="lista">
                            <li><a href="#funcionamento">Como funciona</a></li>
                            <li><a href="#precos">Preços</a></li>
                            @can(auth()->user())
                                <li><a href="{{ route('login.logar') }}">LogIn</a></li>
                            @endcan
                            @auth
                                @if (auth()->user()->hasRole('Gestor') ||
                                        auth()->user()->hasRole('Cliente'))
                                    <li><a href="{{ route('user.form.logout') }}">Sair</a></li>
                                @endif
                            @endauth

                        </ul>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h3><span>Serviçoes</span></h3>
                        <ul class="list-unstyled" id="lista">
                            <li><a href="#">Aluguel de Bicletas</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h3><span>Baixa o aplicativo</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="#" class="btn btn-primary d-inline-flex align-items-center"><i
                                        class="bx bxl-play-store"></i><span>Google play</span></a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <p class="copyright">&copy; Copyright Universidade Agostinho Neto. Todos os direitos reservados</p>
                <div class="credits">
                </div>
            </div>
        </div>

    </div>
</footer>
