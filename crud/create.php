<?php
    $root = "../";
    $title = "Create";

    include($root.'head.php');
    include($root.'src/dados.php');

    $dados = new dados();
    $search = $dados->search("tema_post");

?>
<main>
    <div class="container">
        <hr>
        <form name="frm" action="create.php" onsubmit=" return formulario()">
            <input type="hidden" name="funcao" value="insert_post">
            <div class="mb-3">
                <label class="form-label">Banner:</label>
                <input class="form-control" type="file" name="banner" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">T&iacute;tulo:</label>
                <input class="form-control" type="text" name="titulo" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo de Postagem:</label>
                <select class="form-select" name="tipo_postagem" size="3">
                    <?php foreach($search as &$value){ 
                        echo '<option value="' . $value['id'] . '">' . $value['tema'] . '</option>';
                     } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Resumo:</label>
                <textarea class="form-control" name="resumo" rows="2"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Texto:</label>
                <textarea class="form-control" name="texto" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <!--<button type="submit" class="btn btn-primary">Salvar</button>-->
                <input type="submit" name="Salvar" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
</main>
<?php 
    include($root . 'footer.php');
?>