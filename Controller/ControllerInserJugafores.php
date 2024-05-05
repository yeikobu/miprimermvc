<?php
if(empty($_POST['rut'])) { 
  echo "rut vacío"; 
} else { 
  $rut = $_POST['rut'];
}

if(empty($_POST['dv'])) { 
  echo "dv vacío"; 
} else { 
  $dv = $_POST['dv'];
}
?>