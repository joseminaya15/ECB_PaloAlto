function sendInformation(){
	//Business info
	var firstname 			 = $('#firstname').val();
	var middlename 			 = $('#middlename').val();
	var lastname 			 = $('#lastname').val();
	var company 			 = $('#company').val();
	var job 				 = $('#job').val();
	var mobile 				 = $('#mobile').val();
	var email 				 = $('#email').val();
	var city 				 = $('#city').val();
	var country 			 = $('#country').val();
	//Personal info
	var passport 			 = $('#passport').val();
	var issuedate 			 = $('#issuedate').val();
	var expiredate 			 = $('#expiredate').val();
	var issuecountry 		 = $('#issuecountry').val();
	var gender 				 = $('#gender').val();
	var birthdate 			 = $('#birthdate').val();
	var nationality 		 = $('#nationality').val();
	var residence 			 = $('#residence').val();
	var inputRadio			 = 'falta';
	var seating 			 = $('#seating').val();
	var shirt 				 = $('#shirt').val();
	//Itinerary
	var acknowledgement 	 = $('#acknowledgement').val();
	var restrictions 		 = $('#restrictions').val();
	var checkindate 		 = $('#checkindate').val();
	var checkoutdate 		 = $('#checkoutdate').val();
	var need 				 = $('#need').val();
	var departureorigin 	 = $('#departureorigin').val();
	// var departuredestination = $('#departuredestination').val();
	var departuredate 		 = $('#departuredate').val();
	var departuretime 		 = $('#departuretime').val();
	var returnorigin 		 = $('#returnorigin').val();
	// var returndestination 	 = $('#returndestination').val();
	var returndate 			 = $('#returndate').val();
	var returntime 			 = $('#returntime').val();
	var preference1 		 = $('#preference1').val();
	var rewards1 			 = $('#rewards1').val();
	var preference2 		 = $('#preference2').val();
	var rewards2 			 = $('#rewards2').val();
	var preference3 		 = $('#preference3').val();
	var rewards3 			 = $('#rewards3').val();
	// var confirmation 		 = $('#confirmation').val();
	// var modifidate 			 = $('#modifidate').val();
	// var cancellationdate 	 = $('#cancellationdate').val();
	//Emergency Contact
	var contact 			 = $('#contact').val();
	var phone 				 = $('#phone').val();
	var relationship 		 = $('#relationship').val();
	var specifications 		 = $('#specifications').val();

	$.ajax({
		data : {primerNombre	: firstname,
				segundoNombre	: middlename,
				apellidos		: lastname,
				empresa			: company,
				cargo			: job,
				telefono 		: mobile,
				correo			: email,
				ciudad 			: city,
				pais 			: country,
				//
				nuPasaporte		: passport,
				fechaEmision	: issuedate,
				fechaExpiro		: expiredate,
				paisEmisor		: issuecountry,
				genero			: gender,
				fechaCumple		: birthdate,
				nacionalidad	: nationality,
				ciudadReferen	: residence,
				flgInvitacion	: inputRadio,
				asientoPrefere	: seating,
				tallaPolo		: shirt,
				//
				reconocimiento	: acknowledgement,
				restriccionDieta: restrictions,
				checkInDate 	: checkindate,
				checkOutDate 	: checkoutdate,
				necesidadEspe	: need,
				origenPartida	: departureorigin,
				destinoPartida	: departuredestination,
				diaVueloOrigen	: departuredate,
				HoraVueloOrigen	: departuretime,
				origenRetorno	: returnorigin,
				destinoRetorno	: returndestination,
				diaVueloRetorno	: returndate,
				HoraVueloRetorno: returntime,
				aerolinea1		: preference1,
				codigoAero1		: rewards1,
				aerolinea2		: preference2,
				codigoAero2		: rewards2,
				aerolinea3		: preference3,
				codigoAero3		: rewards3,
				confirmacion	: confirmation,
				ultimoDiaModifica: modifidate,
				ultimoDiaCancela: cancellationdate,
				//
				nombreContacto	: contact,
				telefonoContac	: phone,
				relacion		: relationship,
				especificacion	: specifications },
		url  : 'registro/register',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
		} catch (err) {
			msj('error', err.message);
		}
	});
}