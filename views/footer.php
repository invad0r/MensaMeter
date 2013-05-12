</div>

<!--TODO:
* data-transition="" evtl noch festlgen
    * habe hier einfach mal slide genommen :)-->
<div id="footer" data-role="footer" data-tap-toggle="false" data-position="fixed">
    <div data-role="navbar" data-iconpos="top" >
        <ul id="navi">
            <?php if (Session::get('loggedIn') == false): ?>
                <li><a href="<?php echo URL ?>index" data-icon="grid" data-transition="slide">Index</a></li>
            <?php endif; ?>
            <li><a href="<?php echo URL ?>mensa" data-icon="search" data-transition="slide">Mensen</a></li>
            <!--<li><a href="<?php echo URL ?>help" data-icon="home">Help</a></li>-->
            <?php if (Session::get('loggedIn') == true): ?>
                <li><a href="<?php echo URL ?>dashboard" data-icon="star" data-transition="slide">Dashboard</a></li>

                <?php if (Session::get('role') == 'owner'): ?>
                    <li><a href="<?php echo URL ?>user" data-icon="home" data-transition="slide">User</a></li>
                <?php endif; ?>

                <li><a href="<?php echo URL ?>dashboard/logout" data-icon="star" data-transition="slide">LogOut</a></li>
            <?php else: ?>
                <li><a href="<?php echo URL ?>login" data-icon="star" data-transition="slide">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
</body>
</html>