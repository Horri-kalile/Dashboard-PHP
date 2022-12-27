<div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                   
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                      
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="index.php" >
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Tableau de bord</span>
                            </a>
                           
                        </li> <!-- end tableau de bord Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApps">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">Administrateur</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ajouteradmin.php" class="nav-link" data-key="t-calendar"> Ajouter Administrateur </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="listeAdmin.php" class="nav-link" data-key="t-chat"> Liste Administrateur </a>
                                    </li>
                                   
                                   
                                    
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Client</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ajouterclient.php"  class="nav-link"
                                            data-key="t-horizontal">Ajouter Client</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="listeclient.php"  class="nav-link"
                                            data-key="t-detached">Liste Client</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>