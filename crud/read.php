<?php
    $root = "../";
    $title = "Read";

    include($root . 'head.php');
?>
<main>
    <div class="container-sm">
    <?php for($i = 0; $i <= 5; $i++){ ?>
        <article class="blog-post">
            <hr>
            <h2 class="blog-post-title">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
            <p>This blog post shows a few different types of content that?s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
            <blockquote>
                <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </article>
    <?php } ?>
    </div>
</main> 
<?php 
    include($root . 'footer.php');
?>