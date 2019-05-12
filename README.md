# php-intro

1.Array
Een array is een speciale variabele die meer dan één waarde per keer kan bevatten.

$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


2.Associatieve Array
Associative arrays zijn arrays die de named keys gebruiken die u aan hen toewijst.
Er zijn twee manieren om een ​​associatieve array te maken:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");


3.PHP-object
Een object is een gegevenstype dat gegevens en informatie opslaat over het verwerken van die gegevens.

class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;



