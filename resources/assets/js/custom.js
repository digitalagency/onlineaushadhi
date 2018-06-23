$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

	$('.deletePrescription').click(function(){
		$.ajax({
			type: "DELETE",
			url: '/prescriptions/' + $(this).data('id'),
			success: function(data) {
				//window.location.href = data.redirect;
			}
		});
	});

	var currentValue = window.location.hash.substr(1);

	if (currentValue) {
		$('.'+currentValue).trigger('click');
	}

    $('.quantity').on('change', function() {
        var id = $(this).attr('data-id');
        $.ajax({
            type: "PATCH",
            url: '/cart' + '/' + id,
            data: {
                'quantity': this.value
            },
            success: function(data) {
                window.location.href = '/cart';
            }
        });
    });



	// Initialization
	$('form.material').materialForm();
	$('.carousel').carousel({
		interval: 10000,
		pause: false
	});

	var $container = $('.masonary');
	$container.isotope({
		itemSelector: '.masonary__grid'
	});

	$('a[href*=\\#].navigate').click(function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, 2000);
	});

    $("#salesDetail").on("show.bs.modal", function(e) {
        var link = $(e.relatedTarget).attr('href');
        $(this).find(".modal-body").load(link);
    });

    $("#prescriptionDetail").on("show.bs.modal", function(e) {
        var link = $(e.relatedTarget).attr('href');
        $(this).find(".modal-body img").attr('src', $(e.relatedTarget).attr('href'));
    });

	// Ajax Upload
	var prescriptionObj = $("#multipleupload").uploadFile({
		url:"/upload-prescription",
		multiple:true,
		dragDrop:true,
		acceptFiles:"image/*",
		showPreview:true,
		formData: {'_token': document.head.querySelector('meta[name="csrf-token"]').content, 'prescriptionRequestTime': $('input[name="request"]').val()},
		fileName:"prescription",
		autoSubmit:false,
		onSuccess:function(files,data,xhr,pd)  {
			if ($('#savePrescription').length > 0) {
				window.location = '/prescriptions/save';
			}
		}
		/*sequential:true,
		sequentialCount:1*/
	});

	$("#stepOne").on('click', function(e) {
		e.preventDefault();

		if ($('.ajax-file-upload-container').html() != '') {
			prescriptionStep(2);
			prescriptionObj.startUpload();
		}
	});

	$("#savePrescription").on('click', function(e) {
		e.preventDefault();

		if ($('.ajax-file-upload-container').html() != '') {
			prescriptionObj.startUpload();
		}
	});

	// Autocomplete Search
	$(".searchBox").autocomplete({
		source: function(request, response) {
			$.ajax({
				url: "/products/autocompleteSearch",
				dataType: "json",
				data: {
					term : request.term
				},
				success: function(data) {
					response(data);
				}
			});
		},
		select: function(event, ui) {
			window.location = '/products/'+ui.item.slug;
		},
		minLength: 3,
	});

	var body = $('#wrap, .header--main, .footer--main');
	$('.nav-toggle').bind('click', function () {
		body.toggleClass('menu-open');
		return false;
	});

	// Resize adjustment
	$(window).resize(function () {
		footerAdjustment();
		headerAdjustment();
	});
	footerAdjustment();
	headerAdjustment();
});

$(function () {
	// contact form validate
	$('#contactForm').validate({
		errorPlacement: function(error, element) {},
		submitHandler: function(form) {
			$('#contactForm').find('button').attr('disabled', true);
			$.post('/contact', $(form).serialize())
				.done(function(response){
					$('#contactForm').find('button').attr('disabled', false);
					$('.contact-form-success')
						.html(response.message)
						.removeClass('hide')
						.delay(3000)
						.queue(function(){
							$(this).addClass('hide');
						});
					$('#contactForm').trigger('reset');
				})
				.fail(function(data){
					$('#contactForm').find('button').attr('disabled', false);
					var response = data.responseJSON;
					$('.contact-form-error ul').html('');
					$.each( response, function( key, value ) {
						$('.contact-form-error ul').append('<li>' + value + '</li>');
					});

					$('.contact-form-error')
						.removeClass('hide')
						.delay(3000)
						.queue(function(){
							$(this).addClass('hide');
						});
				});

			return false;
		}
	});

	// registration form validate
	$('#registrationForm').validate({
		errorPlacement: function(error, element) {},
		submitHandler: function(form) {
			$('#registrationForm').find('button').attr('disabled', true);
			$.post($(form).attr('action'), $(form).serialize())
				.done(function(response){
					window.location = response.redirect;
				})
				.fail(function(data){
					$('#registrationForm').find('button').attr('disabled', false);
					var response = data.responseJSON;
					var $wrap = $('.registration-form-error');
					$wrap.find('ul').html('');
					$.each( response, function( key, value ) {
						$wrap.find('ul').append('<li>' + value + '</li>');
					});

					$wrap.removeClass('hide')
						.delay(3000)
						.queue(function(){
							$(this).addClass('hide');
						});
				});

			return false;
		}
	});

	$('#resetPassword').validate({
		errorPlacement: function (error, element) {
		},
		submitHandler: function (form) {
			$(form).submit();
		}
	});
	$('#passwordResetForm').validate({
		errorPlacement: function(error, element) {},
		submitHandler: function(form) {
			$('#passwordResetForm').find('button').attr('disabled', true);
			$.post($(form).attr('action'), $(form).serialize())
				.done(function(response){
					$('.reset-form-success')
						.html(response.message)
						.removeClass('hide');
					$('#contacpasswordResetFormtForm').trigger('reset');
				})
				.fail(function(data){
					var response = data.responseJSON;
					$('#passwordResetForm').find('button').attr('disabled', false);
					console.log(response);
					$('.reset-form-error ul').html('');
					$.each( response, function( key, value ) {
						$('.contact-form-error ul').append('<li>' + value + '</li>');
					});

					$('.reset-form-error')
						.removeClass('hide');
				});

			return false;
		}
	});

	// registration form validate
	$('#loginForm').validate({
		errorPlacement: function(error, element) {},
		submitHandler: function(form) {
			$('#loginForm').find('button').attr('disabled', true);
			$.post($(form).attr('action'), $(form).serialize())
				.done(function(response){
					//console.log(response);
					window.location = response.redirect;
				})
				.fail(function(data){
					$('#loginForm').find('button').attr('disabled', false);
					var response = data.responseJSON;
					var $wrap = $('.login-form-error');
					$wrap.find('ul').html('');
					$.each( response, function( key, value ) {
						$wrap.find('ul').append('<li>' + value + '</li>');
					});

					$wrap.removeClass('hide')
						.delay(3000)
						.queue(function(){
							$(this).addClass('hide');
						});
				});

			return false;
		}
	});

	$('#profileEdit').validate({
		errorPlacement: function(error, element) {},
		submitHandler: function(form) {

			$(form).submit();

			return false;
		}
	});
	

	$('.passwordReset').click(function() {
		$('.loginForm').hide();
		$('.passwordResetForm').fadeIn();
	});

	$('.backToLogin').click(function() {
		$('.passwordResetForm').hide();
		$('.loginForm').fadeIn();
	});


	$('.panel-heading').on('click', function () {
		$('.panel-heading').show();
		$(this).hide();
	});

});

function prescriptionStep(step) {
	switch (step) {
		case 2:
			$('.step .first').removeClass('step-circle__active').addClass('step-circle__passive');
			$('.step .second').removeClass('step-circle__passive').addClass('step-circle__active');
			$('.step-1-wrap').addClass('hidden');
			$('.step-2-wrap').removeClass('hidden');
			break;
		case 1:
		default:
			$('.step .second').removeClass('step-circle__active').addClass('step-circle__passive');
			$('.step .first').removeClass('step-circle__passive').addClass('step-circle__active');
			$('.step-2-wrap').addClass('hidden');
			$('.step-1-wrap').removeClass('hidden');
			break
	}
}

// Sticky Footer
function footerAdjustment() {
	var height = $(".footer--main").outerHeight();
	$("#push").css('height', height);
	$("#wrap").css('margin-bottom', '-' + height + 'px');
}

function headerAdjustment() {
	var height = $(".header--main").outerHeight();
	$(".title-holder").css('padding-top', '' + height + 'px');
	$("main").css('padding-top', '' + height + 'px');
}

window.showAdditionalField = function() {
	console.log($('input[name="referrer"]:checked').val());
	if ($('input[name="referrer"]:checked').val() == 'Others') {
		$('.referrer_source').fadeIn();
		$('label[for="referrer_source"]').fadeIn();
		return false;
	}
	$('.referrer_source').fadeOut();
	$('label[for="referrer_source"]').fadeOut();
};
