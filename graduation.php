



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <title>graduation</title>
  </head>
  <body>
        





<?php

   $files = glob("graduation/*.*");
   $left = 0;
   $top = 0;

   for ($i=1; $i<count($files); $i++)

  {

  $image = $files[$i];

  echo '<img src="'.$image .'" STYLE="position:absolute; TOP:'.$top .'px; LEFT:'.$left .'px" alt="Random image" />'."<br /><br />";
  $left = $left+ 600;
   }

 ?>




 
  </body>
</html>

