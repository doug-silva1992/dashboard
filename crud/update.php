<?php
    $root = "../";
    $title = "Update";

    include($root.'head.php');
?>
<main>
    <div class="container">
        <hr>
        <form type="POST" action="../index.php">
            <div class="mb-3">
                <label for="" class="form-label">Banner:</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">T&iacute;tulo:</label>
                <input type="text" class="form-control" id="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tipo de Postagem:</label>
                <select class="form-select" size="3">
                    <option value="javascript">Javascript</option>
                    <option value="php">PHP</option>
                    <option value="html">HTML</option>
                    <option value="css">CSS</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Resumo:</label>
                <textarea class="form-control" id="" rows="2"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Texto:</label>
                <textarea class="form-control" id="" rows="10"></textarea>
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