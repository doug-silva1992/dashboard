<?php
    $root = "../";
    $title = "Update";

    include($root.'head.php');
    include($root.'src/dados.php');

    $condicao = ' id = ' . $_GET['id'];
    $dados = new dados();
    $search = $dados->search("postagens", $condicao);
    $tema = $dados->search("tema_post");
   
?>
<main>
    <div class="container">
        <hr>
        <form name="frm" action="update.php" onsubmit="return formulario()">
            <input type="hidden" name="funcao" value="update">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <div class="mb-3">
                <label for="" class="form-label">Banner:</label>
                <input class="form-control" type="file" name="banner" value="<?=$search[0]['imagem']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">T&iacute;tulo:</label>
                <input type="text" class="form-control" name="titulo" value="<?=$search[0]['titulo']?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tipo de Postagem:</label>
                <select class="form-select" name="tipo_postagem" size="3">
                    <?php 
                    foreach($tema as &$value){ 
                        echo '<option value="'.$value['id'].'">' . $value['tema'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Resumo:</label>
                <textarea class="form-control" name="resumo" rows="2"><?=$search[0]['resumo']?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Texto:</label>
                <textarea class="form-control" name="texto" rows="10"><?=$search[0]['texto']?></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
</main>
<?php 
    include($root.'footer.php');
?>