<div id="addLink" class="border">
    <form action="index.php?ctrl=form&action=addLink" method="post" class="padding">
        <div class="margin-bottom">
            <label for="href">Le lien du site</label>
            <input type="text" name="href" id="href">
        </div>
        <div class="margin-bottom">
            <label for="title">le title</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="margin-bottom">
            <label for="target">Ouvrir le lien dans </label>
            <select name="target" id="target">
                <option value="_blank">un nouvel onglet</option>
                <option value="_self">le même onglet</option>
            </select>
        </div>
        <div  class="margin-bottom">
            <label for="name">Nom du lien</label>
            <input type="text" name="name" id="name">
        </div>
        <input type="submit" value="Valider">

    </form>
</div>