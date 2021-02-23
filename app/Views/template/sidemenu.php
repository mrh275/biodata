<?= $this->extend('template/admin') ?>

<?= $this->section('sideMenu') ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url('/asset/admin') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('/asset/admin') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php foreach ($listMenu as $mainMenu) : ?>
                    <?php if ($menu == $mainMenu['slug_menu']) : ?>
                        <li class="nav-item menu-open <?= $mainMenu['has_submenu'] ?>">
                            <a href="<?= $mainMenu['url_menu'] ?>" class="nav-link active">
                                <i class="nav-icon <?= $mainMenu['menu_icon'] ?>"></i>
                                <p>
                                    <?= $mainMenu['menu'] ?>
                                    <i class="<?= $mainMenu['drop_icon'] ?>"></i>
                                </p>

                            <?php else : ?>
                        <li class="nav-item <?= $mainMenu['has_submenu'] ?>">
                            <a href="<?= $mainMenu['url_menu'] ?>" class="nav-link">
                                <i class="nav-icon <?= $mainMenu['menu_icon'] ?>"></i>
                                <p>
                                    <?= $mainMenu['menu'] ?>
                                    <i class="<?= $mainMenu['drop_icon'] ?>"></i>
                                </p>
                            <?php endif; ?>
                            </a>
                            <ul class="nav nav-treeview">
                                <?php
                                $menuId = $mainMenu['id'];
                                $this->submenu = new \App\Models\MenuModel();
                                $subMenu = $this->submenu->getSubMenu($menuId);

                                ?>
                                <?php foreach ($subMenu as $sm) : ?>
                                    <li class="nav-item">
                                        <?php if ($submenuSlug == $sm['slug_submenu']) : ?>
                                            <a href="<?= base_url($sm['url_submenu']); ?>" class="nav-link active">
                                            <?php else : ?>
                                                <a href="<?= base_url($sm['url_submenu']); ?>" class="nav-link">
                                                <?php endif; ?>
                                                <i class="nav-icon <?= $sm['submenu_icon']; ?>"></i>
                                                <p><?= $sm['submenu_name']; ?></p>
                                                </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<?= $this->endSection() ?>