<link rel="stylesheet" href={{ asset('css/navbar.css') }}>
<nav class="navbar navbar-expand-lg bg-dark bg-gradient">
    <div class="container-fluid px-2 gap-2">
        <div class="d-flex flex-column align-items-center navbar-brand" style="min-width: 5rem;">
            <a id="navbarText" class="text-white m-0" href="" style="text-decoration: none; font-size: 16px">Gestão
                de Portarias e Atos Normativos - GESPAN</a>
        </div>

        <div class="">
            <a href="" title="Entrar" name="btnEntrar" class="btn btn-sm btn-primary d-flex shadow mt-1"
                role="button" data-bs-toggle="tooltip" data-bs-placement="top">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff"
                    viewBox="0 0 256 256">
                    <path
                        d="M141.66,133.66l-40,40a8,8,0,0,1-11.32-11.32L116.69,136H24a8,8,0,0,1,0-16h92.69L90.34,93.66a8,8,0,0,1,11.32-11.32l40,40A8,8,0,0,1,141.66,133.66ZM192,32H136a8,8,0,0,0,0,16h56V208H136a8,8,0,0,0,0,16h56a16,16,0,0,0,16-16V48A16,16,0,0,0,192,32Z">
                    </path>
                </svg>
                <span class="ml-1">Entrar</span>
            </a>
        </div>
    </div>
    
    <script>
        function adjustNavbarText() {
            var navbarText = document.getElementById('navbarText');
            if (window.innerWidth <= 500) {
                navbarText.textContent = 'GESPAN';
            } else {
                navbarText.textContent = 'Gestão de Portarias e Atos Normativos - GESPAN';
            }
        }

        adjustNavbarText();

        window.onresize = adjustNavbarText;
    </script>
</nav>
