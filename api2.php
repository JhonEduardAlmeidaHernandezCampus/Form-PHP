<?php

    class olla {

        //Clases publicas
        public $lugares;

        //Clases privadas
        private $merca;

        //Constructor: hace la funcion que se le ordena 
        public function __construct(){

        }

        public function setLugar():void {
            $arg = (object) func_get_arg(); //Guarda todos los datos que se le pasen en un array
            $this->lugares = $p1;
        }

        public function getLugar():string {
            return $this->lugares; //Retorna los datos que hay en el array
        }

        //Destructor: Destruye la clase instantaneamente
        public function __destruct(){
            __CLASS__; //Finaliza la clase 
        }
    }

    setLugar("jhon");

    $obj = new olla();

    //Opcion 1 para retornar de un array a un objeto 
    /* function olla(){
        $lista = func_get_args();
        $arg = array_combine(["nombre", "edad", "hijos", "grupo"], $lista);
        var_dump(json_encode($arg));

    }
    olla("Jhon", 1 , 4, [1 , 4]); */

    //Opcion 2 para retornar de un array a un objeto 
    /* function olla(){
        $lista = func_get_args();
        $lista = (object) array_pop($lista);
        var_dump(json_encode($lista));

    }
    olla(["nombre"=>"Jhon", "apellido"=>"Almeida"]); */


?>