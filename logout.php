<?php
   session_start();
   
   if(session_destroy()) {
   
  echo "<script>location='p.login.php'</script>";
      //header("Location: login.php");
   }
?>