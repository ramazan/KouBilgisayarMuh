<?php
   
   include_once 'dbbaglantisi.php';    #Database bilgileri burdan alınıyor.
   
   session_start();
   
   $user_check = $_SESSION['login_user_email'];
   
   $ses_sql = mysqli_query($con,"select ID,NAME,ROLE from users where EMAIL = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
      
   #Kayıtlı Kullanıcı sayısı için  sorgu calistiriyorum. 
   $kullaniciSayi_sql = mysqli_query($con,"select COUNT(*) from users");
   #Tablodan donen kullanici sayısı
   $count = mysqli_fetch_array($kullaniciSayi_sql,MYSQLI_ASSOC);
   
//   $login_session_email = $row['EMAIL'];   #giriş yapan kullanıcının mailini sesion'a atıyorum.
   $login_session_user_id = $row['ID'];   #giriş yapan kullanıcının mailini sesion'a atıyorum.
   $login_session_name  = $row['NAME'];    #giriş yapan kullanıcının adını sesion'a atıyorum.
   $login_session_role  = $row['ROLE'];    #giriş yapan kullanıcının rolünü panel yetkilendirmesi için sesion'a atıyorum.
   $kullanici_sayisi = $count['COUNT(*)']; #Kayıtlı Kullanıcı sayısını değişkene atama yapıyorum. 


   # eğer sessiondaki kullanıcı mail alanı boş ise giris sayfasına yönlendir.
   if(!isset($_SESSION['login_user_email'])){
   	echo "Bu sayfayı görüntüleme yetkiniz yoktur!";
      header("location:./giris.php");
   }
?>