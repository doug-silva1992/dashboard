<?php
namespace geral;

Class Dados
{
    public function Connection()
    {
        $conn = new PDO("mysql:dbname=portfolio;host=10.0.2.15", "doug", "20584625D_s");

        if (!$conn)
        {
            echo '<p>Falha ao efetuar a conex&atilde;o</p>';
            exit();
        }else{  
            return $conn;
        }
    }
}

?>