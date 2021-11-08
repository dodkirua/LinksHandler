<div id="menu" class="borderRed">

    <?php
        if (isset($_SESSION['user']) && !is_null($_SESSION['user'])){
            echo " 
                <div id='menuLink'> 
                    <a href='index.php'>
                    <p>Accueil</p>
                    </a>
                    <a href='index.php?ctrl=addLink'>                    
                        <i class='fas fa-plus-square'></i>
                        <p>Ajouter un lien</p>                    
                    </a>
                </div>
                <div id='menuAccount'>             
                    <a href='index.php?ctrl=account'>
                        <i class='fas fa-portrait'></i>
                    </a>
                       
                    <a href='index.php?ctrl=form&action=disconnect'>
                        <i class='far fa-times-circle'></i>
                    </a>
                </div>                       
            ";
        }
        else {
            echo "
            <div id='formConnect'>
                <form action='index.php?ctrl=form&action=connect' method='post'>
                    <div>
                    <label for='mail'>Mail</label>
                    <input type='email' id='mail' name='mail' required>
                    </div>
                    <div>
                    <label for='pass'>Password</label>
                    <input type='password' id='pass' required name='pass'>
                    </div>        
                    <input type='submit' value='Valider'>
                </form>
            </div> 
            ";
        }
    ?>


</div>
