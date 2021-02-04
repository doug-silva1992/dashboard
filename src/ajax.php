<?php
include('dados.php');
$dados = new dados();

echo $_POST['funcao']; 

if($_POST['funcao'] == 'insert_post'){
    $caracter = array("Á", "É", "Í", "Ó", "Ú", "á", "é", "í", "ó", "ú", "Â", "Ê", "Ô", "â", "ê", "ô", "À", "à", "Ü", "ü", "Ç", "ç", "Ã", "Õ", "ã", "õ", "Ñ", "ñ", "&", '"', "'", "<", ">");
    $especial = array("&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Acirc;","&Ecirc;","&Ocirc;","&acirc;","&ecirc;","&ocirc;","&Agrave;","&agrave;","&Uuml;","&uuml;","&Ccedil;","&ccedil;","&Atilde;","&Otilde;","&atilde;","&otilde;","&Ntilde;","&ntilde;","\&amp;","\&quot;","\&apos;","\&lt;","\&gt;");

    $titulo  = str_replace($caracter, $especial, $_POST['titulo']);
    $resumo  = str_replace($caracter, $especial, $_POST['resumo']);
    $texto   = str_replace($caracter, $especial, $_POST['texto']);

    $resultado = $dados->insert_post("postagens", $_POST['banner'], $titulo , $_POST['tipo_postagem'], $resumo, $texto);
    echo $resultado == true ? "Post criado com Sucesso" : "Falha ao  criar o post";
}else if($_POST['funcao'] == 'update_post'){
    $resultado = $dados->update_post("postagens", $_POST['banner'], $titulo, $_POST['tipo_postagem'], $resumo, $texto);
    echo $resultado == true ? "Post criado com Sucesso" : "Falha ao  criar o post";
}else if($_POST['funcao'] == 'deletar'){
    $resultado = $dados->delete_post($_POST['tabela'], $_POST['id']);
    echo $resultado == true ? "Post Deletado com Sucesso" : "Falha ao Deletar o post";
}