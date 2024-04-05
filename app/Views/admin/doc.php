<h5 class="subtitle">Datos Personales de Origen</h5>
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
                    <select name="id_provincia">
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
                    <select name="id_localidades">
                        <?php foreach ($localidades as $row) : ?>
                            <option value="<?= $row['id_localidades'] ?>"><?= $row['localidad'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>


    <h5 class="subtitle">Datos Personales de Dirección</h5>
    <div class="columns">
      <div class="column">
        <div class="field">
          <label class="label">Barrio</label>
          <div class="control">
            <input class="input" name="" value="" type="text" placeholder="">
          </div>
          <p class="help is-success"></p>
        </div>
      </div>
      <div class="column">
        <div class="field">
          <label class="label">Nro</label>
          <div class="control">
            <input class="input" name="" value="" type="text" placeholder="">
          </div>
          <p class="help-is danger"></p>
        </div>
      </div>
      <div class="column">
        <div class="field">
          <label class="label">Piso</label>
          <div class="control">
            <input class="input" name="" value="" type="text" placeholder="">
          </div>
          <p class="help-is danger"></p>
        </div>
      </div>
      <div class="column">
        <div class="field">
          <label class="label">Apartamento</label>
          <div class="control">
            <input class="input" name="" value="" type="text" placeholder="">
          </div>
          <p class="help-is danger"></p>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <div class="field">
          <label class="label">Manzana</label>
          <div class="control">
            <input class="input" name="" value="" type="text" placeholder="">
          </div>
          <p class="help is-success"></p>
        </div>
      </div>
      <div class="column">
        <div class="field">
          <label class="label">Lote</label>
          <div class="control">
            <input class="input" name="" value="" type="text" placeholder="">
          </div>
          <p class="help-is danger"></p>
        </div>
      </div>
      <div class="column">
        <div class="field">
          <label class="label">Entre Calle 1</label>
          <div class="control">
            <input class="input" name="" value="" type="text" placeholder="">
          </div>
          <p class="help-is danger"></p>
        </div>
      </div>
      <div class="column">
        <div class="field">
          <label class="label">Entre Calle 2</label>
          <div class="control">
            <input class="input" name="" value="" type="text" placeholder="">
          </div>
          <p class="help-is danger"></p>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <div class="field">
          <label class="label">Codigo Postal</label>
          <div class="control">
            <input class="input" name="" value="" type="text" placeholder="">
          </div>
          <p class="help is-success"></p>
        </div>
      </div>
      <div class="column">
        <div class="field">
          <label class="label">Longuitud</label>
          <div class="control">
            <input class="input" name="" value="" type="text" placeholder="">
          </div>
          <p class="help-is danger"></p>
        </div>
      </div>
      <div class="column">
        <div class="field">
          <label class="label">Latitud</label>
          <div class="control">
            <input class="input" name="" value="" type="text" placeholder="">
          </div>
          <p class="help-is danger"></p>
        </div>
      </div>


      ***********
      <a class="button is-link modal-button button-custom" href="<?= base_url(route_to('logout'));?>">SALIR</a>
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

<section class="section">
  <h1 class="title">Formulario de Registro de Persona</h1>
  <form action="<?= base_url(route_to('persona_store')) ?>" method="POST">
    <?= csrf_field() ?>