

<?php

    // CLASES: ES UNA PLANTILLA QUE SE UTILIZA PARA CREAR OBJETOS
    //HERENCIA: ESUNA CARACTERISTICA  DE LOS LENGUAJES ORIENTADOS A OBJETOS.
    //QUE LE PERMITE A UNA CLASE HEREDAR LOS MIENBROS DE LA OTRA MEDIANTE LA PALABRA extends
    // ORIENTADA A OBJETOS: MODELO DE LENGUAJE CONSTITUIDO POR DATOS Y FUNCIONES.

    class Humano{
        static $cadena;
        public $nombre;
        public $colorPiel;
        public $pelo;
        public $altura;

        public function saludar(string $nom, string $col, string $pel, string $alt){
            $this->nombre = $nom;
            $this->colorPiel = $col;
            $this->pelo = $pel;
            $this->altura = $alt;
            self::$cadena = (string) <<<FIN
            Hola soy {$this->nombre} mido unos {$this->altura}
            el estado de mi pelo es {$this->pelo} y mi piel es de color
            {$this->colorPiel}
FIN;
            return self::$cadena;
        }
        public function saludarMaquina(){
            self::$cadena = (string) <<<FIN
            Hola {$this->nombre} soy la clase Humano como estas
FIN;
            return self::$cadena;
        }
    }

    class Hijo extends Humano{

        public function saludarHijo(string $nom, float $alt){
            $this->nombre = $nom;
            $this->altura = $alt;
            self::$cadena = (string) <<<FIN
            Hola soy {$this->nombre} mido unos {$this->altura}
            el estado de mi pelo es {$this->pelo} y mi piel es de color
            {$this->colorPiel}
FIN;
            return self::$cadena;
        }
    }


    $obj = new Hijo();
    $data = (array) [
        (array) [
            "Thomas Alejandro Perez", 
            "Trigeño", 
            "Liso y negro", 
            1.83
        ],
        (array) [
            "Juan Diego Gonzalez",
            1.70
        ]
    ];

    print_r(call_user_func_array(array($obj, "saludar"), $data[0]));
    print_r($obj->saludar("Thomas Alejandro Perez Rojas", "Trigeño", "Liso y negro", 1.87));
    print_r([$obj, "saludar"]("Thomas Alejandro Perez Rojas", "Trigeño", "Liso y negro", 1.87));
    echo "<br>";
    print_r(call_user_func_array(array($obj, "saludarHijo"), $data[1]));
    print_r($obj->saludarHijo("Juan Diego Gonzalez", 1.70));
    print_r([$obj, "saludarHijo"]("Juan Diego Gonzaleza", 1.70));

    


    

?>