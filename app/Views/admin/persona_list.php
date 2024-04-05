<?= $this->extend('layout/main');?>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?= $this->section('title')?>
    Listado de Persona
<?= $this->endSection()?>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------>
<?= $this->section('menu')?>
    <?= $this->include('admin/menu');?>
<?= $this->endSection()?>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------>
<?= $this->section('content')?>

<div class="container has-text-centered">
    <h4 class="title is-4 has-text-weight-bold">Listado de Persona</h4>
</div>

        
<div class="field">
<a class="button is-link is-light" href="<?= base_url(route_to('logout'))?>">
        <span class="icon">
            <i class="fas fa-sign-out-alt"></i>
        </span>
        <span>Logout</span>
    </a>
    <a class="button is-link is-light" href="<?= base_url(route_to('inicio'))?>">
        <span class="icon">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span>Inicio</span>
    </a>

    <a class="button is-link is-light" href="<?= base_url(route_to('persona_create'))?>">
        <span class="icon">
            <i class="fas fa-user"></i>
        </span>
        <span>Crear Persona</span>
    </a>

    
</div>



  



    <br>
    <form method='get' action="<?= base_url(route_to('persona_list'))?>" id="searchForm">
        <div class="field is-grouped">
            <div class="control has-icons-left">
            <input class="input is-primary" type="text" placeholder="Buscar" name='search' value='<?= $search ?>'>
                <span class="icon is-left">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </span>
            </div>
            <div class="control">                
                <input class="button is-link is-light" type='button' id='btnsearch' value='Buscar' onclick='document.getElementById("searchForm").submit();'>
            </div>            
        </div>          
    </form>
   
    <hr>
    
<div class="table-container">
  <table class="table">
  <thead>
    <tr>
                
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo de Indentificacion</th>
                <th>N° de Identificacion</th>
                <th>Sexo</th>
                <th>Fecha de Nacimiento</th>
                <th>Pais</th>
                <th>Provincia</th>
                <th>Departamento</th>
                <th>Localidad</th>
                <th>Barrio</th>
                <th>Calle</th>
                <th>N°</th>
                <th>Piso</th>
                <th>Apartamento</th>
                <th>Manzana</th>
                <th>Lote</th>
                <th>EntreCalle 1</th>
                <th>EntreCalle 2</th>
                <th>Codigo Postal</th>
                <th>Longitud</th>
                <th>Latitud</th>
                
                <th>Latitud</th>
                <th>Acciones</th>
      
            </tr>
        </thead>
        <tbody>
        
        <?php foreach($persona as $v):?>
                <tr>
                   
                    <td><?= $v->nombre_persona?></td>
                    <td><?= $v->apellido_persona?></td>
                    <td><?= $v->tipo_identificacion_persona?> 
                    <td><?= $v->nro_identificacion_persona?></td> 
                
                    <td><?= $v->sexo_persona?></td>
                    <td><?= $v->fecha_nacimiento_persona?></td>
                    
                    <td>
                    
                      
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>  
    </div>  
    </table>

    <?= $pager->links();?>
    </tbody>  
</div>  
</table>


<?= $this->endSection()?>


<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<?= $this->section('css')?>
<style>
    /* Estilos para los botones y el buscador */
    .button {
        background-color: #6f42c1; /* Morado moderno */
        color: #fff;
    }
    .input.is-primary {
        border-color: #6f42c1; /* Morado moderno */
        color: #6f42c1;
    }
</style>
<?= $this->endSection()?>

<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<?= $this->section('js')?>

<?= $this->endSection()?>
