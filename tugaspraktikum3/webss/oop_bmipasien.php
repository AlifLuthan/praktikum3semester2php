<?php
class oopbmi {
    public $berat_badan;
    public $konvers; 

    function __construct( $berat_badan , $konvers)
    {
        $this->berat = $berat_badan;
        $this->konvers = $konvers;
    }

    function bmi()
    {
        return ($this->berat) / ($this->konvers * 2 );
    }

    function statusbmiaja()
    {
        if (($this->berat) / ($this->konvers * 2 ) >= 30.0 ){
            return "Kegemukan (Obesitas)";
        }
        if (($this->berat) / ($this->konvers * 2 ) >= 25.0 ){
            return "Kelebihan Berat Badan";
        }
        if (($this->berat) / ($this->konvers * 2 ) >= 18.0 ){
            return "Normal (Ideal)";
        }
        if (($this->berat) / ($this->konvers * 2 ) >= 0 ){
            return "Kekurangan Berat Badan";
        }
    }

}
?>