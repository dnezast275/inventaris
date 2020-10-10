  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url(); ?>" class="brand-link text-center">
          <span class="brand-textfont-weight-light">Sistem Pengelola Inventaris</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="<?= base_url(); ?>asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <?php if ($menu == $submenu) : ?>
                  <li class="nav-item menu-open">
                      <a href="<?= base_url(); ?>" class="nav-link active">
                          <?php else : ?>
                          <a href="<?= base_url(); ?>" class="nav-link active">
                              <?php endif; ?>
                              <i class=" nav-icon fa fa-fw fa-tachometer-alt"></i>
                              <p>Dashboard</p>
                          </a>
                  </li>
                  <?php foreach($menulist as $m) : ?>
                  <?php if($menu == $m['menu']) : ?>
                  <li class="nav-item <?= $m['treeview_icon']; ?> menu-open">
                      <a href="<?= $m['url_menu']; ?>" class="nav-link active">
                          <i class="nav-icon <?= $m['menu_icon']; ?>"></i>
                          <p>
                              <?= $m['menu_name']; ?>
                          </p>
                          <i class="<?= $m['drop_icon'] ?>"></i>
                          <?php else : ?>
                  <li class="nav-item <?= $m['treeview_icon']; ?>">
                      <a href="<?= $m['url_menu']; ?>" class="nav-link">
                          <i class="nav-icon <?= $m['menu_icon']; ?>"></i>
                          <p><?= $m['menu_name']; ?></p>
                          <i class="<?= $m['drop_icon']; ?>"></i>
                          <?php endif; ?>
                      </a>
                      <ul class="nav nav-treeview">
                          <?php $menuId = $m['id'];
                                        $querySubMenu = "SELECT *
                                                        FROM `submenu` JOIN `menu`
                                                        ON `submenu`.`menu` = `menu`.`id`
                                                        WHERE `submenu`.`menu` = $menuId
                                                        AND `submenu`.`active` = 1
                                                    ";
										$subMenu = $this->db->query($querySubMenu)->result_array(); ?>

                          <?php foreach ($subMenu as $sm) : ?>
                          <li class="nav-item">
                              <?php if ($menu == $sm['menu']) : ?>
                              <a href="<?= base_url($sm['url_submenu']); ?>" class="nav-link active">
                                  <?php else : ?>
                                  <a href="<?= base_url($sm['url_submenu']); ?>" class="nav-link">
                                      <?php endif; ?>
                                      <i class="nav-icon <?= $sm['submenu_icon']; ?>"></i>
                                      <p><?= $sm['submenu']; ?></p>
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