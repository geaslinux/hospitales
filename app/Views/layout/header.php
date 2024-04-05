<style>
    .navbar-custom {
        background-color: #6f42c1; /* Morado moderno */
        background-image: linear-gradient(to right, #6f42c1, #b83b5e); /* Matices */
        color: white; /* Letras blancas */
        text-align: center; /* Centrar texto */
    }

    .navbar-brand {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navbar-brand img {
        max-width: 1000px; /* Tamaño máximo de la imagen */
        height: auto;
        margin-right: 600px; /* Espacio entre imagen y texto */
    }

    .navbar-brand .title {
        font-size: 18px; /* Tamaño de la fuente del título */
        font-weight: bold;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.7);
    }
</style>

<nav class="navbar navbar-custom" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="<?=base_url (route_to('inicio'))?>">
            <img src="/imag/obs1.png" alt="Logo" style="max-width: 1000px; height: auto;">
            <div class="title">
                Dirección General de Observatorio y Estadística del Ministerio de Salud - Jujuy
            </div>
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
</nav>
