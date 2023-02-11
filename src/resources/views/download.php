<?php
 require_once('../../conf.php'); 

define('extintion_path','jpej');
if($_POST){
if ( isset($_POST['submit']) && !empty($_POST['submit'])){
  if((0)){
  header("Content-type: image/".$extintion_path);
  header("Content-Disposition: attachment;"." filename=unknown.".$extintion_path);
  readfile('images.'.$extintion_path);
}
else{
  echo "your backage already is finshed ".$test;
}
}

}
?>