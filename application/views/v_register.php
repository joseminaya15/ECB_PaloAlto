<!DOCTYPE html> 
<html>
    <head>
    	<meta charset="ISO-8859-1">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="Proyecto de Registro ECB Palo Alto">
        <meta name="keywords"               content="SAP Cloud Configurator">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="June 21, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#425563">
    	<title>ECB Palo Alto</title>
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    </head>
    <body>
        <section id="principal" class="js-section">
            <div class="js-container">
                <div class="accordion" id="jsaccordion">
                    <div class="card">
                        <div class="card-header" id="jsaccordion1">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Business info</button>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="jsaccordion1" data-parent="#jsaccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">First Name</label>
                                            <input type="text" id="firstname" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Middle Name</label>
                                            <input type="text" id="middlename" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Last Name</label>
                                            <input type="text" id="lastname" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Company</label>
                                            <input type="text" id="company" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Job Title</label>
                                            <input type="text" id="job" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Mobile Phone Number</label>
                                            <input type="text" id="mobile" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Email</label>
                                            <input type="text" id="email" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">City</label>
                                            <input type="text" id="city" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Country</label>
                                            <input type="text" id="country" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="jsaccordion2">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Personal info</button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="jsaccordion2" data-parent="#jsaccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Passport Number</label>
                                            <input type="text" id="passport" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-date js-flex">
                                            <input class="js-disabled" type="text" id="issuedate" name="issuedate" maxlength="10" placeholder="Issue date" value="" style="pointer-events: none">
                                            <div class="js-icon">
                                                <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-date_range"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-date js-flex">
                                            <input class="js-disabled" type="text" id="expiredate" name="expiredate" maxlength="10" placeholder="Expire date" value="" style="pointer-events: none">
                                            <div class="js-icon">
                                                <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-date_range"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Passport Issuing Country</label>
                                            <input type="text" id="issuecountry" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-select">
                                            <select name="gender" id="gender" title="Gender"> 
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-date js-flex">
                                            <input class="js-disabled" type="text" id="birthdate" name="birthdate" maxlength="10" placeholder="Date of birth" value="" style="pointer-events: none">
                                            <div class="js-icon">
                                                <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-date_range"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                         <div class=" js-input">
                                            <label for="text">Nationality</label>
                                            <input type="text" id="nationality" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Country of Residence</label>
                                            <input type="text" id="residence" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            

                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-select">
                                            <select name="seating" id="seating" title="Seating Preference"> 
                                                <option value="Aisle">Aisle</option>
                                                <option value="Window">Window</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-select">
                                            <select name="shirt" id="shirt" title="Shirt or T-Shirt Size"> 
                                                <option value="Small">Small</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Large">Large</option>
                                                <option value="X-Large">X-Large</option>
                                                <option value="XX-Large">XX-Large</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="jsaccordion3">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Itinerary</button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="jsaccordion3" data-parent="#jsaccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Name acknowledgement</label>
                                            <input type="text" id="acknowledgement" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Dietary Restrictions</label>
                                            <input type="text" id="restrictions" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-date js-flex">
                                            <input class="js-disabled" type="text" id="checkindate" name="checkindate" maxlength="10" placeholder="Check-In date" value="" style="pointer-events: none">
                                            <div class="js-icon">
                                                <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-date_range"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-date js-flex">
                                            <input class="js-disabled" type="text" id="checkoutdate" name="checkoutdate" maxlength="10" placeholder="Check-Out date" value="" style="pointer-events: none">
                                            <div class="js-icon">
                                                <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-date_range"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Special Needs</label>
                                            <input type="text" id="need" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                         <div class=" js-input">
                                            <label for="text">Departure Flight Origin</label>
                                            <input type="text" id="departureorigin" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Departure Flight Destination</label>
                                            <input type="text" id="departuredestination" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-date js-flex">
                                            <input class="js-disabled" type="text" id="departuredate" name="departuredate" maxlength="10" placeholder="Departure Flight Date" value="" style="pointer-events: none">
                                            <div class="js-icon">
                                                <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-date_range"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-date js-flex">
                                            <input class="js-disabled" type="text" id="departuretime" name="departuretime" maxlength="10" placeholder="Departure Flight Time" value="" style="pointer-events: none">
                                            <div class="js-icon">
                                                <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-date_range"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Return Flight Origin</label>
                                            <input type="text" id="returnorigin" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Return Flight Destination</label>
                                            <input type="text" id="returndestination" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-date js-flex">
                                            <input class="js-disabled" type="text" id="returndate" name="returndate" maxlength="10" placeholder="Return Flight Date" value="" style="pointer-events: none">
                                            <div class="js-icon">
                                                <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-date_range"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-date js-flex">
                                            <input class="js-disabled" type="text" id="returntime" name="returntime" maxlength="10" placeholder="Return Flight Time" value="" style="pointer-events: none">
                                            <div class="js-icon">
                                                <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-date_range"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Airline Preference 1</label>
                                            <input type="text" id="preference1" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Airline Rewards Code 1</label>
                                            <input type="text" id="rewards1" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Airline Preference 2</label>
                                            <input type="text" id="preference2" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Airline Rewards Code 2</label>
                                            <input type="text" id="rewards2" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Airline Preference 3</label>
                                            <input type="text" id="preference3" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Airline Rewards Code 3</label>
                                            <input type="text" id="rewards3" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class=" js-input">
                                            <label for="text">Confirmation</label>
                                            <input type="text" id="confirmation" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-date js-flex">
                                            <input class="js-disabled" type="text" id="modifidate" name="modifidate" maxlength="10" placeholder="Last Modified Date" value="" style="pointer-events: none">
                                            <div class="js-icon">
                                                <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-date_range"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input js-date js-flex">
                                            <input class="js-disabled" type="text" id="cancellationdate" name="cancellationdate" maxlength="10" placeholder="Last Cancellation Date" value="" style="pointer-events: none">
                                            <div class="js-icon">
                                                <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-date_range"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="jsaccordion4">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Emergency Contact</button>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="jsaccordion4" data-parent="#jsaccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Contact Name</label>
                                            <input type="text" id="contact" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Contact Phone Number</label>
                                            <input type="text" id="phone" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col-xs col-sm-6 col-md-4">
                                        <div class="js-input">
                                            <label for="text">Their relationship to you</label>
                                            <input type="text" id="relationship" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="js-input">
                                            <label for="text">Additional Specifications (i.e.: Special diet, extra leg room needed, etc)</label>
                                            <input type="text" id="specifications" onkeyup="verificarDatos(event);">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-section--button">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="sendInformation()">Send</button>
                </div>
            </div>
        </section>
        <div class="modal fade" id="ModalPoliticas" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="mdl-card">
                        <div class="mdl-card__title">
                            <h2>SAP Marketing Consent Statement</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            
                        </div>
                        <div class="mdl-card__actions text-right">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Aceptar</button>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
        </script>
    </body>
</html>