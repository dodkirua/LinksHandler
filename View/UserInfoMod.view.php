<div id="userMod">
    <div id="userInfoMod" class=" margin-bottom border padding">
        <form action="index.php?ctrl=form&action=UserInfoMod" method="post">
            <div id="nameDiv" class="space-between  margin-bottom">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" value="<?=$_SESSION['user']['name'] ?>">
            </div>
            <div id="surnameDiv" class="space-between margin-bottom">
                <label for="surname">Prénom :</label>
                <input type="text" id="surname" name="surname" value="<?=$_SESSION['user']['surname']?> ">
            </div>
            <div id="submit" class="flex-end">
                <input type="submit" value="Valider">
            </div>
        </form>
    </div>
    <div id="userMailMod" class="border padding">
        <form action="index.php?ctrl=form&action=UserMailMod" method="post">
            <div id="mailDiv" class="space-between  margin-bottom">
                <label for="mail">Mail :</label>
                <input type="text" id="mail" name="mail" value="<?=$_SESSION['user']['mail'] ?>">
            </div>

            <div id="submit" class="flex-end">
                <input type="submit" value="Valider">
            </div>
        </form>
    </div>
</div>
