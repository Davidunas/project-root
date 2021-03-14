document.querySelector('.img-btn').addEventListener('click', function () {
	document.querySelector('.cont').classList.toggle('s-signup')
});

$(document).ready(function () {
	// On Click SignUp It Will Hide Login Form and Display Registration Form
	$("#signup").click(function () {
		$("#first").slideUp("slow", function () {
			$("#second").slideDown("slow");
		});
	});
	// On Click SignIn It Will Hide Registration Form and Display Login Form
	$("#signin").click(function () {
		$("#second").slideUp("slow", function () {
			$("#first").slideDown("slow");
		});
	});
});

function ShowPassword() {
	var x = document.getElementById("password_login1");
	// var y = document.getElementById("password");
	// var z = document.getElementById("password2");
	if (x.type === "password") {
		x.type = "text";
	} else if (x.type === "text") {
		x.type = "password";
	}
}

function ShowPassword1() {
	// var x = document.getElementById("password_login1");
	var y = document.getElementById("password3");
	// var z = document.getElementById("password4");
	if (y.type === "password") {
		y.type = "text";
	} else if (y.type === "text") {
		y.type = "password";
	}
}

function ShowPassword2() {
	// var x = document.getElementById("password_login1");
	// var y = document.getElementById("password3");
	var z = document.getElementById("password4");
	if (z.type === "password") {
		z.type = "text";
	} else if (z.type === "text") {
		z.type = "password";
	}
}

$(document).ready(function () {
	var cek = $('.checkbox1').val();
	$('.checkbox1').click(function () {
		if ($(this).is(':checked')) {
			$('#password_login').attr('type', 'text');
		} else {
			$('#password_login').attr('type', 'password');
		}
	});
});

$(document).ready(function () {
	var cek = $('.checkbox2').val();
	$('.checkbox2').click(function () {
		if ($(this).is(':checked')) {
			$('#password').attr('type', 'text');
		} else {
			$('#password').attr('type', 'password');
		}
	});
});

$(document).ready(function () {
	var cek = $('.checkbox3').val();
	$('.checkbox3').click(function () {
		if ($(this).is(':checked')) {
			$('#password2').attr('type', 'text');
		} else {
			$('#password2').attr('type', 'password');
		}
	});
});