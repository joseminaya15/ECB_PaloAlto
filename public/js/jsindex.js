function sendInformation(){
	//Business
	var firstname 			 = $('#firstname').val();
	var middlename 			 = $('#middlename').val();
	var lastname 			 = $('#lastname').val();
	var company 			 = $('#company').val();
	var job 				 = $('#job').val();
	var mobile 				 = $('#mobile').val();
	var email 				 = $('#email').val();
	var city 				 = $('#city').val();
	var country 			 = $('#country').val();
	//Personal
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
	//Business
	if(firstname == null) {
		msj('error', 'First name must be completed');
		return;
	}
	if(middlename == null) {
		msj('error', 'Middle name must be completed');
		return;
	}
	if(lastname == null) {
		msj('error', 'Last name must be completed');
		return;
	}
	if(company == null) {
		msj('error', 'Company must be completed');
		return;
	}
	if(job == null) {
		msj('error', 'Job title must be completed');
		return;
	}
	if(mobile == null) {
		msj('error', 'Mobile phone number must be completed');
		return;
	}
	if(email == null) {
		msj('error', 'Email must be completed');
		return;
	}
	if(city == null) {
		msj('error', 'City must be completed');
		return;
	}
	if(country == null) {
		msj('error', 'Country must be completed');
		return;
	}
	//Personal
	if(passport == null) {
		msj('error', 'Passport number must be completed');
		return;
	}
	if(issuedate == null) {
		msj('error', 'Issue date must be completed');
		return;
	}
	if(expiredate == null) {
		msj('error', 'Expire date must be completed');
		return;
	}
	if(issuecountry == null) {
		msj('error', 'Issue country must be completed');
		return;
	}
	if(gender == null) {
		msj('error', 'Gender must be completed');
		return;
	}
	if(birthdate == null) {
		msj('error', 'Date of birth must be completed');
		return;
	}
	if(nationality == null) {
		msj('error', 'Nacionality must be completed');
		return;
	}
	if(residence == null) {
		msj('error', 'Residence must be completed');
		return;
	}
	if(inputRadio = null) {
		msj('error', 'Invitation must be completed');
		return;
	}
	if(seating == null) {
		msj('error', 'Seating must be completed');
		return;
	}
	if(shirt == null) {
		msj('error', 'T-shirt must be completed');
		return;
	}
	//Itinerary
	if(acknowledgement == null) {
		msj('error', 'Name acknowledgement must be completed');
		return;
	}
	if(restrictions == null) {
		msj('error', 'Dietary restrictions must be completed');
		return;
	}
	if(checkindate == null) {
		msj('error', 'Check-in must be completed');
		return;
	}
	if(checkoutdate == null) {
		msj('error', 'Check-out must be completed');
		return;
	}
	if(need == null) {
		msj('error', 'Special needs must be completed');
		return;
	}
	if(departureorigin == null) {
		msj('error', 'Departure flight origin must be completed');
		return;
	}
	// if(departuredestination == null) {
	// 	msj('error', 'Departure flight destination must be completed');
	// 	return;
	// }
	if(departuredate == null) {
		msj('error', 'Departure date must be completed');
		return;
	}
	if(departuretime == null) {
		msj('error', 'Departure time must be completed');
		return;
	}
	if(returnorigin == null) {
		msj('error', 'Return flight origin must be completed');
		return;
	}
	// if(returndestination == null) {
	// 	msj('error', 'Return flight destination must be completed');
	// 	return;
	// }
	if(returndate == null) {
		msj('error', 'Return date must be completed');
		return;
	}
	if(returntime == null) {
		msj('error', 'Return time must be completed');
		return;
	}

	//CONTINUA AQUI

	//Contacto emergencia
	if(contact == null) {
		msj('error', 'Contact name must be completed');
		return;
	}
	if(phone == null) {
		msj('error', 'Contact phone number must be completed');
		return;
	}
	if(relationship == null) {
		msj('error', 'relationship must be completed');
		return;
	}

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