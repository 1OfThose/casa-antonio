(function ($) {
	"use strict";

	$(window).scroll(function () {
		if ($(".navbar").offset().top > 50) {
			$(".navbar").addClass("white-bg");
		} else {
			$(".navbar").removeClass("white-bg");
		}
	});
})(jQuery);

$("*")
	.contents()
	.each(function () {
		if (this.nodeType === Node.COMMENT_NODE) {
			$(this).remove();
		}
	});

function opentab(evt, cityName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "flex";
	evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();

$("#dateinput").datepicker({
	dayNames: [
		"Dimanche",
		"Lundi",
		"Mardi",
		"Mercredi",
		"Jeudi",
		"Vendredi",
		"Samedi",
	],
	showAnim: "fadeIn",
	minDate: 0,
	monthNames: [
		"Janvier",
		"Février",
		"Mars",
		"Avril",
		"Mai",
		"Juin",
		"Juillet",
		"Août",
		"Septembre",
		"Octobre",
		"Novembre",
		"Décembre",
	],
	monthNamesShort: [
		"Janv.",
		"Févr.",
		"Mars",
		"Avril",
		"Mai",
		"Juin",
		"Juil.",
		"Août",
		"Sept.",
		"Oct.",
		"Nov.",
		"Déc.",
	],
	firstDay: 1,
	currentText: "Aujourd'hui",
	closeText: "Fermer",
	prevText: "Précédent",
	nextText: "Suivant",
	dayNamesShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
	dayNamesMin: ["Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa"],
	dateFormat: "dd MM yy",
	beforeShowDay: closed,
});

function closed(date) {
	if (date.getDay() === 1 || date.getDay() === 0)
		return [false, "Fermé", "Fermé le dimanche et lundi"];
	else return [true, "", ""];
}

$("#timeinput").timepicker({
	timeFormat: "H:i",
	step: 15,
	minTime: "12",
	maxTime: "20:45",
	disableTimeRanges: [["2:00 pm", "7:00 pm"]],
});

const form = document.getElementById("myForm"),
	statusTxt = form.getElementsByClassName("form-status")[0];

form.onsubmit = e => {
	e.preventDefault();
	statusTxt.style.color = "green";
	statusTxt.style.display = "block";

	let xhr = new XMLHttpRequest();
	xhr.open("POST", "/php/contact.php", true);

	xhr.onload = () => {
		if (xhr.readyState == 4 && xhr.status == 200) {
			let response = xhr.response;
			if (
				response === "Email et message sont obligatoires!" ||
				response === "Votre email n'est pas valide!" ||
				response === "Le message n'as pas pu être envoyé :("
			) {
				statusTxt.style.color = "red";
			} else {
				form.reset();
				setTimeout(() => {
					statusTxt.style.display = "none";
				}, 4000);
			}

			statusTxt.innerText = response;
		}
	};

	let formData = new FormData(form);
	xhr.send(formData);
};

var dateErr = "Veuillez selectionner une date";
var emailErr = "Veuillez indiquer un mail valide";
var nameErr = "Veuillez indiquer votre nom";
var timeErr = "Veuillez selectionner l'horaire";
var numErr = "Veuillez indiquer votre portable";

const reservationForm = document.getElementById("form-res"),
	resStatus = reservationForm.getElementsByClassName("res-status")[0],
	resErrors = reservationForm.getElementsByClassName("res-error")[0];

reservationForm.onsubmit = e => {
	e.preventDefault();

	let xhr = new XMLHttpRequest();
	xhr.open("POST", "/casa_2021/php/sendRes.php", true);

	xhr.onload = () => {
		if (xhr.readyState == 4 && xhr.status == 200) {
			let res = xhr.response;
			if (res === "Erreur server") {
				resStatus.innerText = res;
				setTimeout(() => {
					resStatus.innerText = "reserver";
				}, 4000);
			} else if (res === "res_limit") {
				alert(
					"Le nombre de reservations pour cette date est elevé, veuillez donc appeler pour reserver, ou veuillez choisir une autre date."
				);
			} else if (
				res.includes(dateErr) ||
				res.includes(nameErr) ||
				res.includes(emailErr) ||
				res.includes(timeErr) ||
				res.includes(numErr)
			) {
				resStatus.classList.add("error-res");
				let resObj = JSON.parse(res);
				let resText = Object.values(resObj);

				resErrors.innerHTML = resText.join("<br>");
				resStatus.innerText = "Formulaire incomplet!";
				resStatus.disabled = true;

				setTimeout(() => {
					resErrors.innerHTML = ''
					resStatus.classList.remove("error-res");
					resStatus.disabled = false;
					resStatus.innerText = "reserver";
				}, 3500);

			} else {
				reservationForm.reset();
				resStatus.innerText = res;
				resStatus.classList.add("success-res");
				resStatus.disabled = true;
				setTimeout(() => {
					resStatus.classList.remove("success-res");
					resStatus.disabled = false;
					resStatus.innerText = "reserver";
				}, 4000);
			}
		}
	};

	let resInfo = new FormData(reservationForm);
	xhr.send(resInfo);
};

$(document).ready(function () {
	reservationForm.reset();
});
