<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Observatorio</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css">
<link rel="icon" href="/imagenes/ob.png" type="image/x-icon">
<style>
body {
    font-family: 'Open Sans', sans-serif;
    background-color: #f5f5f5;
}

.hero {
    background-color: #6f42c1; /* Morado moderno */
    background-image: linear-gradient(to right, #6f42c1, #b83b5e); /* Matices */
    color: #fff;
    padding: 3rem 1.5rem;
    text-align: center;
}

.header {
    background-color: #f0f0f0; /* Gris perlado */
    padding: 1rem;
}

.navbar-item {
    color: #fff; /* Blanco */
}

.navbar-item:hover {
    background-color: #b83b5e; /* Matices */
}

.button.is-primary {
    background-color: #6f42c1; /* Morado moderno */
    border-color: #b83b5e; /* Matices */
}

.button.is-primary:hover {
    background-color: #b83b5e; /* Matices */
    border-color: #6f42c1; /* Morado moderno */
}

.card {
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: transform 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

.card-content {
    padding: 1rem;
}

.card-content p {
    margin-bottom: 1rem;
}

.card-image img {
    border-radius: 5px 5px 0 0;
}

.modal-card {
    max-width: 500px;
    margin: 0 auto;
}

.modal-card img {
    max-width: 100%;
    height: auto;
}

.footer {
    background-color: #f5f5f5;
    padding: 2rem 1.5rem;
    text-align: center;
}

.footer a {
    color: #7d48b1; /* Morado moderno */
    font-weight: bold;
}
.button-custom {
    background-color: #6f42c1; /* Morado moderno */
    background-image: linear-gradient(to right, #6f42c1, #b83b5e); /* Matices */
    color: #fff; /* Color de texto */
}

@media screen and (min-width: 768px) {
    .columns.features {
        margin-top: -3rem;
    }
}



</style>
</head>
<body>
    
<section class="hero is-primary is-small">
    <div class="hero-body">
        <div class="container">
        <div class="columns is-left">
        
                <div class="column">
                    
                    <h1 class="subtitle">Dirección General de Observatorio y Estadistica del Ministerio de Salud - jujuy</h1>
                </div>
            </div>
        </div>
    </div>
</section>


    <div class="box cta">
        <div class="container">
            
        </div>
    </div>
    <section class="section">
    <div class="container">
        <div class="columns is-vcentered">
            <div class="column is-one-quarter">
                <figure class="image">
                <img src="/imag/obs1.png" alt="Placeholder image">
                </figure>
            </div>
            <div class="column">
                <div class="content">
                    <h2 class="title">¿Quienes Somos?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed arcu non odio euismod lacinia at quis risus. Nullam tincidunt tellus eget libero accumsan, in consectetur libero hendrerit. Aliquam erat volutpat.</p>
                    <p>Phasellus fringilla leo sed lectus molestie, vel rutrum felis posuere. Donec vehicula, est eget venenatis vestibulum, mi nisl fermentum dolor, eget cursus odio metus eu sapien.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="container">
    <div class="columns is-multiline">
        <div class="column is-4">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                    <img src="/imag/persona.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
  
    <a class="button is-link modal-button button-custom" href="<?= base_url(route_to('persona_list')); ?>">MODULO PERSONA "INGRESAR"</a>
    <p>El presente módulo nos permitirá crear, editar lo que respecta a una persona y los diferentes roles y escenarios que prestará</p>
    <button class="button is-primary modal-button" data-target="modal-card1">Ver Detalles</button>
</div>

            </div>
        </div>
        <!-- Repetir este bloque para más tarjetas -->
        <div class="column is-4">
        <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                    <img src="/imag/prog.jpg" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
               
                <a class="button is-link modal-button button-custom" href="<?= base_url(route_to('list_users')); ?>">MODULO ADMIN "INGRESAR"</a>
    <p>El presente módulo nos permitirá crear, editar lo que respecta a una persona y los diferentes roles y escenarios que prestará</p>
    <button class="button is-primary modal-button" data-target="modal-card2">Ver Detalles</button>
</div>
            </div>
        </div>
        <!-- Repetir este bloque para más tarjetas -->
        <div class="column is-4">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="https://via.placeholder.com/300x200" alt="Placeholder image 3">
                    </figure>
                </div>
                <div class="card-content">
                    <h4>Card Title 3</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed arcu non odio euismod lacinia at quis risus.</p>
                    <button class="button is-primary modal-button" data-target="modal-card3">Ver Detalles</button>
                </div>
            </div>
        </div>
        <!-- Repetir este bloque para más tarjetas -->
    </div>
</section>

<!-- Modals -->
<div id="modal-card1" class="modal modal-fx-3dSlit">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="card modal-card">
            <div class="card-image">
                <figure class="image is-4by3">
                <img src="/imag/persona.jpg" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4">Card Title 1</p>
                    </div>
                </div>
                <div class="content">
                    <p>EXPLICAR CON DETALLE LO QUE HACE EL MODULO</p>
                </div>
            </div>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>

<div id="modal-card2" class="modal modal-fx-3dSlit">
<div class="modal-content">
        <div class="card modal-card">
            <div class="card-image">
                <figure class="image is-4by3">
                <img src="/imag/prog.jpg" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4">MODULO ADMIN</p>
                    </div>
                </div>
                <div class="content">
                    <p>EXPLICAR CON DETALLE LO QUE HACE EL MODULO</p>
                </div>
            </div>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>

<div id="modal-card3" class="modal modal-fx-3dSlit">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="card modal-card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="https://via.placeholder.com/600x400" alt="Placeholder image 3">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-content">
                        <p class="title is-4">Card Title 3</p>
                    </div>
                </div>
                <div class="content">
                    <p>Details about the card 3.</p>
                </div>
            </div>
        </div>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>


<!-- End Modals -->
<section class="section">
    <div class="container has-text-centered">
        <h2 class="title">Contacto</h2>

        <form id="contact-form">
            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" id="name" type="text" placeholder="Nombre Completo">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" id="email" type="email" placeholder="Email">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <textarea class="textarea" id="message" placeholder="Deja tu Mensaje"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <button class="button is-primary" type="submit">
                                Enviar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

    <!-- End Modals -->
    <footer class="footer">
        <div class="container">
            <p>
                <strong>Dirección General de Observatorio y Estadistica</strong>  <a href="https://salud.jujuy.gob.ar/">SISTEMA DE EFECTORES</a>. The source code is licensed
                <a href="">g.e.a.s</a>. 
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/"></a>.
            </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"></script>
    <script src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
</body>
</html>

