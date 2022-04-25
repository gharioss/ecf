<div class="research_items">


    <fieldset>
        <legend>Rechercher par auteur : </legend>
        <div>
            <form action="index.php?controller=articles&task=specificSearch" method="POST">
                <select id="category" name="id_autheur">
                    <?php foreach ($autheurs as $autheur) : ?>
                        <option value="<?= $autheur['fname']; ?>"><?= $autheur['fname'] . ' ' . $autheur['lname']; ?></option>
                    <?php endforeach; ?>
                </select>
                <button name="search" class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </fieldset>

    <fieldset>
        <legend>Rechercher par collection : </legend>
        <div>
            <form action="index.php?controller=articles&task=specificSearch" method="POST">
                <select id="category" name="id_collection">
                    <?php foreach ($autheurs as $autheur) : ?>
                        <option value="<?= $autheur['collection']; ?>"><?= $autheur['collection']; ?></option>
                    <?php endforeach; ?>
                </select>
                <button name="search" class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </fieldset>

    <fieldset>
        <legend>Rechercher par edition : </legend>
        <div>
            <form action="index.php?controller=articles&task=specificSearch" method="POST">
                <select id="category" name="id_edition">
                    <?php foreach ($autheurs as $autheur) : ?>
                        <option value="<?= $autheur['edition']; ?>"><?= $autheur['edition']; ?></option>
                    <?php endforeach; ?>
                </select>
                <button name="search" class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </fieldset>



    <fieldset>
        <legend>Rechercher par genre : </legend>
        <div>
            <form action="index.php?controller=articles&task=specificSearch" method="POST">
                <select id="category" name="id_category">
                    <?php foreach ($categorys as $category) : ?>
                        <option value="<?= $category['id_category']; ?>"><?= $category['category_name']; ?></option>
                    <?php endforeach; ?>
                </select>
                <button name="search" class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </fieldset>



    <fieldset>
        <legend>Rechercher par genre : </legend>
        <div>
            <form action="index.php?controller=articles&task=specificSearch" method="POST">
                <select id="category" name="id_tags">
                    <?php foreach ($allTags as $tags) : ?>
                        <option value="<?= $tags['id_tags']; ?>"><?= $tags['tags']; ?></option>
                    <?php endforeach; ?>
                </select>
                <button name="search" class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </fieldset>
</div>


<h1>Roman</h1>
<article class="articles">
    <!-- ?php foreach ($articles as $article) : ?> -->
    <?php for ($i = 0; $i <= 5; $i++) : ?>

        <?php if ($articles[$i]['id_category'] === "4") : ?>
            <div id="tata" class="list_roman">
                <a href="index.php?controller=articles&task=show&id=<?= $articles[$i]['id_article']; ?>">
                    <img src="<?= $articles[$i]['img'] ?>" />
                    <p><?= $articles[$i]['fname']; ?></p>
                </a>
            </div>
        <?php endif; ?>
    <?php endfor; ?>
</article>

<h1>Manga</h1>
<article>
    <?php for ($i = 0; $i <= 5; $i++) : ?>
        <?php if ($articles[$i]['id_category'] === "7") : ?>
            <div class="list_manga">
                <a href="index.php?controller=articles&task=show&id=<?= $articles[$i]['id_article']; ?>">
                    <img src="<?= $articles[$i]['img'] ?>" />
                    <p><?= $articles[$i]['fname'] ?></p>
                </a>
            </div>
        <?php endif; ?>
    <?php endfor; ?>
</article>