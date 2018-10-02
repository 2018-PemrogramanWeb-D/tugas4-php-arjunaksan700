<?php
 session_start();

 $user = strtoupper($_POST['user']);
 $pass = md5($_POST['pass']);

 // menentukan user yang bisa login
 $valid_user = 'DEMO';
 $valid_pass = md5(1234);

 if(!empty($user) and !empty($pass)){
  if($user == $valid_user and $pass == $valid_pass){
   $_SESSION['login'] = true;
   $_SESSION['user'] = $user;

   header('Location: home.php');
  }else{
   header('Location: index.php?p=username dan password anda salah');
  }
 }else{
  header('Location: index.php?p=username dan password tidak boleh kosong');
 }
?>