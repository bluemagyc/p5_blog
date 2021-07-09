<?php foreach($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?>

<h2>
    <a href="<?= $post->getURL() ?>"><?= $post->titre; ?></a>
</h2>

<p><?= $post->getExcerpt(); ?></p>







<?php endforeach; ?>