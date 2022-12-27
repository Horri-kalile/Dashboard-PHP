<?php

include('includes/connect_db.php');
$id = $_GET['id'];
$req = $bdd->query("SELECT * FROM  client WHERE id_client=$id");
$donnees = $req->fetch();
?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">


<head>

    <meta charset="utf-8" />
    <title>Modifier Client</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

    <?php include('includes/header.php')?>
        <!-- ========== App Menu ========== -->
       <?php include('includes/menu.php')?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Basic Elements</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Basic Elements</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                 
                    <!--end row-->
                    <form action="controller/modifierclient.php?id=<?php echo $donnees['id_client'] ?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Modifier Client</h4>
                                    <div class="flex-shrink-0">
                                      
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div>

                                         
                                            <div class="row g-3">
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                        
                                                        <input type="file" class="form-control" placeholder="Image"
                                                            aria-label="Username" aria-describedby="basic-addon1" name="image_client" value="<?php echo $donnees['image_client'] ?>">
                                                    </div>
                                                </div>
                                          

                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                      
                                                        <input type="text" class="form-control"
                                                            aria-label="Amount (to the nearest dollar)" placeholder="Nom" name="nom_client"value="<?php echo $donnees['nom_client'] ?>">
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="prenom" name="pren_client"value="<?php echo $donnees['pren_client'] ?>"
                                                            aria-label="Username">
                                                       
                                                    </div>
                                                </div>
                                              
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="telephone" name="tlf_client"value="<?php echo $donnees['tlf_client'] ?>"
                                                            aria-label="Username">
                                                       
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" placeholder="EMAIL" name="email_client"value="<?php echo $donnees['email_client'] ?>"
                                                            aria-label="Username">
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <input type="password" class="form-control" placeholder="Mot de passe" name="mp_client"value="<?php echo $donnees['mp_client'] ?>"
                                                            aria-label="Username">
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="input-group">
                                                        <button type="submit" class="btn btn-success">Modifier</button>
                                                       
                                                    </div>
                                                </div>
                                                
                                              
                                            </div>
                                        </div>

                                    
                                    </div>
                                    <div class="d-none code-view">
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                     </form>
                     <!--end row-->

                    <!--end row-->

                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->

            <?php include('includes/footer.php') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    


    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

 

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>

    <script src="assets/js/app.js"></script>

</body>


</html>