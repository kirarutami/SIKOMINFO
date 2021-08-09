 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
         <img src="<?= base_url('sbadmin2/img/logo-inhu.png') ?>" width="25" height="30" inline>
         <div class="sidebar-brand-text mx-3">SIKOMINFO</div>
     </a>



     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="/clipping/">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <?php if (in_groups('superadmin')) : ?>
         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
             Interface
         </div>

         <!-- Nav Item - Pages Collapse Menu -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="<?= base_url('admin'); ?>">
                 <i class="fas fa-fw fa-cog"></i>
                 <span>User List</span>
             </a>
         </li>

     <?php endif; ?>

     <!-- Divider -->
     <hr class="sidebar-divider">


     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <div class="d-flex justify-content-center">
             <a href="/clipping/form" class="btn btn-primary mb-3">
                 <span>Masukkan e-Clipping</span>
             </a>
         </div>
     </li>

     <!-- Nav Item - Tables -->
     <!-- <li class="nav-item">
         <div class="d-flex justify-content-center">
             <a action="<?= route_to('login') ?>" href="<?= route_to('register') ?>" class="btn btn-primary mb-3">
                 <span>Daftarkan Admin</span>
             </a>
         </div>
     </li> -->
     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->