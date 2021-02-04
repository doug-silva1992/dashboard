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
            <h2 class="blog-post-title"><a herf="#"><?=$value['titulo']?></a>
                <a href="javascript:void(0);" onclick="deletarPost('postagens', <?=$value['id']?>)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                    </svg>
                </a>
            </h2>
            <p class="blog-post-meta"><?=$data?> por <a href="#">Douglas</a></p>
            <p><?=$value['resumo']?></p>
    <?php } ?>
    </div>
</main> 
<?php 
    include($root . 'footer.php');
?>