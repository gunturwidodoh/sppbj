<!-- Query Menu -->
<?php
$role = $this->session->userdata('role');
$queryMenu =   "SELECT `user_menu`.`id`, `menu`
                FROM `user_menu` 
                JOIN `user_access_menu`
                ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                WHERE `user_access_menu`.`role_id` = $role
                ORDER BY `user_access_menu`.`menu_id` ASC                    
                ";
$menu = $this->db->query($queryMenu)->result_array();
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url(); ?>/home" class="brand-link">
        <img src="<?php echo base_url('assets/dist'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Project Tracker</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <?php foreach ($menu as $m) : ?>
                <h2 style="color:white;">
                    <!-- Looping menu dan submenu -->
                    <?= $m['menu']; ?>
                </h2>
                <!-- Query Sub menu -->
                <?php
                $menuId = $m['id'];
                $querySubMenu =     "SELECT *
                                        FROM `user_sub_menu` 
                                        WHERE `user_sub_menu`.`menu_id` = $menuId
                                        AND `is_active` = 1                  
                                    ";
                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>

                <?php foreach ($subMenu as $sm) : ?>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url($sm['url']); ?>" class="nav-link">
                                <?= $sm['title']; ?>
                            </a>
                        </li>
                    </ul>

                <?php endforeach; ?>
            <?php endforeach; ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>