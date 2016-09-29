//Tall de codi 1, bucle foreach:

<?php
$a = array( 1,1,2,3,5,8,13);
foreach( $a as $v ) {
    echo $v . " ";
}
?>

//Tall de codi 2, blucle for:
<?php
$a = array( 1,1,2,3,5,8,13);
for( $i = 0; $i < count( $a ); $i++ ) {
    echo $a[$i] . " ";
}
?>
