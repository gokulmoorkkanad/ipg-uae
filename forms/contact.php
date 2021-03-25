<?php
 
  $to = 'gokulmoorkkanad@gmail.com';
  $subject=  'from website ipg uae';
  $msg= $_POST['message'];
  $head="From:gokulmoorkkanad@yahoo.com";
  if(mail($to,$subject,$msg,$head))
  {
    echo "success";

  } 
  else
  {
    echo "Eroor";
  } 

?>
