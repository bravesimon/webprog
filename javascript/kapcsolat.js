window.onload = function() {
	/*var kuld = document.getElementById("kuld");
	if (kuld) {
		kuld.disabled = false;
	}*/
};

function ellenoriz() {
	var rendben = true;
	var fokusz = null;

	var szoveg = document.getElementById("szoveg");
	if (szoveg) {
		if (szoveg.value.length==0) {
			rendben = false;
			szoveg.style.background = '#f99';
			fokusz = szoveg;
		} else {
			szoveg.style.background = '#9f9';
		}
	}

	var email = document.getElementById("email");
	if (email) {
		var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if (!checkPattern.test(email.value)) {
			rendben = false;
			email.style.background = '#f99';
			fokusz = email;
		} else {
			email.style.background = '#9f9';
		}
	}

	if (fokusz) {
		fokusz.focus();
	}

	/*var kuld = document.getElementById("kuld");
	if (kuld) {
		kuld.disabled = false; // !rendben;
	}*/

	return rendben;
}