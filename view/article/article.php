<?= $article[0]['fname'] . ' ' . $article[0]['lname']; ?>
<img src="<?= $article[0]['img']; ?>" />
<p><?= $article[0]['content'] ?></p>

<?php if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['is_logged'])) : ?>
    <a href="index.php?controller=articles&task=getBook&id=<?= $article[0]['id_article']; ?>" onclick="return window.confirm('Êtes vous sûr de vouloir réserver ce livre ?')">
        Reserver
    </a>
<?php endif; ?>