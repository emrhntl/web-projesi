function formKontrol() {
    var isim = document.getElementById("isim").value;
    var soyisim = document.getElementById("soyisim").value;
    var yas = document.getElementById("yas").value;
    var email = document.getElementById("email").value;
    var dgunu = document.getElementById("dgunu").value;
    var meslek = document.getElementById("meslek").value;
    var mesaj = document.getElementById("textarea").value;
    dgunu = dgunu.toString();   
    if (isim == null || isim == "") {
        alert("Adınızı Giriniz!");
        return false;
    }
    if (soyisim == null || soyisim == "") {
        alert("Soyadınızı Giriniz!");
        return false;
    }
    if (email == null || email == "" ) {
        alert("Mailinizi giriniz");
        return false;
    }
    if (yas == null || yas == "" ) {
        alert("Yaşınızı Giriniz!");
        return false;
    }
    if (dgunu == null || dgunu == "" ) {
        alert("Doğum gününüzü giriniz!");
        return false;
    }
    if (meslek == null || meslek == "" ) {
        alert("Mesleğinizi giriniz!");
        return false;
    }
    if (mesaj == null || mesaj == "" ) {
        alert("Bir mesaj yazınız!");
        return false;
    }
}
function loginKontrol(){
    var email = document.getElementById("email").value;
    var sifre = document.getElementById("sifre").value;
    var kontrol = true;
    if(email=="" || email == null){
        alert("Lütfen bir email giriniz!");
        return false;
    }
    if(sifre ==""||email == null ){
        alert("Lütfen şifrenizi giriniz!");
        return false;
    }
    if(email == "b211210047@sakarya.edu.tr" && sifre == "b211210047"){
        alert("HOŞGELDİNİZ \"B211210047\"!");
        return true;
    }
    else{
        alert("Şifreniz ya da kullanıcı adınız hatalı tekrar deneyin!");
        return false;
    }
}