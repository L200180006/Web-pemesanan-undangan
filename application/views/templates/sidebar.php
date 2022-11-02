<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-mug-hot"></i>
        </div>
        <div class="sidebar-brand-text mx-3">UNDANGAN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Looping Menu -->

    <!-- Heading -->
    <div class="sidebar-heading">
        ADMIN
    </div>

    <!-- subMenu Menu -->
    <?php
    $querySubMenu = "  SELECT *
        FROM user_sub_menu ";
    $subMenu = $this->db->query($querySubMenu)->result_array();
    ?>

    <?php foreach ($subMenu as $sm) : ?>
        <?php if ($title == $sm['title']) : ?>
            <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
            <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                <i class="<?= $sm['icon']; ?>"></i>
                <span><?= $sm['title'] ?></span></a>
            </li>

        <?php endforeach; ?>
        <!-- Divider -->
        <hr class="sidebar-divider mt-3">



        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login/logout'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->