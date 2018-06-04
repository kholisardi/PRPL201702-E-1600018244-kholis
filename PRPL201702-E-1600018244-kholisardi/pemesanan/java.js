function mulaiHitung(){
				Interval = setInterval("hitung()",1);
			}
function hitung(){

	var total_bayar = 0;

	jmlnasgor 			= parseInt(document.getElementById("jumlahnasgor").value);
	jmlnasiayam 		= parseInt(document.getElementById("jumlahnasiayam").value);
	jmlgurame 			= parseInt(document.getElementById("jumlahgurame").value);
	jmlbakso 			= parseInt(document.getElementById("jumlahbakso").value);
	jmlgeprek 			= parseInt(document.getElementById("jumlahgeprek").value);
	jmlmieayam 			= parseInt(document.getElementById("jumlahmieayam").value);


	jmlesteh			= parseInt(document.getElementById("jumlahesteh").value);
	jmlesjeruk			= parseInt(document.getElementById("jumlahesjeruk").value);
	jmljusalpukat		= parseInt(document.getElementById("jumlahjusalpukat").value);
	jmlsusu				= parseInt(document.getElementById("jumlahsusu").value);
	jmlesbuah			= parseInt(document.getElementById("jumlahesbuah").value);

	

	var Nasigoreng 		= document.getElementById('nasgor').checked;
	var Nasiayam 		= document.getElementById('nasiayam').checked;
	var IkanGurame 		= document.getElementById('gurame').checked;
	var BaksoSpesial 	= document.getElementById('baksospesial').checked;
	var AyamGeprek 		= document.getElementById('geprek').checked;
	var MieAyam 		= document.getElementById('mieayam').checked;

	var Esteh 			= document.getElementById('esteh').checked;
	var Esjeruk 		= document.getElementById('esjeruk').checked;
	var Jusalpukat 		= document.getElementById('jusalpukat').checked;
	var Susu 			= document.getElementById('susu').checked;
	var Esbuah	 		= document.getElementById('esbuah').checked;


	if (Nasigoreng == true){

			nasgor 			= 13000 * jmlnasgor;
			total_bayar 	= total_bayar + nasgor;
	} 

	if (Nasiayam == true){
		
			nasiayam	= 15000 * jmlnasiayam;
			total_bayar 	= total_bayar + nasiayam;
	}

	if (IkanGurame == true){
		
			gurame		= 22000	* jmlgurame;
			total_bayar 	= total_bayar + gurame;
	}

	if (BaksoSpesial == true){
		
			bakso		= 20000	* jmlbakso;
			total_bayar 	= total_bayar + bakso;
	}

	if (AyamGeprek == true){
		
			geprek 		= 15000	* jmlgeprek;
			total_bayar 	= total_bayar + geprek;
	}

	if (MieAyam == true){
		
			mieayam		= 20000	* jmlmieayam;
			total_bayar 	= total_bayar + mieayam;
	}


	// UNTUK MINUMAN
	if (Esteh == true){
		
			esteh			= 8000	* jmlesteh;
			total_bayar 	= total_bayar + esteh;
	}
	if (Esjeruk == true){
		
			esjeruk			= 7000	* jmlesjeruk;
			total_bayar 	= total_bayar + esjeruk;
	}
	if (Jusalpukat == true){
		
			jusalpukat		= 15000	* jmljusalpukat;
			total_bayar 	= total_bayar + jusalpukat;
	}
	if (Susu == true){
		
			susu			= 10000	* jmlsusu;
			total_bayar 	= total_bayar + susu;
	}
	if (Esbuah == true){
		
			esbuah			= 15000	* jmlesbuah;
			total_bayar 	= total_bayar + esbuah;
	}
	

	document.getElementById("totalbayar").value = total_bayar;

	bayar_ = parseInt(document.getElementById("bayar").value);
	kembali = bayar_ -  total_bayar;
	document.getElementById("kembalian").value = kembali;

}
function berhentiHitung(){
	clearInterval(Interval);
}

function validasi(){
	var nam = document.forms["myForm"]["namapemesan"].value;
    if (nam == "") {
        alert("Nama Tidak Boleh Kosong");
        return false;
    }

    var ala = document.forms["myForm"]["alamat"].value;
    if (ala == "") {
        alert("Alamat Tidak Boleh Kosong");
        return false;
    }
}