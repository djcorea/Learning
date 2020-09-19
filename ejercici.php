<?PHP
$names=array("Dany","Dylan","Lenci","Celio","Valentin");

for ($i=0; $i <5 ; $i++) { 
    # code...
    echo "Storaged Name ".($i+1)." ".$names[$i];
    if (($i+1)%2==0) {
        # code...
        echo "Par";
    }
   // echo "<br>";

}
 
?>
