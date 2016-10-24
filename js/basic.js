function duyuruGoster() {

  $("#navs li").removeClass("active");
  $("#nav_duyurular").addClass("active");
  $("#pages > div").hide();
  $('#duyurular_page').show();

  console.log("duyurlar acildi");

}

function kullaniciGoster() {

  $("#navs li").removeClass("active");
  $("#nav_users").addClass("active");
  $("#pages > div").hide();
  $('#users_page').show();

  console.log("kullaniciGoster acildi");

}

function profilGoster() {

  $("#navs li").removeClass("active");
  $("#nav_profile").addClass("active")    
  $("#pages > div").hide();
  $('#profile_page').show();

  console.log("Profil sayfasi acildi");

}

function kullaniciDivGizle() {
  
  console.log( "user giris yaptı pnp! Kullanıcılar Sekmesi gizlendi!" );
  $("#navLinks > #nav_users").hide();

}; 


function kullaniciEkle(){
  $('#kullanici_ekle_modal').modal('show');

}


$("#profileGuncelle").click(function(){
      var password = $("#user_new_pass").val();
      
       var dataString = 'password='+ password;

        if(password=='')
        {
          alert("Please Fill All Fields");
        }
        else
        {
          // AJAX Code To Submit Form.
          $.ajax({
          type: "POST",
          url: "sifredegistir.php",
          data: dataString,
          cache: false,
            success: function() {
            $("#profile_update_alert").show();
            $("#pass_validate").text("Şifre değişti!");
            setTimeout(function() {
              $("#user_new_pass").val("");
              $("#user_new_pass_c").val("");
            $("#profile_update_alert").hide();
      }, 3000);
    },
    error: function() {
      $("#pass_validate").text("Boku yedik!");
      alert("sictik pnp");
    }
          });
    }
      
      return false;
});

/// Yeni Kullanıcı ekleme işlemi...............
$("#kullaniciKaydetButton").click(function(){

  var AdSoyad = $("#adSoyad").val();
  var Email   = $("#mailAdresi").val();
  var Sifre   = $("#sifre").val();
  var SifreTekrar = $("#sifreTekrar").val();

  if(AdSoyad=="" || Email =="" || Sifre=="" || SifreTekrar==""){
      $("#kullaniciEkleMesaj").text("Lütfen Bütün Alanları Doldurun!");
  }
  else if(Sifre !=SifreTekrar ){
    // Hata bas
  $("#kullaniciEkleMesaj").text("Şifreler uyuşmuyor!");
  }else{
    $("#kullaniciEkleMesaj").hide();
    var Rol="user";
    
    if($("#adminRadio").is(":checked")){
      Rol ="admin" ;
     }    

   //console.log("AdSoyad: " + AdSoyad+"  Email: " + Email +" Sifre : " +Sifre + "  Rol : " + Rol  ); 

    // parametrelerin geçirilmesi
    var dataString = 'adSoyad='+ AdSoyad + '&email='+ Email + '&sifre='+ Sifre +'&rol='+ Rol ;


    $.ajax({
          type: "POST",
          url: "kullaniciEkle.php",
          data: dataString,
          cache: false,
            success: function() {
            $("#kullaniciEkleMesaj").text("Kullanıcı başarıyla kaydedildi.");
            $("#kullaniciEkleMesaj").show();

            //inputların temizlenme işlemi
            $("#adSoyad").val('');
            $("#mailAdresi").val('');
            $("#sifre").val('');
            $("#sifreTekrar").val('');;

            $("#users_page").load("kullanicilar.php"); // tablo yeniden yüklenmesi!.
            
            setTimeout(function() {
            $("#kullaniciEkleMesaj").hide();  // mesajın gizlenmesi
            $('#kullanici_ekle_modal').modal('hide'); // modalin kapanması
      }, 2500);
    },
    error: function() {
      $("#kullaniciEkleMesaj").text("Boku yedik!");
    }
          });
  }
});