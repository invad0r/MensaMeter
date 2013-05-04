</div>
<div id="footer" data-role="footer" data-position="fixed">
    <div data-role="navbar" data-iconpos="top" >
        <ul id="navi">
            <?php if (Session::get('loggedIn') == false): ?>
                <li><a href="<?php echo URL ?>index" data-icon="grid">Index</a></li>

            <?php endif; ?>
            <li><a href="<?php echo URL ?>mensa" data-icon="home">Mensen</a></li>
            <!--<li><a href="<?php echo URL ?>help" data-icon="home">Help</a></li>-->
            <?php if (Session::get('loggedIn') == true): ?>
                <li><a href="<?php echo URL ?>dashboard" data-icon="star">Dashboard</a></li>

                <?php if (Session::get('role') == 'owner'): ?>
                    <li><a href="<?php echo URL ?>user" data-icon="star">User</a></li>
                <?php endif; ?>

                <li><a href="<?php echo URL ?>dashboard/logout" data-icon="star">LogOut</a></li>
            <?php else: ?>
                <li><a href="<?php echo URL ?>logIn" data-icon="star">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
</body>
</html>