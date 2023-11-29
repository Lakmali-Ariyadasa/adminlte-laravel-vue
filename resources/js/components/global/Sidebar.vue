<template>
    <div>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4" style="background-color:#6610f2; color:#ffffff;">
            <!-- Brand Logo -->
            <div class="text-center" style="color:#ffffff; margin-top:15px;">
                <h4 class="brand-text font-weight-light">UI and UX</h4>
            </div>
            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <!-- <div class="image">
                <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div> -->
                <div class="info">
                <a href="#" class="d-block"  style="color:#ffffff;">{{ user.name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/home" class="nav-link active" style="color:#ffffff;">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/approvals" class="nav-link" style="color:#ffffff;">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Approvals
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                    </li>
                     <li class="nav-item">
                        <a href="/users" class="nav-link" style="color:#ffffff;">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/form" class="nav-link" style="color:#ffffff;">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Forms
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                    </li>
                     <li class="nav-item">
                        <a href="/reports" class="nav-link" style="color:#ffffff;">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Reports
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                    </li>
                     </li>
                     <li class="nav-item">
                        <a href="/color-detection" class="nav-link" style="color:#ffffff;">
                        <i class="nav-icon fas fa-cube"></i>
                        <p>
                            Color Detection
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                    </li>
                      <li class="nav-item">
                        <a href="/file-upload" class="nav-link" style="color:#ffffff;">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            File Upload
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>
</template>

<script>
export default {
    name: "Sidebar",
    props: ['user']
}
</script>