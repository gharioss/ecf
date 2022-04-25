<?php include "view/account.php"; ?>
<article class="articles">
    <?php foreach ($emprunt as $e) :  ?>
        <div class="list_roman">
            <a href="index.php?controller=articles&task=show&id=<?= $e['id_article']; ?>">
                <img src="<?= $e['img'] ?>" />
                <p><?= $e['fname']; ?></p>
            </a>
            <p><?= $e['status']; ?></p>
            <a href="index.php?controller=pret&task=returnThis&id=<?= $e['id_article']; ?>" onclick="return window.confirm('Êtes vous sûr de vouloir rendre ce livre ?')">Rendre ce livre ?</a>
        </div>
    <?php endforeach; ?>
</article>