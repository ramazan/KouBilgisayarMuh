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