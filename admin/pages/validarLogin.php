<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - CRM RESORT</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                    <?php
                                        include("ControladorBD.php");

                                        $Con = conectar();

                                        $correo = $_POST['correo'];
                                        $contrasena = $_POST['contrasena'];
                                        $tipo = $_POST['tipo'];

                                        session_start();

                                        $Con = conectar();
                                        $sql = "SELECT correo, contrasena, tipo FROM usuarios WHERE correo='$correo' and contrasena='$contrasena' and tipo = 'admin'";

                                        $resultado = consultar($Con, $sql);
                                        $num = mysqli_num_rows($resultado);

                                        if ($num > 0) {
                                            header("Location: screens/charts.html");
                                        }
                                        else{
                                            Print("<center><h1>La contraseña o usuario no coincide</h1><br><center>");
                                        }
                                            cerrar($Con);
                                        ?>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="screens/login.html">Tienes cuenta? Ir al Login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
				
            <!-- PIE DE PAGINA -->
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CRM RESORT 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
</html>






