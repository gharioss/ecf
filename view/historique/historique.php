<?php include "view/account.php"; ?>
<article class="historique">
    <?php foreach ($emprunt as $e) :  ?>
        <div class="list_historique">
            <a href="index.php?controller=articles&task=show&id=<?= $e['id_article']; ?>">
                <img src="<?= $e['img'] ?>" />
                <p><?= $e['fname']; ?></p>
            </a>
        </div>
    <?php endforeach; ?>
</article>