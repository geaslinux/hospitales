<?= $this->extend('layout/main');?>

<?= $this->section('title')?>
  
<?= $this->endSection()?>

<?= $this->section('menu')?>
    <?= $this->include('admin/menu');?>
<?= $this->endSection()?>

<?= $this->section('content')?>
<div class="field">
    <a class="button is-link is-light" href="<?= base_url(route_to('inicio'))?>">
        <span class="icon">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span>Inicio</span>
    </a>

    <a class="button is-link is-light" href="<?= base_url(route_to('persona_list'))?>">
    <span class="icon">
        <i class="fas fa-search"></i>
    </span>
    <span>Listado Persona</span>
</a>

</div>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <section class="section">
  <h1 class="title">Formulario de Registro de Persona</h1>
  <form action="<?= base_url(route_to('persona_store')) ?>" method="POST">
    <?= csrf_field() ?>
    <div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               DATOS PERSONALES
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="accordion-content">
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label class="label">Nombre</label>
                                <div class="control">
                                    <input class="input" name="nombre_persona" value="<?= old('nombre_persona') ?>" type="text" placeholder="Guillermo Enrique">
                                </div>
                                <p class="help is-success"></p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label class="label">Apellido</label>
                                <div class="control">
                                    <input class="input" name="apellido_persona" value="<?= old('apellido_persona') ?>" type="text" placeholder="Aparicio Severich">
                                </div>
                                <p class="help-is danger"></p>
                            </div>
                        </div>
                        <div class="column is-one-fifth">
                            <div class="field">
                                <label class="label">Tipo de Identificacion</label>
                                <div class="control">
                                    <div class="select">
                                        <select name="tipo_identificacion_persona">
                                            <option value="Documento Unico" <?= old('tipo_identificacion_persona') == 1 ? 'selected' : '' ?>>Documento Único</option>
                                            <option value="Libreta de Enrolamiento" <?= old('tipo_identificacion_persona') == 2 ? 'selected' : '' ?>>Libreta de Enrolamiento</option>
                                            <option value="Libreta Cívica" <?= old('tipo_identificacion_persona') == 3 ? 'selected' : '' ?>>Libreta Cívica</option>
                                            <option value="Otros" <?= old('tipo_identificacion_persona') == 4 ? 'selected' : '' ?>>Otros</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-content">
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">N° de Identificación</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input" name="nro_identificacion_persona" value="<?= old('nro_identificacion_persona') ?>" type="text" placeholder="">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                        <p class="help is-success"></p>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Sexo</label>
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="sexo_persona" value="M" <?= old('sexo_persona') == 'M' ? 'checked' : '' ?>>
                                Masculino
                            </label>
                            <label class="radio">
                                <input type="radio" name="sexo_persona" value="F" <?= old('sexo_persona') == 'F' ? 'checked' : '' ?>>
                                Femenino
                            </label>
                            <label class="radio">
                                <input type="radio" name="sexo_persona" value="X" <?= old('sexo_persona') == 'X' ? 'checked' : '' ?>>
                                X
                            </label>
                        </div>
                    </div>
                </div>
                <div class="column is-two-fifths">
                    <div class="field">
                        <label class="label">Fecha de Nacimiento</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input" type="date" id="fecha_nacimiento_persona" name="fecha_nacimiento_persona" value="<?= old('fecha_nacimiento_persona') ?>">
                            <span class="icon is-small is-left">
                                <i class="fas fa-calendar"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
  
<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDireccion" aria-expanded="true" aria-controls="collapseDireccion">
            Datos Dirección
        </button>
    </h2>
    <div id="collapseDireccion" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">País</label>
                        <div class="control">
                            <div class="select">
                                <select name="id_pais">
                                    <?php foreach ($pais as $row) : ?>
                                        <option value="<?= $row['id_pais'] ?>"><?= $row['pais'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Provincia</label>
                        <div class="control">
                            <div class="select">
                                <select name="id_provincia" id="provincia">
                                    <?php foreach ($provincia as $row) : ?>
                                        <option value="<?= $row['id_provincia'] ?>"><?= $row['provincia'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Localidades</label>
                        <div class="control">
                            <div class="select">
                                <select name="id_localidades" id="localidades">
                                    <?php foreach ($localidades as $row) : ?>
                                        <option value="<?= $row['id_localidades'] ?>"><?= $row['localidad'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Datos Profesion / Oficio / otros
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       Datos Dirección
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Datos Profesion / Oficio / otros
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>



</section>
<section>  <button class="button is-link" type="submit">Registrar</button></section>
  
  </form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    
    <script>
document.getElementById('provincia').addEventListener('change', () => {
    const id_Provincia = document.getElementById('provincia').value;

    fetch(`<?= base_url('admin/persona/por_provincia') ?>/${id_Provincia}`)

        .then(response => response.json())
        .then(data => {
            document.getElementById('localidades').innerHTML = '';

            if (typeof data === 'object' && data.hasOwnProperty('length')) {
                data.forEach(localidad => {
                    const option = document.createElement('option');
                    option.value = localidad.id_localidades;
                    option.textContent = localidad.localidad;
                    document.getElementById('localidades').appendChild(option);
                });
            } else {
                console.error('La respuesta no es un array:', data);
            }
        })
        .catch(error => {
            console.error('Error al obtener las localidades:', error);
        });
});
</script>




<?= $this->endSection()?>