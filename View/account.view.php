<div id="account">
    <div id="accountHead">
        <div id="accountId">
            <div><span>Nom : </span><span><?=$_SESSION['user']['name'] ?></span></div>
            <div><span>Prénom : </span><span><?=$_SESSION['user']['surname'] ?></span></div>
            <div><span>Mail : </span><span><?=$_SESSION['user']['mail'] ?></span></div>
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
