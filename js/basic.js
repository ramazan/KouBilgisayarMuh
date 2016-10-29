function LinkEkleCheckBox()
{
    if($('.linkEkle').is(":checked"))   
        $("#LinkDiv").show();
    else
        $("#LinkDiv").hide();
}


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


function duyuruEkle(){
  $('#duyur_ekle_modal').modal('show');
}

function KullaniciSil(ID){
 // console.log("siilinecek ID : " + ID);
    $('#KullaniciSilModal').modal('show');
    $('#kullaniciSilMesaj').text("Emin misiniz?");

    $("#kullaniciSilButton").click(function(){
        console.log(" ID : " + ID);

        var dataString = 'ID=' + ID; 
         $.ajax({
            type: "POST",
            url: "kullaniciSil.php",
            data: dataString,
            cache: false,
              success: function() {
              $("#kullaniciSilMesaj").text("Kullanıcı Silindi!");
               $("#users_page").load("kullanicilar.php"); // tablo yeniden yüklenmesi!.

         setTimeout(function() {
            $("#kullaniciSilMesaj").text("");

              $("#KullaniciSilModal").modal('hide');
        }, 2000);
      },
      error: function() {
        $("#pass_validate").text("Boku yedik!");
        alert("sictik pnp");
      }
            });

        
    }); // click fonksiyonu


}


$("#profileGuncelle").click(function(){
      var password = $("#user_new_pass").val();
      var password_again = $("#user_new_pass").val();

      
       var dataString = 'password='+ password;

        if(password=='')
        {
            $("#pass_validate").text("Şifre Boş");
        }
        else if(password != password_again){
          $("pass_validate").text("Şifreler Eşleşmiyor!");
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



$("#duyuruKaydetButton").click(function(){

  var baslik = $("#duyuruBasligi").val();
  var icerik   = $("#duyuruIcerigi").val();
  var duyuruTuru;

  if(baslik=="" || icerik ==""){
      $("#duyuruEkleMesaj").text("Lütfen Bütün Alanları Doldurun!");
  }
  else{

    if($("#genelDuyuru").is(":checked")){
      duyuruTuru = 1 ;
    } else if($("#bolumDuyuru").is(":checked")){
      duyuruTuru = 2 ;
    } else{
      duyuruTuru = 3;
    }    


    // parametrelerin geçirilmesi
    var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru;




    $.ajax({
          type: "POST",
          url: "duyuruEkle.php",
          data: dataString,
          cache: false,
            success: function() {
            $("#duyuruEkleMesaj").text("duyuru başarıyla kaydedildi.");
            $("#duyuruEkleMesaj").show();

            //inputların temizlenme işlemi
            $("#duyuruBasligi").val('');
            $("#duyuruIcerigi").val('');

           $("#duyurular_page").load("duyurular.php"); // tablo yeniden yüklenmesi!.
            
              setTimeout(function() {
              $("#duyuruEkleMesaj").hide();  // mesajın gizlenmesi
              $('#duyuru_ekle_modal').modal('hide'); // modalin kapanması
               }, 2500);
             },
            error: function() {
              $("#kullaniciEkleMesaj").text("Boku yedik!");
            }
    });

  }  // else

   console.log(dataString); 

 
});

$("#LinkEkleButton").click(function(){

    var linkAdi = $("#duyuruLinkiAdi").val();
    var link   = $("#duyuruLinki").val();

    var linkOlustur = "<a href=\""+link+"\">"+linkAdi+"</a>";

    var mesaj =$("#duyuruIcerigi").val();

    var yeniMesaj = mesaj + linkOlustur;

    $('#duyuruIcerigi').val(yeniMesaj);
    $('#duyuruLinkiAdi').val("");  
    $('#duyuruLinki').val("");
});