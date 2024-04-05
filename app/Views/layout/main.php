<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->renderSection('title');?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="icon" type="imag/obs1.png" sizes="32x32" href="/imag/obs1.png">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/css/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>
    <link rel="icon" href="/imag/obs1.png" type="image/x-icon">
    <style>
        .navbar-custom {
            background-color: #6f42c1; /* Morado moderno */
            background-image: linear-gradient(to right, #6f42c1, #b83b5e); /* Matices */
            color: white; /* Letras blancas */
            text-align: center; /* Centrar texto */
            padding: 20px; /* Espaciado interno */
        }

        .navbar-brand {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px; /* Espaciado inferior */
        }

        .navbar-brand img {
            max-width: 300px; /* Tamaño máximo de la imagen */
            height: auto;
            margin-right: 20px; /* Espacio entre imagen y texto */
        }

        .navbar-brand .title {
            font-size: 24px; /* Tamaño de la fuente del título */
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.7);
        }
    </style>   
</head>
<?= $this->renderSection('css');?>

<body>
    <?= $this->include('layout/header');?>
    <section class="section">
        <div class="container">
            <?php if(session('msg')):?>
                <script>
                    Swal.fire({
                      //position: 'top-end',
                      icon: '<?=session('msg.type');?>',
                      title:'',
                      text: '<?= session('msg.body')?>',
                      showConfirmButton: false,
                      timer: 2000
                    })
                </script>
                <!--<article class="message is-<?=session('msg.type');?>">
                    <div class="message-body">
                        <?= session('msg.body')?>
                    </div>    
                </article>-->
            <?php endif;?>        
            <?= $this->renderSection('content');?>
            <?= $this->renderSection('main');?>
        </div>
    </section>  

    <?= $this->include('layout/footer');?>

    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="/js/modal.js"></script>

    <?= $this->renderSection('js');?>
</body>
</html>
