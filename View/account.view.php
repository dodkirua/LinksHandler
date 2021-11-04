<div id="account">
    <div id="accountHead">
        <div id="accountId">
            <div>Nom : <?=$_SESSION['user']['name'] ?></div>
            <div>Prénom : <?=$_SESSION['user']['surname'] ?></div>
            <div>Mail : <?=$_SESSION['user']['mail'] ?></div>
            <div>
                <form action="index.php?ctrl=UserInfoMod">
                    <input type="submit" value="Modifier les informations">
                </form>
            </div>
            <div>
                <form action="index.php?ctrl=passwordMod">
                    <input type="submit" value="Modifier le password ">
                </form>
            </div>
        </div>
    </div>
    <div id="accountBody">

    </div>
</div>
