<div id="menu">

    <?php
        if (!is_null($_SESSION['user'])){
            echo "        
            <div id='menuLog'>
                <a href='index.php?ctrl=addLink'>
                    <div id='addLink'>
                        <i class='fas fa-plus-square'></i>
                        <p>Ajouter un lien</p>
                    </div>
                    <div>
                        <a href='index.php?ctrl=account'>
                        <i class='fas fa-portrait'></i>
                        </a>
                    </div>
                </a>
                </div>
            ";
        }
        else {
            echo "
            <div id='form'>
                <form action='index.php?ctrl=form&action=login'>
                    <div>
                    <label for='mail'>Mail</label>
                    <input type='email' id='mail' required>
                    </div>
                    <div>
                    <label for='pass'>Password</label>
                    <input type='password' id='pass' required>
                    </div>        
                    <input type='submit' value='Valider'>
                </form>
            </div> 
            ";
        }
    ?>


</div>
