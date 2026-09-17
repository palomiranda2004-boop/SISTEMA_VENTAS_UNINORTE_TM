<?php

    //la clase Producto hereda las funciones de la clase Conectar

    class Producto extends Conectar
    {
        //permite obtener todos los productos de la base de datos 
        public function get_producto(){

        //establece la conexion con la base de datos
            $conectar = parent::conexion();

            //codificacion de caracteres 
            parent::set_names();

            //consulta sql para obtener todos lo productos
            $sql = "SELECT * FROM tm_producto WHERE est = 1";

            //prepara la consulta 
            $sql = $conectar -> prepare($sql);

            $sql = execute();
            
            //se obtiene y retorna todos los registros encontrados 
            $resultado = $sql->fetchAll();

            return $resultado;

        }
    }


?>