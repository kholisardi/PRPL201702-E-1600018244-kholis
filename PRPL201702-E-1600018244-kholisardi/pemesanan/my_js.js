// Validating Empty Field
function check_empty() {
if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}

function mulaiHitung(){
				Interval = setInterval("hitung()",1);
			}
			function hitung(){
				harga_satuan 	= parseInt(document.getElementById("hargasatuan").value);
				jumlah_beli		= parseInt(document.getElementById("jumlahbeli").value);
				total_bayar 	= harga_satuan * jumlah_beli;
				document.getElementById("totalbayar").value = total_bayar;

				diskon = "";
				persen = "";

				if(total_bayar <= 100000){
					diskon_ = (0/100) * total_bayar;
					persen = "0%";
				}

				else if(total_bayar > 100000 && total_bayar <= 200000){
					diskon_ = (10/100) * total_bayar;
					persen = "10%";
				}
				else if(total_bayar > 200000 && total_bayar <= 300000){
					diskon_ = (20/100) * total_bayar;
					persen = "20%";
				}
				else if(total_bayar > 300000){
					diskon_ = (30/100) * total_bayar;
					persen = "30%";
				}


				document.getElementById("diskon").value = persen + " -->"+diskon_;
				setelahdis = total_bayar - diskon_;
				document.getElementById("setelahdiskon").value = setelahdis;

				bayar_ = parseInt(document.getElementById("bayar").value);
				kembali = bayar_ -  setelahdis;
				document.getElementById("kembalian").value = kembali;

			}
			function berhentiHitung(){
				clearInterval(Interval);
			}