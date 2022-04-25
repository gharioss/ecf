<div class="addRecipe">
    <h1>Ajouter une recette</h1>
</div>
<div class="field button">
    <a href="index.php?controller=user&task=showUsers">
        <input type="submit" value="retour">
    </a>
</div>
<form method="POST" action="index.php?controller=articles&task=editThisArticle&id=<?= $detailArticles[0]['id_article']; ?>">
    <div class="contact-input">

        <div class="add-titre">

            <img class="list_image" src="<?= $detailArticles[0]['img']; ?>" />


            <label for="article_edit_title">Titre</label>
            <input name="article_edit_title" value="<?= $detailArticles[0]['title']  ?>" require>

            <label for="article_edit_lname">Nom</label>
            <input name="article_edit_lname" value="<?= $detailArticles[0]['lname']  ?>" require>

            <label for="article_edit_fname">Prénom</label>
            <input name="article_edit_fname" value="<?= $detailArticles[0]['fname']  ?>" require>

            <p>Date d'enregistrement : <?= $detailArticles[0]['date_put'] ?></p>


            <div class="contact-input">

                <div class="add-titre">
                    <fieldset>
                        <legend>Choisissez les tags : </legend>

                        <div>


                            <?php foreach ($allTags as $tags) : ?>
                                <input type="checkbox" name="chkl[ ]" value="<?= $tags['id_tags']; ?>">
                                <label for="scales"><?= $tags['tags']; ?></label>

                            <?php endforeach; ?>

                        </div>

                    </fieldset>
                </div>
            </div>


            <!-- ?php for ($i = 0; $i < sizeof($detailArticles); $i++) : ?>
                ?php if ($tags['tags'] != $detailArticles[$i]['tags']) : ?>

                    <input type="checkbox1" name="chkl[ ]" value="?= $tags['id_tags']; ?>">
                    <label for="scales">?= $tags['tags']; ?></label>
                ?php else : ?>

                    <input type="checkbox1" name="chkl[ ]" value="?= $tags['id_tags']; ?>" checked>
                    <label for="scales">?= $tags['tags']; ?></label>

                ?php endif; ?>

            ?php endfor; ?> -->

            <label for="article_edit_content">Contenu</label>
            <textarea name="article_edit_content" rows="5" require><?= $detailArticles[0]['content']; ?></textarea>

            <label for="article_edit_edition">Contenu</label>
            <input name="article_edit_edition" value="<?= $detailArticles[0]['edition']; ?>" require>

            <label for="article_edit_collection">Contenu</label>
            <input name="article_edit_collection" value="<?= $detailArticles[0]['collection']; ?>" require>

            <div class="add-category">
                <label for="add_category">Catégorie:</label>
                <select id="category" name="add_category">
                    <option value="4" selected>Roman</option>
                    <option value="5">Bande Dessinée</option>
                    <option value="6">Magasine</option>
                    <option value="7">Manga</option>
                </select>
            </div>

        </div>

        <div class="field button">
            <input name="add_book" type="submit" value="Modifier" onclick="return window.confirm('Êtes vous sûr de vouloir enregistrer ces modifications ?')">
        </div>

    </div>
</form>