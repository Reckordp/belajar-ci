
function mengorder(evt) {
	alamat_email_elm = document.getElementById("alamat-email");
	alamat_email = alamat_email_elm.value;
	alamat_email_elm.value = "";
	var form = new XMLHttpRequest();
	form.onreadystatechange = function() {
		if (form.readyState == form.DONE) {
			if (form.status != 200) {
				alert("Server tidak terjangkau");
			} else {
				document.getElementById("jawaban").removeAttribute('hidden');
			}
		}
	}

	form.open('POST', '/order/create', true);
	form.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	form.send('email=' + alamat_email);
}

function pasang_fungsi() {
	document.getElementById("order-laundry").addEventListener('click', mengorder);
}

window.onload = pasang_fungsi