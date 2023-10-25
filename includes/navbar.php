
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="main.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">GHH</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="main.php">
                <i class="fas fa-running"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            
            <!-- Divider -->
            <hr class="sidebar-divider">

            
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="register.php">
                <i class="fas fa-user-tag"></i>
                    <span>Admin Profile</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contenido.php">
                <i class="fas fa-file-video"></i>
                    <span>Contenido</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="formulario_persona.php">
                <i class="fas fa-user-alt"></i>
                    <span>Perfil</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="ver_informacion.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Ver Perfil</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="formulario_tarea.php">
                <i class="fas fa-briefcase"></i>
                    <span>Tareas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="calendario.php">
                <i class="fas fa-dumbbell"></i>
                    <span>Ver Tareas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="cronometro.php">
                <i class="fas fa-stopwatch"></i>
                    <span>Cronometro</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="soporte.php">
                <i class="fas fa-question"></i>
                    <span>Soporte</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    

        <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    
                    <form action="logout.php" method="POST">

                        <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

                    </form>

                    
                </div>
            </div>
        </div>
    </div>

    
