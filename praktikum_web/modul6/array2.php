<?php 
  $array1 = array ("Arman","Bayu","Feri");
  echo "array awal ialah:<br />";
  for ($i = 0; $i<count($array1); $i++){
    echo "data ke-".$i." : ".$array1[$i]."<br />";
  }

  array_push($array1, "Herni", "Gita", "Dewi");
  for ($i = 0; $i < count($array1); $i++) {
    echo "data ke-" . $i . " : " . $array1[$i] . "<br />";
}

  array_shift($array1);
  for ($i = 0; $i<count($array1); $i++){
    echo "data ke-".$i." : ".$array1[$i]."<br/>";
  }

  sort($array1);
  for ($i = 0 ; $i<count($array1); $i++){
    echo "data ke-".$i." : ".$array1[$i]."<br/>";
  }
?>