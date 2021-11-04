<div id="passChg">
    <form action="index.php?ctrl=form&action=passwordMod" method="post">
        <div id="oldPass">
            <label for="old">Ancien mot de passe</label>
            <input type="password" name="old" id="old">
        </div>
        <div id="newPass">
            <label for="new">Nouveau mot de passe</label>
            <input type="password" name="new" id="new">
        </div>
        <div id="verifPass">
            <label for="verif">Verification du nouveau mot de passe</label>
            <input type="password" name="verif" id="verif">
        </div>
        <div id="submit">
            <input type="submit" value="Valider">
        </div>
    </form>
</div>
