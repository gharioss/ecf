<div class="addRecipe">
    <h1>Ajouter une recette</h1>
</div>
<div class="field button">
    <a href="index.php?controller=user&task=showUsers">
        <input type="submit" value="retour">
    </a>
</div>
<form method="POST" action="index.php?controller=articles&task=addRecipe" enctype='multipart/form-data'>
    <div class="contact-input">

        <div class="add-titre">

            <label for="add_fname">Prénom</label>
            <input name="add_fname" require>

            <label for="add_lname">Nom</label>
            <input name="add_lname" require>

        </div>

        <div class="add-titre">

            <label for="add_title">Titre</label>
            <input name="add_title" require>

        </div>


        <div class="add-img">
            <label for="add_image">Couverture</label>
            <input type="file" name="add_image" require>
        </div>

        <div class="add-contenu">
            <label for="add_contenu">Contenu</label>
            <textarea name="add_contenu" rows="10" require></textarea>
        </div>

        <div class="add-category">
            <label for="add_category">Catégorie:</label>
            <select id="category" name="add_category">
                <option value="4" selected>Roman</option>
                <option value="5">Bande Dessinée</option>
                <option value="6">Magasine</option>
                <option value="7">Manga</option>
            </select>
        </div>

        <div class="add-titre">
            <label for="add_collection">Collection</label>
            <input name="add_collection" collectionrequire>

            <label for="add_edition">Edition</label>
            <input name="add_edition" require>
        </div>


        <div class="field button">
            <input name="add_book" type="submit" value="Créer" onclick="return window.confirm('Êtes vous sûr de vouloir enregistrer ces données ?')">
        </div>
    </div>
</form>