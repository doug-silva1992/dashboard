<?php

class Dados{
    public function Connection(){
        $conn = new PDO("mysql:dbname=portfolio; host=127.0.0.1", "doug", "20584625D_s");

        if (!$conn){
            echo '<p>Falha ao efetuar a conex&atilde;o</p>';
            exit();

        }else{
            return $conn;
        }
    }

    public function formatar_data($data){
        $dia = date("j", strtotime($data));

        $meses = array(
            "January" => "Janeiro",
            "February" => "Fevereiro",
            "March" => "Março",
            "April" => "Abril",
            "May" => "Maio",
            "June" => "Junho",
            "July" => "Julho",
            "August" => "Agosto",
            "September" => "Setembro",
            "October" => "Outubro",
            "November" => "Novembro",
            "December" => "Dezembro",
        );

        $mes = $meses[date("F", strtotime($data))]; 

        $ano = date("Y", strtotime($data));

        return "$mes $dia, $ano";
    }

    public function search($tabela, $condicao = "1=1"){
        $conn = $this->Connection();

        $stmt = $conn->prepare("SELECT * FROM $tabela WHERE $condicao");
        $stmt->execute();

        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function insert_post($tabela, $banner, $titulo, $tipo_postagem, $resumo, $texto){
        $data = 'CAST(\''.date("Y-m-d").'\' AS datetime)';
        $conn = $this->Connection();

        $stmt = $conn->prepare("INSERT INTO $tabela (imagem, titulo, fk_tipo, resumo, texto, data) VALUES ('$banner', '$titulo', $tipo_postagem, '$resumo', '$texto', $data)");
        $res = $stmt->execute();

        if(!$res){
            $ret = false;
        }else{
            $ret = true;
        }

        return $ret;
    }

    public function update_post($tabela, $id ,$banner, $titulo, $tipo_postagem, $resumo, $texto){
        $data = 'CAST(\''.date("Y-m-d").'\' AS datetime)';
        $conn = $this->Connection();

        $stmt = $conn->prepare("INSERT INTO $tabela (imagem, titulo, fk_tipo, resumo, texto, data) VALUES ('$banner', '$titulo', $tipo_postagem, '$resumo', '$texto', $data)");
        $res = $stmt->execute();

        if(!$res){
            $ret = false;
        }else{
            $ret = true;
        }

        return $ret;
    }

    public function delete_post($tabela, $id){
        $conn = $this->Connection();

        $stmt = $conn->prepare("DELETE FROM $tabela WHERE id = $id");
        $res = $stmt->execute();

        if(!$res){
            $ret = false;
        }else{
            $ret = true;
        }

        return $ret;
    }
}

