<?php
    $root = "../";
    $title = "Read";

    include($root . 'head.php');
    include($root.'src/dados.php');

    $dados = new dados();
    $search = $dados->search("postagens");
?>
<main>
    <div class="container-sm">
    <?php foreach($search as &$value){ 
        $data = $dados->formatar_data($value['data']);
    ?>
        <article class="blog-post">
            <hr>
            <h2 class="blog-post-title"><a herf="#"><?=$value['titulo']?></a></h2>
            <p class="blog-post-meta"><?=$data?> por <a href="#">Douglas</a></p>
            <p><?=$value['resumo']?></p>
        </article>
    <?php } ?>
    </div>
</main> 
<?php 
    include($root . 'footer.php');
?>