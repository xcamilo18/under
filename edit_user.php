<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutorias UPC</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
         <?php
         include "sidebar_admin.php"
         ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include "topbar.php"
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style=" left: 5%; position: relative;">
                    <div class="col-lg-7" >
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edición de Usuario</h1>
                            </div>

                            <div  >
                            <form class="user" >
                                <!-- <div class="form-group row"> -->
                                    <div class="col-sm-6 mb-3 mb-sm-0" style=" left: 25%; position: relative;">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Número de Dcocumento">
                                    </div>
                                    <br>
                                    <div class="col-sm-6" style=" left: 25%; position: relative;">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Nombre Completo">
                                    </div>
                                    <br>
                                <!-- </div> -->
                                <!-- <div class="form-group row"> -->
                                    <div class="col-sm-6 mb-3 mb-sm-0" style=" left: 25%; position: relative;">
                                        <input type="user" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Usuario">
                                    </div>
                                    <br>
                                    <hr>
                                    <div class="col-sm-6" style=" left: 25%; position: relative;">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Contraseña">
                                    </div>
                                    <br>
                                    <div class="copyright text-center my-auto">
                                        <span> Debe contener al menos 8 caracteres, incluyendo
                                            al menos una mayúscula, un número y un carácter
                                            especial.
                                        </span>
                                    </div>
                                    <hr>
                                <!-- </div > -->
                                <fieldset>
                                    <legend>Seleccione rol:</legend>
                                    <div>
                                        <input type="radio" id="huey" name="drone" value="huey" checked />
                                        <label for="huey">Docente / Tutor</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="dewey" name="drone" value="dewey" />
                                        <label for="dewey">Estudiante</label>
                                    </div>
                                </fieldset>
                                <hr>
                                <fieldset>
                                    <legend>Estado del Usuario:</legend>
                                    <div>
                                        <input type="radio" id="huey" name="drone2" value="huey" checked />
                                        <label for="huey">Activo</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="dewey" name="drone2" value="dewey" />
                                        <label for="dewey">Inactivo</label>
                                    </div>
                                </fieldset>
                                <br>
                                <a href="#" class="btn btn-secondary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-left"></i>
                                    </span>
                                    <span class="text">Regresar</span>
                                </a>
                                <a href="#" class="btn btn-success btn-icon-split" style="left: 68%; position: relative;">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Guardar</span>
                                </a> 
                            </form>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Universidad Popular del Cesar - Seccional Aguachica 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
                    <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">¿Está seguro que desea cerrar sesión?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.html">Cerrar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    

</body>

</html>