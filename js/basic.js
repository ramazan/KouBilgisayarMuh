function LinkEkleCheckBox()
{
    if($('.linkEkle').is(":checked"))   
        $("#LinkDiv").show();
    else
        $("#LinkDiv").hide();
}


function etkinlikGoster(){

  if($("#genelDuyuru").is(":checked") || $("#bolumDuyuru").is(":checked") ){
     
     LinkEkleCheckBox();
     $("#linkEkleDiv").show();
     $("#duyuruDivIcerik").show();
     $("#tarihDiv").hide();
     $("#resimEkleDiv").hide();
  
  }else if ($("#etkinlikDuyuru").is(":checked")){
      $("#linkEkleDiv").hide();
      $("#LinkDiv").hide();
      $("#duyuruDivIcerik").show();
      $("#tarihDiv").show();
      $("#resimEkleDiv").hide();

  }else if($("#haberDuyuru").is(":checked") || $("#Slider").is(":checked") ){
     $("#linkEkleDiv").hide();
      $("#LinkDiv").hide();
      $("#duyuruDivIcerik").show();
      $("#tarihDiv").hide();
      $("#resimEkleDiv").show();

  }else if($("#is-stajDuyuru").is(":checked")){
     $("#linkEkleDiv").hide();
      $("#LinkDiv").hide();
      $("#duyuruDivIcerik").show();
      $("#tarihDiv").hide();
      $("#resimEkleDiv").hide();

  }


}


function duyuruGoster() {


  $("#page-wrapper > div").hide();
  $('#duyurular_page').show();

  console.log("duyurlar acildi");

}

function kullaniciGoster() {

  $("#page-wrapper > div").hide();
  $('#users_page').show();

  console.log("kullaniciGoster acildi");

}

function profilGoster() {
   
  $("#page-wrapper > div").hide();
  $('#profile_page').show();

  console.log("Profil sayfasi acildi");

}

function kullaniciDivGizle() {
  
  console.log( "user giris yaptı pnp! Kullanıcılar Sekmesi gizlendi!" );
  $("#side-menu > #nav_users").hide();
    $('#users_page').hide();


}; 


function kullaniciEkle(){
  $('#kullanici_ekle_modal').modal('show');

}


function duyuruEkle(){
  $('#duyuru_ekle_modal').modal('show');
}

function KullaniciSil(ID){
 // console.log("siilinecek ID : " + ID);
    $('#KullaniciSilModal').modal('show');
    $('#kullaniciSilMesaj').text("Emin misiniz?");
     console.log(" ID : " + ID);

    $("#kullaniciSilButton").click(function(){
        console.log(" ID : " + ID);

        var dataString = 'ID=' + ID; 
         $.ajax({
            type: "POST",
            url: "kullaniciSil.php",
            data: dataString,
            cache: false,
              success: function() {
         $("#kullaniciSilMesaj").find(".label-danger").addClass("label-success").removeClass("label-danger");
         
              $("#kullaniciSilMesaj").text("Kullanıcı Silindi!");
               $("#users_page").load("kullanicilar.php"); // tablo yeniden yüklenmesi!.

         setTimeout(function() {
            $("#kullaniciSilMesaj").text("");

              $("#KullaniciSilModal").modal('hide');
        }, 2000);
      },
      error: function() {
        alert("sictik pnp");
      }
            });

        
    }); // click fonksiyonu

}


$("#profileGuncelle").click(function(){
      var password = $("#user_new_pass").val();
      var password_again = $("#user_new_pass_c").val();

      
       var dataString = 'password='+ password;

        if(password=='' || password_again=='')
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
  var UnvanAdSoyad = $( "#unvan option:selected" ).text() +" " + AdSoyad;

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
    var dataString = 'adSoyad='+ UnvanAdSoyad + '&email='+ Email + '&sifre='+ Sifre +'&rol='+ Rol ;


    $.ajax({
          type: "POST",
          url: "kullaniciEkle.php",
          data: dataString,
          cache: false,
            success: function() {
              $("#kullaniciEkleMesaj").find(".label-danger").addClass("label-success").removeClass("label-danger");
 
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
	  $("#duyuruEkleMesaj").show();
  }
  else{

    if($("#genelDuyuru").is(":checked")){
      duyuruTuru = "Genel" ;

          // parametrelerin geçirilmesi
    var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru;
    duyuruAjaxPost(dataString)
    
    } else if($("#bolumDuyuru").is(":checked")){
      duyuruTuru = "Bolum" ;
          // parametrelerin geçirilmesi
    var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru;
    duyuruAjaxPost(dataString)

    } else if($("#etkinlikDuyuru").is(":checked")){
      var etlinlikGun = $("#tarihGun").val();
      var etlinlikAy   = $("#tarihAy").val();
      duyuruTuru = "Etkinlik";

          // parametrelerin geçirilmesi
         var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru
        + '&etlinlikGun='+ etlinlikGun + '&etlinlikAy='+ etlinlikAy;
        duyuruAjaxPost(dataString)

    }else if($("#haberDuyuru").is(":checked")){
     
      duyuruTuru = "Haber";
      var resimLink   = $("#ResimLinki").val();
     
      if(resimLink == ""){
              $("#duyuruEkleMesaj").text("Lütfen Habere Resim Ekleyin!");
			  $("#duyuruEkleMesaj").show();
      }else{
      var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru
        + '&resimLink='+ resimLink;
        duyuruAjaxPost(dataString)
      }

    }else if ($("#Slider").is(":checked")) {

      duyuruTuru = "Slider";
      var resimLink   = $("#ResimLinki").val();
     
      if(resimLink == ""){
              $("#duyuruEkleMesaj").text("Lütfen Slider'a Resim Ekleyin!");
			  $("#duyuruEkleMesaj").show();
      }else{
      var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru
        + '&resimLink='+ resimLink; 
        duyuruAjaxPost(dataString);
      }

    }    
	
	else if ($("#is-stajDuyuru").is(":checked")) {

      duyuruTuru = "is-staj";
     
     
      var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru;
       duyuruAjaxPost(dataString);
      

    }  
	
	
	

  }  // içerik else

 
});



function duyuruAjaxPost(dataString){

  $.ajax({
          type: "POST",
          url: "duyuruEkle.php",
          data: dataString,
          cache: false,
            success: function() {
             $("#duyuruEkleMesaj").find(".label-danger").addClass("label-success").removeClass("label-danger");

            $("#duyuruEkleMesaj").text("Duyuru eklendi.");
            $("#duyuruEkleMesaj").show();

            //inputların temizlenme işlemi
            $("#duyuruBasligi").val('');
            $("#duyuruIcerigi").val('');
            $("#ResimLinki").val('');

           $("#duyurular_page").load("duyurular.php"); // tablo yeniden yüklenmesi!.
            
              setTimeout(function() {
              $("#duyuruEkleMesaj").hide();  // mesajın gizlenmesi
              $('#duyuru_ekle_modal').modal('hide'); // modalin kapanması
               }, 2500);
             },
            error: function() {
              $("#duyuruEkleMesaj").text("Boku yedik!");
            }
    });
}

function duyuruSil(ID){
 // console.log("siilinecek ID : " + ID);
    $('#DuyuruSilModal').modal('show');
    $('#duyuruSilMesaj').text("Emin misiniz?");

    $("#duyuruSilButton").click(function(){
        console.log(" ID : " + ID);

        var dataString = 'ID=' + ID; 
        
         $.ajax({
                type: "POST",
                url: "duyuruSil.php",
                data: dataString,
                cache: false,
                  success: function() {

                $("#duyuruSilDiv").find(".label-danger").addClass("label-success").removeClass("label-danger");

                  $("#duyuruSilMesaj").text("Duyuru Silindi!");
                  $("#duyurular_page").load("duyurular.php"); // tablo yeniden yüklenmesi!.

             setTimeout(function() {
                $("#duyuruSilMesaj").text("");
                $("#DuyuruSilModal").modal('hide');
            }, 2000);
          },
          error: function() {
            alert("sictik pnp");
          }
                });

        
    }); // click fonksiyonu

}


$("#LinkEkleButton").click(function(){
			  $("#duyuruLinki").prop('disabled', false);


    var linkAdi = $("#duyuruLinkiAdi").val();
    var link   = $("#duyuruLinki").val();

     if(linkAdi=="" || link ==""){
      $("#duyuruEkleMesaj").text("Lütfen Link Adı ve linki ekleyin!");

       setTimeout(function() {
            $("#duyuruEkleMesaj").text("");
        }, 2000);

    }else{


    var linkOlustur = "<a href=\""+link+"\" target=\"_blank\">"+linkAdi+"</a>";

    var mesaj =$("#duyuruIcerigi").val();

    var yeniMesaj = mesaj + linkOlustur;

    $('#duyuruIcerigi').val(yeniMesaj);
    $('#duyuruLinkiAdi').val("");  
    $('#duyuruLinki').val("");
    }
});


