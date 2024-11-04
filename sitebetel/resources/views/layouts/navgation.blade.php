<link rel="stylesheet" href={{ asset('css/navbar.css') }}>

<nav class="navbar navbar-expand-lg bg-secondary bg-gradient">
    <div class="container-fluid px-2 gap-2">
        <!-- Logo e Nome -->
        <div class="d-flex align-items-center navbar-brand" style="min-width: 5rem;">
            <img src="https://i.ibb.co/C5XR7cB/logo-betel.png" alt="Logo" width="55" height="55" class="me-2">
            <a href="{{ ('/ibbb') }}" id="navbarText" class="text-white m-0" href="" style="text-decoration: none; font-size: 18px">IGREJA BATISTA BÍBLICA BETEL</a>
        </div>

        <!-- Botão para expandir a navbar em dispositivos móveis -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu de Navegação Centralizado -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/ibbb/sobre') }}">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/ibbb/cultos') }}">Cultos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/ibbb/eventos') }}">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/ibbb/midias') }}">Midias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/ibbb/contribuicoes') }}">Dizimos e Ofertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/ibbb/materiais') }}">Materiais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/ibbb/contato') }}">Contato</a>
                </li>
                <!-- Botão de Login dentro do dropdown para dispositivos móveis -->
                <li class="d-lg-none">
                    <a href="{{ url('/ibbb/login') }}" title="Login" name="btnlogin" class="dropdown-item text-primary">
                        Login
                    </a>
                </li>
            </ul>
        </div>

        <!-- Botão de Login visível apenas em telas grandes -->
        <div class="d-none d-lg-flex">
            <a href="{{ url('/ibbb/login') }}" title="Login" name="btnlogin" class="btn btn-sm btn-primary d-flex shadow mt-1"
                role="button" data-bs-toggle="tooltip" data-bs-placement="top">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" 
                    viewBox="0 0 256 256">
                    <path 
                        d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z">
                    </path>
                </svg>
                <span class="ml-1">Login</span>
            </a>
        </div>
    </div>
</nav>

<!-- Script para ajustar o texto do nome -->
<script> 
    function adjustNavbarText() {
        var navbarText = document.getElementById('navbarText');
        if (window.innerWidth <= 500) {
            navbarText.textContent = 'IBBB';
        } else {
            navbarText.textContent = 'IGREJA BATISTA BÍBLICA BETEL';
        }
    }

    adjustNavbarText();
    window.onresize = adjustNavbarText;
</script>
