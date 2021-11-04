<div id="userInfoMod">
    <form action="index.php?ctrl=form&action=UserInfoMod" method="post">
        <div id="nameDiv">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" value="<?=$_SESSION['user']['name'] ?>">
        </div>
        <div id="surnameDiv">
            <label for="surname">Prénom :</label>
            <input type="text" id="surname" name="surname" value="<?=$_SESSION['user']['surname']?> ">
        </div>
        <div id="submit">
            <input type="submit" value="Valider">
        </div>
    </form>
</div>
<div id="userMailMod">
    <form action="index.php?ctrl=form&action=UserMailMod" method="post">
        <div id="mailDiv">
            <label for="mail">Mail :</label>
            <input type="text" id="mail" name="mail" value="<?=$_SESSION['user']['mail'] ?>">
        </div>

        <div id="submit">
            <input type="submit" value="Valider">
        </div>
    </form>
</div>