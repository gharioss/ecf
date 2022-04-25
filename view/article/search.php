<?php if (!isset($thisSearch[0])) : ?>
    <h1>Il n'y a pas de résultat</h1>
<?php endif; ?>
<div>
    <?php foreach ($thisSearch as $search) : ?>
        <div class="search_div">
            <a href="index.php?controller=articles&task=show&id=<?= $search['id_article']; ?>">
                <img src="<?= $search['img']; ?>" />
            </a>
            <p><?= $search['fname'] . ' ' . $search['lname']; ?></p>
            <p><?= $search['content']; ?></p>
        </div>
    <?php endforeach; ?>
</div>