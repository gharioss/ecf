<div class="table">
    <h1>Administration</h1>
    <div class="field button">
        <a href="index.php?controller=user&task=showUsers">
            <input type="submit" value="retour">
        </a>
    </div>
    <table>
        <tr>
            <th>IMAGE</th>
            <th>TITRE</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>COLLECTION</th>
            <th>EDITION</th>
            <th>ACTIONS</th>
        </tr>
        <?php foreach ($articles as $article) : ?>
            <tr>
                <td><img class="list_img" src="<?= $article['img'] ?>" /></td>
                <td><?= $article['title'] ?></td>
                <td><?= $article['lname'] ?></td>
                <td><?= $article['fname'] ?></td>
                <td><?= $article['collection'] ?></td>
                <td><?= $article['edition'] ?></td>
                <td>
                    <a href="index.php?controller=articles&task=detailArticle&id=<?= $article['id_article']; ?>">
                        <input type="submit" class="btnUpdate" value="Modifier">
                    </a>
                    <a href="index.php?controller=articles&task=deleteArticle&id=<?= $article['id_article']; ?>" onclick="return window.confirm('Êtes vous sûr de vouloir supprimer ce livre ?')">
                        <input name="btnDelete" type="submit" class="btnDelete" value="Supprimer">
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>