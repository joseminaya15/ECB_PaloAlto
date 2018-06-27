<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="ECB Palo Alto">
    <meta name="keywords"               content="ECB Palo Alto">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="January 25, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
	  <title>ECB Palo Alto</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>favicon.png">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet"    href="https://cdn.datatables.net/autofill/2.2.2/css/autoFill.dataTables.min.css">
    <link rel="stylesheet"    href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet"    href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>index1.css?v=<?php echo time();?>">
<body>
    <section id="principal">
        <div class="header col-xs-12">
            <div class="js-flex">
                <div class="js-flex--left">
                    <img src="<?php echo RUTA_IMG?>logo/hpe-intel.png">
                </div>
                <div class="js-flex--right">
                    <p>ECB Palo Alto</p>
                </div>
            </div>
        </div>
        <div id="content" class="mdl-container">
            <div class="col-xs-12 text-right p-0">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-logout" onclick="cerrarCesion()">Cerrar Sesión</button> 
            </div>
            <div class="mdl-card mdl-card-table">
                <div class="table-responsive">
                    <table id="example" class="display nowrap table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr class="tr-header-reporte">
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Empresa</th>
                                <th class="text-center">correo</th>
                                <th class="text-center">Fecha Registro</th>
                                <th class="text-center" style="display: none">Nro Pasaporte</th>
                                <th class="text-center" style="display: none">Fecha Emisión</th>
                                <th class="text-center" style="display: none">Fecha Expiración</th>
                                <th class="text-center" style="display: none">País Emisor</th>
                                <th class="text-center" style="display: none">Género</th>
                                <th class="text-center" style="display: none">Fecha Cumpleaños</th>
                                <th class="text-center" style="display: none">Nacionalidad</th>
                                <th class="text-center" style="display: none">Ciudad Referencia</th>
                                <th class="text-center" style="display: none">Asiento Preferencia</th>
                                <th class="text-center" style="display: none">Talla polo</th>
                                <th class="text-center" style="display: none">Nombre Reconocimiento</th>
                                <th class="text-center" style="display: none">Restricción dieta</th>
                                <th class="text-center" style="display: none">Fecha check in</th>
                                <th class="text-center" style="display: none">Fecha check out</th>
                                <th class="text-center" style="display: none">Necesidad Especial</th>
                                <th class="text-center" style="display: none">Vuelo ida origen</th>
                                <th class="text-center" style="display: none">Vuelo ida destino</th>
                                <th class="text-center" style="display: none">Día vuelo ida</th>
                                <th class="text-center" style="display: none">Hora vuelo ida</th>
                                <th class="text-center" style="display: none">Vuelo Retorno origen</th>
                                <th class="text-center" style="display: none">Vuelo Retorno destino</th>
                                <th class="text-center" style="display: none">Día vuelo retorno</th>
                                <th class="text-center" style="display: none">Hora vuelo retorno</th>
                                <th class="text-center" style="display: none">Aerolinea 1</th>
                                <th class="text-center" style="display: none">Código aereo 1</th>
                                <th class="text-center" style="display: none">Aerolinea 2</th>
                                <th class="text-center" style="display: none">Código aereo 2</th>
                                <th class="text-center" style="display: none">Aerolinea 3</th>
                                <th class="text-center" style="display: none">Código aereo 3</th>
                                <th class="text-center" style="display: none">Confirmación</th>
                                <th class="text-center" style="display: none">Último día modificación</th>
                                <th class="text-center" style="display: none">Último día cancelación</th>
                                <th class="text-center" style="display: none">Nombre cont. Emergencia</th>
                                <th class="text-center" style="display: none">Teléfono emergéncia</th>
                                <th class="text-center" style="display: none">Relación</th>
                                <th class="text-center" style="display: none">Adicional</th>
                            </tr>
                        </thead>
                      <tbody>
                          <?php echo $html ?>  
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.1.0/wNumb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.min.js"></script> 
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
    <script src="<?php echo RUTA_JS?>login.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable( {
              responsive: true,
              dom: 'Bfrtip',
              buttons: [
                'excel', 'print'
              ]
          });
          $('.buttons-excel').empty();
          $('.buttons-print').empty();
          $('.buttons-excel').append('<i class="fa fa-file-excel-o"></i>');
          $('.buttons-print').append('<i class="fa fa-print"></i>');
      });
    </script>
</body>
</html>