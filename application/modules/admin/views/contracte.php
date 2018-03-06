<?php if ( !empty($content) ) //echo $content;
foreach ($content3 as $key => $value) {
  if(is_array($value) && !empty($value)):
    echo "<div class='listcont'><h3>" . $key . ":</h3><ul>";
      foreach ($value as $key2 => $value2) {
        echo "<li>" . $value2 . "</li>";
      }
    echo "</ul></div>";
  else:
  echo "Masina: <br />" . $value . "<br /><br />";
endif;
}


echo "<br />second:";
var_dump($content);

?>
