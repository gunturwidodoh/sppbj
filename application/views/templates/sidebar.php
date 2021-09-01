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
    <a href="<?php if ($role == '1') {
                    echo site_url('/home');
                } else if ($role == '2') {
                    echo site_url('/home');
                } else if ($role == '3') {
                    echo site_url('/guest');
                } ?>" class="brand-link">
        <img src="<?php echo base_url('assets/dist'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Project Tracker</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php foreach ($menu as $m) : ?>
                <div class="user-panel mt-2 pb-1 mb-1 d-flex">
                    <h2 style="color:#c2c7d0;">
                        <!-- Looping menu dan submenu -->
                        <?= $m['menu']; ?>
                    </h2>
                </div>
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
                                <i class="nav-icon <?= $sm['icon']; ?>"></i>
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