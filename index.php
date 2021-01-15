<?php


// Quindi, dopo aver studiato le slide di oggi, vorrei che definiste una classe PHP che modella il concetto di una "Stanza di Hotel"; oltre a definire almeno 3 proprieta' distinte, vorrei che implementaste un costruttore che assegna un valore ad almeno una di queste proprieta', a vostro piacimento. Infine, implementate anche una funzione che, quando invocata sull'oggetto, stampi il contenuto di tutte le sue proprieta' ( concatenate i valori per formare una stringa ). Testate il tutto creando qualche istanza e invocando l'unica funzione che avete scritto.




class HotelRoom {
    public $beds;
    public $style;
    public $isFree;
    function __construct($beds,$style, $isFree = "si"){
        $this->beds = $beds;
        $this->style = $style;
        $this->isFree = $isFree;
    }
    public function printAll()
    {
        foreach ($this as $key => $value) {
            print "$key => $value \n";
            print "<br>";
        }
    }
}


$room = new HotelRoom(4,"suite","yes");
$room2 = new HotelRoom(2,"standard","yes");
$room3 = new HotelRoom(9,"suite");

$room->printAll()


?>