<?php
   session_start();
   
   if(session_destroy()) {
   
  echo "<script>location='index.html'</script>";
      //header("Location: index.html);
   }
?>