<?php 

echo __FILE__  . "<br>";

echo __LINE__ . "<br>";

echo __DIR__ . "<br>";

if(file_exists(__DIR__)){
  echo "yes <br>";
}

if(is_file(__FILE__)){
  echo "yes <br>";
} else {
	echo "no";
}

if(is_dir(__FILE__)){
  echo "yes <br>";
} else {
	echo "no";
}

echo file_exists(__FILE__) ? "yes" : "no";

 ?>