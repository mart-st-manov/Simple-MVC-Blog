<div class="menuPanel">
    <div class="menuItems">
        <a href="index.php">Home</a>
        <?php if($_SESSION && $_SESSION['user'] == 'admin') { ?> | <a href="?action=controlPanel">New Article</a><?php } ?>
        <?php if($_SESSION == false) { ?> | <a href="?action=registerPanel">Register</a><?php } ?>
    </div>
    
    <?php if($_SESSION == false) { ?>
    <div class="loginBox">
        <form method="post" action="index.php?action=login" >
            Username: <input type="text" name="username" />
            Password: <input type="password" name="password" />
                      <input type="submit" name="login" value="Login"/>
        </form>
    </div>
    <?php } else { ?>
        <div class="logoutBox">
            <a href="index.php?action=logout"> Exit </a>
        </div>
    <?php } ?>
</div>