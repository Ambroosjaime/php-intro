
<pre>
    <?php
// 1) Array
//Een array is een speciale variabele die meer dan één waarde per keer kan bevatten.
$firstName = array("jaime");
echo print_r($firstName);
echo '<br>';

// )PHP Associatieve reeksen
//Associative arrays zijn arrays die de named keys gebruiken die u aan hen toewijst.
//Er zijn twee manieren om een ​​associatieve array te maken: 
$fullName = array(
    "firstname" => "jaime",
    "lastname" => "ambroos", 
);
echo print_r($fullName);
echo'<br>';



// 1)PHP-object
//Een object is een gegevenstype dat gegevens en informatie opslaat over het verwerken van die gegevens.
class name {
    function name() {
        $this->name = "jaime";
    }
}
echo'<br>';
echo'<br>';

$family = new name();
echo $family->name;
echo'<br>';



//2.Write a for-loop that adds an item to all of the above.
for ($i = 0; $i<1; $i++ ){

    $firstName[] = "Daniel";
    print_r($firstName);
    echo '<br>';

    $fullName["middelname"] = 'DANIEL';
    print_r($fullName);
    echo'<br>';

    $family->secondname = Daniel;
    print_r($family);
    echo'<br>';

}
echo'<br>';

?>
<pre>
