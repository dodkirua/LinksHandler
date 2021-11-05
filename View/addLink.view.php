<div id="addLink">
    <form action="index.php?ctrl=form&action=addLink" method="post">
        <div>
            <label for="href">Le lien du site</label>
            <input type="text" name="href" id="href">
        </div>
        <div>
            <label for="title">le title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="target">Ouvrir le lien dans </label>
            <select name="target" id="target">
                <option value="_blank">un nouvel onglet</option>
                <option value="_self">le même onglet</option>
            </select>
        </div>
        <div>
            <label for="name">Nom du lien</label>
            <input type="text" name="name" id="name">
        </div>
        <input type="submit" value="Valider">

    </form>
</div>