<div id="passChg">
    <form action="index.php?ctrl=form&action=passwordMod" method="post">
        <div id="oldPass" class="space-between margin-bottom">
            <label for="old">Ancien mot de passe</label>
            <input type="password" name="old" id="old">
        </div>
        <div id="newPass" class="space-between  margin-bottom">
            <label for="new">Nouveau mot de passe</label>
            <input type="password" name="new" id="new">
        </div>
        <div id="verifPass" class="space-between  margin-bottom">
            <label for="verif">Verification du nouveau mot de passe</label>
            <input type="password" name="verif" id="verif">
        </div>
        <div id="submit" class="flex-end">
            <input type="submit" value="Valider">
        </div>
    </form>
</div>
