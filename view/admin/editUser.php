<div class="addRecipe">
    <h1>Ajouter une recette</h1>
</div>
<div class="field button">
    <a href="index.php?controller=user&task=showUsers">
        <input type="submit" value="retour">
    </a>
</div>
<form method="POST" action="index.php?controller=user&task=editUser&id=<?= $userInfo['id_user']; ?>">
    <div class="contact-input">

        <div class="add-titre">

            <label for="edit_fname">Prénom</label>
            <input name="edit_fname" value="<?= $userInfo['fname'] ?>" require>

            <label for="edit_lname">Nom</label>
            <input name="edit_lname" value="<?= $userInfo['lname'] ?>" require>

            <label for="edit_email">Email</label>
            <input type="email" name="edit_email" value="<?= $userInfo['email'] ?>" require>

            <label for="edit_adress">Adresse</label>
            <input name="edit_adress" value="<?= $userInfo['adress'] ?>" require>

            <label for="edit_city">Ville</label>
            <input name="edit_city" value="<?= $userInfo['city'] ?>" require>

            <label for="edit_zip_code">Code Postal</label>
            <input name="edit_zip_code" value="<?= $userInfo['zip_code'] ?>" require>

            <div class="add-category">
                <label for="edit_role">Catégorie:</label>
                <select id="category" name="edit_role">
                    <option value="2" selected>Utilisateur</option>
                    <option value="1">Admin</option>
                </select>
            </div>

        </div>

        <div class="field button">
            <input name="add_book" type="submit" value="Modifier" onclick="return window.confirm('Êtes vous sûr de vouloir enregistrer ces modifications ?')">
        </div>

    </div>
</form>