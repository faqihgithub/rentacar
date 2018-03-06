<?php
foreach ($alldata as $key => $value) {
  if(is_array($value) && !empty($value)):
    echo "<h3>Expira " . $key . ":</h3><ul>";
      foreach ($value as $key2 => $value2) {
        echo "<li>" . $value2 . "</li>";
      }
    echo "</ul>";
  else:
  //echo $key . "<br />" . $value . "<br /><br />";
endif;
}

echo "<a href='http://yourcompany.com/management/admin/masini'>Administrare masini</a>";
?>
