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
     $("#yayinSuresiDiv").show();
  
  }else if ($("#etkinlikDuyuru").is(":checked")){
      $("#linkEkleDiv").hide();
      $("#LinkDiv").hide();
      $("#duyuruDivIcerik").show();
      $("#tarihDiv").show();
      $("#resimEkleDiv").hide();
     $("#yayinSuresiDiv").show();

  }else if($("#haberDuyuru").is(":checked") || $("#Slider").is(":checked") ){
     $("#linkEkleDiv").hide();
      $("#LinkDiv").hide();
      $("#duyuruDivIcerik").show();
      $("#tarihDiv").hide();
      $("#resimEkleDiv").show();     
      $("#yayinSuresiDiv").show();


  }else if($("#is-stajDuyuru").is(":checked")){
     $("#linkEkleDiv").hide();
      $("#LinkDiv").hide();
      $("#duyuruDivIcerik").show();
      $("#tarihDiv").hide();
      $("#resimEkleDiv").hide();
      $("#yayinSuresiDiv").show();


  }


}


function duyuruGoster() {


  $("#page-wrapper > div").hide();   /// butun divleri gizle
  $('#duyurular_page').hide().delay(250).fadeIn(350);  // duyurular_page divini göster


}

function kullaniciGoster() {

  $("#page-wrapper > div").hide();
  $('#users_page').hide().delay(250).fadeIn(350);

}


function profilGoster() {
   
  $("#page-wrapper > div").hide();
  $('#profile_page').hide().delay(250).fadeIn(350);

}

function P_OnIzle()
{
  $('#Profil_Guncelle').hide();
  $('#Profil_OnIzleme').hide().delay(250).fadeIn(350);

  
}
function P_Guncelle()
{
  $('#Profil_OnIzleme').hide();
  $('#Profil_Guncelle').hide().delay(250).fadeIn(350);

}


function kullaniciDivGizle() {
  
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

    $('#KullaniciSilModal').modal('show');
    $('#kullaniciSilMesaj').text("Emin misiniz?");
 
      
    $("#kullaniciSilButton").click(function(){

        var dataString = 'ID=' + ID; 

         $.ajax({
            type: "POST",
            url: "kullaniciSil.php",
            data: dataString,
            cache: false,
            beforeSend: function() { $('#loading_kullanici_sil').show(); },
           complete: function() { $('#loading_kullanici_sil').hide(); },
              success: function() {
                $("#kullaniciSilDiv").find(".label-danger").addClass("label-success").removeClass("label-danger");
         
              $("#kullaniciSilMesaj").text("Kullanıcı Silindi!");

               $("#users_page").load("kullanicilar.php"); // sayfanın yeniden yüklenmesi!.

         setTimeout(function() {
            
            $("#kullaniciSilMesaj").text("");

              $("#KullaniciSilModal").modal('hide');
        }, 2000);
      },
      error: function() {
        alert("Bi' şeyler ters gitti..");
      }
            });

        
    }); // click fonksiyonu

}


$("#sifreGuncelle").click(function(){
      var yeniSifre = $("#yeni_sifre").val();
      var yeniSifreTekrar = $("#yeni_sifre_tekrar").val();

       if(yeniSifre=="" || yeniSifreTekrar =="" ){
         $("#changePassword").find(".alert-success").addClass("alert-danger").removeClass("alert-success");
        $("#profile_update_alert").show();
        $("#pass_validate").text("Lütfen Bütün Alanları Doldurun!");
        }
        else if(yeniSifre != yeniSifreTekrar){
          $("#changePassword").find(".alert-success").addClass("alert-danger").removeClass("alert-success");
          $("#profile_update_alert").show();
          $("#pass_validate").text("Şifreler Eşleşmiyor!");
        }
        else
        {
          var dataString = 'password='+ yeniSifre;

          $.ajax({
          type: "POST",
          url: "sifredegistir.php",
          data: dataString,
          cache: false,
          beforeSend: function() { $('#loading_sifre_guncelle').show(); },
           complete: function() { $('#loading_sifre_guncelle').hide(); },
            success: function() {
              $("#changePassword").find(".alert-danger").addClass("alert-success").removeClass("alert-danger");

            $("#profile_update_alert").show();
            $("#pass_validate").text("Şifre değişti!");
            setTimeout(function() {
              $("#yeni_sifre").val("");
              $("#yeni_sifre_tekrar").val("");
            $("#profile_update_alert").hide();
      }, 3000);
    },
    error: function() {
      $("#pass_validate").text("Bi' şeyler ters gitti..");
      alert("Bi' şeyler ters gitti..");
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

    // parametrelerin geçirilmesi
    var dataString = 'adSoyad='+ UnvanAdSoyad + '&email='+ Email + '&sifre='+ Sifre +'&rol='+ Rol ;


    $.ajax({
          type: "POST",
          url: "kullaniciEkle.php",
          data: dataString,
          cache: false,
           beforeSend: function() { $('#loading_kullanici_ekle').show(); },
           complete: function() { $('#loading_kullanici_ekle').hide(); },
            success: function() {
                $("#kullaniciEkleDiv").find(".label-danger").addClass("label-success").removeClass("label-danger");
 
            $("#kullaniciEkleMesaj").text("Kullanıcı başarıyla kaydedildi.");
            $("#kullaniciEkleMesaj").show();

            //inputların temizlenme işlemi
            $("#adSoyad").val('');
            $("#mailAdresi").val('');
            $("#sifre").val('');
            $("#sifreTekrar").val('');;

            $("#users_page").load("kullanicilar.php"); // sayfanın yeniden yüklenmesi!.
            
            setTimeout(function() {
            $("#kullaniciEkleMesaj").hide();  // mesajın gizlenmesi
            $('#kullanici_ekle_modal').modal('hide'); // modalin kapanması
      }, 2500);
    },
    error: function() {
      $("#kullaniciEkleMesaj").text("Bi' şeyler ters gitti..");
    }
          });
  }
});



$("#AkademikBilgiGuncelle").click(function(){

  var anabilimdali = $("#anabilimdali").val();
  var odano   = $("#odano").val();
  var telefon   = $("#telefon").val();
  var website = $("#website").val();
  var arastirmaalan = $( "#arastirmaalan" ).val();


    // parametrelerin geçirilmesi
    var dataString = 'anaBilimDali='+ anabilimdali + '&odaNo='+ odano + '&Telefon='+ telefon
                     +'&Website='+ website +'&ArastirmaAlan='+ arastirmaalan ;


    $.ajax({
          type: "POST",
          url: "kullaniciGuncelle.php",
          data: dataString,
          cache: false,
          beforeSend: function() { $('#loading_akademik_guncelle').show(); },
           complete: function() { $('#loading_akademik_guncelle').hide(); },
            success: function() {
            $("#AkademikMesaj").text("Bilgiler Başarıyla Kaydedildi.");
            $("#AkademikMesajDiv").show();

            setTimeout(function() {
            $("#AkademikMesajDiv").hide();  // mesajın gizlenmesi
            $("#AkademikMesaj").text(""); // modalin kapanması
            $("#profile_page").load("profile.php");

      }, 3000);
    },
    error: function() {
      $("#AkademikMesaj").text("Bi' şeyler ters gitti..");
    }
          });
  

});





$("#duyuruKaydetButton").click(function(){

  var baslik = $("#duyuruBasligi").val();
  var icerik   = $("#duyuruIcerigi").val();
  var duyuruTuru;
  var yayinSuresi = $('#yayinSuresi').val();
  if(yayinSuresi == "Sürekli yayında kalsın"){
    yayinSuresi = 'NULL';
  }

  if(baslik=="" || icerik ==""){
      $("#duyuruEkleMesaj").text("Lütfen Bütün Alanları Doldurun!");
	  $("#duyuruEkleMesaj").show();
  }
  else{

    if($("#genelDuyuru").is(":checked")){
      duyuruTuru = "Genel" ;

          // parametrelerin geçirilmesi
    var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru 
    + '&yayinSuresi='+ yayinSuresi;
    duyuruAjaxPost(dataString);
    
    } else if($("#bolumDuyuru").is(":checked")){
      duyuruTuru = "Bolum" ;
          // parametrelerin geçirilmesi
    var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru
    + '&yayinSuresi='+ yayinSuresi;
    duyuruAjaxPost(dataString);

    } else if($("#etkinlikDuyuru").is(":checked")){
      var etlinlikGun = $("#tarihGun").val();
      var etlinlikAy   = $("#tarihAy").val();
      duyuruTuru = "Etkinlik";

          // parametrelerin geçirilmesi
         var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru
        + '&etlinlikGun='+ etlinlikGun + '&etlinlikAy='+ etlinlikAy+ '&yayinSuresi='+ yayinSuresi;
        duyuruAjaxPost(dataString);

    }else if($("#haberDuyuru").is(":checked")){
     
      duyuruTuru = "Haber";
      var resimLink   = $("#ResimLinki").val();
     
      if(resimLink == ""){
              $("#duyuruEkleMesaj").text("Lütfen Habere Resim Ekleyin!");
			  $("#duyuruEkleMesaj").show();
      }else{
      var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru
        + '&resimLink='+ resimLink+ '&yayinSuresi='+ yayinSuresi;
        duyuruAjaxPost(dataString);
      }

    }else if ($("#Slider").is(":checked")) {

      duyuruTuru = "Slider";
      var resimLink   = $("#ResimLinki").val();
     
      if(resimLink == ""){
              $("#duyuruEkleMesaj").text("Lütfen Slider'a Resim Ekleyin!");
			  $("#duyuruEkleMesaj").show();
      }else{
      var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru
        + '&resimLink='+ resimLink+ '&yayinSuresi='+ yayinSuresi; 
        duyuruAjaxPost(dataString);
      }

    }    
	
    	else if ($("#is-stajDuyuru").is(":checked")) {

        duyuruTuru = "is-staj";
       
       
        var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&duyuruTuru='+ duyuruTuru+ '&yayinSuresi='+ yayinSuresi;
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
          beforeSend: function() { $('#loading_duyuru_ekle').show(); },
           complete: function() { $('#loading_duyuru_ekle').hide(); },
            success: function() {
           $("#duyuruEkleDiv").find(".label-danger").addClass("label-success").removeClass("label-danger");

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
              $("#duyuruEkleMesaj").text("Bi' şeyler ters gitti..");
            }
    });
}

function duyuruSil(ID){

    $('#DuyuruSilModal').modal('show');
    $('#duyuruSilMesaj').text("Emin misiniz?");

    $("#duyuruSilButton").click(function(){

        var dataString = 'ID=' + ID; 
        
         $.ajax({
                type: "POST",
                url: "duyuruSil.php",
                data: dataString,
                cache: false,
                beforeSend: function() { $('#loading_duyuru_sil').show(); },
               complete: function() { $('#loading_duyuru_sil').hide(); },
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
            alert("Bi' şeyler ters gitti..");
          }
                });

        
    }); // click fonksiyonu

}

function duyuruGuncelle(ID){

    $('#duyuru'+ID).modal('show');

$("#duyuruGuncelleButton"+ID).click(function(){

  var baslik = $("#duyuruGuncelleBasligi"+ID).val();
  var icerik   = $("#duyuruGuncelleIcerigi"+ID).val();
  var yayinSuresi = $('#duyuruGuncelleYayinSuresi'+ID).val();
  if(yayinSuresi == "Sürekli yayında kalsın"){
    yayinSuresi = 'NULL';
  }

  if(baslik=="" || icerik ==""){
      $("#duyuruGuncelleleMesaj"+ID).text("Lütfen Bütün Alanları Doldurun!");
    $("#duyuruGuncelleleMesaj"+ID).show();
  }
  else{

    
   var dataString = 'baslik='+ baslik + '&icerik='+ icerik + '&yayinSuresi='+ yayinSuresi + '&ID='+ ID;


    $.ajax({
          type: "POST",
          url: "duyuruGuncelle.php",
          data: dataString,
          cache: false,
          beforeSend: function() { $('#loading_duyuru_guncelle'+ID).show(); },
           complete: function() { $('#loading_duyuru_guncelle'+ID).hide(); },
            success: function() {
           $("#duyuruGuncelleDiv"+ID).find(".label-danger").addClass("label-success").removeClass("label-danger");

            $("#duyuruGuncelleleMesaj"+ID).text("Duyuru Güncellendi.");
            $("#duyuruGuncelleleMesaj"+ID).show();

            
              setTimeout(function() {
              $("#duyuruGuncelleleMesaj").hide();  // mesajın gizlenmesi
              $('#duyuru'+ID).modal('hide'); // modalin kapanması

               }, 2500);

              setTimeout(function() {
            
                 $("#duyurular_page").load("duyurular.php"); // tablo yeniden yüklenmesi!.

               }, 2600);
             },
            error: function() {
              $("#duyuruGuncelleleMesaj").text("Bi' şeyler ters gitti..");
            }
    });






  }  // içerik else

 
});
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


    var linkOlustur = "<br><br>Ek : <a style=\"color:#428bca\" href=\""+link+"\" target=\"_blank\">"+linkAdi+"</a>";

    var mesaj =$("#duyuruIcerigi").val();

    var yeniMesaj = mesaj + linkOlustur;

    $('#duyuruIcerigi').val(yeniMesaj);
    $('#duyuruLinkiAdi').val("");  
    $('#duyuruLinki').val("");
    }
});


