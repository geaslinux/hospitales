<!----------------------------------------------FOOTER--------------------------------------------------->
<section class="pie-pagina hero is-link is-vhcenter" style="background-color: #6f42c1; /* Morado moderno */ background-image: linear-gradient(to right, #6f42c1, #b83b5e); /* Matices */ color: white;">
<div class="container">
            <p>
                <strong>Dirección General de Observatorio y Estadistica</strong>  <a href="https://salud.jujuy.gob.ar/">SISTEMA DE EFECTORES</a>. The source code is licensed
                <a href="">g.e.a.s</a>. 
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/"></a>.
            </p>
        </div>
</section>        

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {
            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {
                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        }
    });
</script>
