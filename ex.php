 <?php
function division($a){

try{
    if($a<=0){
        throw  new Exception("enter the valid number greater tha  zeroXA");
    }
    $b = 2 / $a; 
    echo "<br>".($b );

}
catch(Exception $d){
    echo $d->getMessage();
}
finally{
    echo "finally";
}
}
division(2);
division(5);



?>