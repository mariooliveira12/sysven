<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro - Sysven</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    
    <!-- Custom styles for this page -->
    <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">
    <div class="container col-lg-11">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block"><img src="https://fakeimg.pl/510x640/"/></div> -->
                    <div class="col-lg-5 d-none d-lg-block"><img src="../../img/wallpaper_cadastro.jpg"/></div> 
                    <div class="col-lg-7">        
                        <div class="p-5">
                          <div class="text-center"><h1 class="h1 text-primary mb-5"><strong>Sysven</strong></h1></div>  
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><strong>Crie uma conta!</strong></h1>
                                <!-- Alert -->
                                <?php if($msgAlert != '') :?>
                                    <div class="alert alert-<?=$typeAlert?> alert-dismissible fade show" role="alert">
                                        <?=$msgAlert?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif ?>
                            </div>
                            <form action='usuario.php' method='post' class="user">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input name='nome' type="text" class="form-control form-control-user" id="exampleFullName"
                                            placeholder="Nome Completo" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" maxlength="60" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name='email' type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email" maxlength="60" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name='senha' type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Senha" minlength="8" maxlength="20"required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name='senha_copia' type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repita a senha" minlength="8" maxlength="20" required>
                                    </div>
                                </div>
                                <button type='submit' name='cadastrar' class="btn btn-primary btn-user btn-block"><strong>Criar conta</strong></button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a href="forgot-password.html"><strong>Esqueceu sua senha?</strong></a>
                            </div>
                            <div class="text-center">
                                <a href="usuario.php?login"><strong>Já tem uma conta? Login!</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
<!-- Bootstrap core JavaScript-->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../../js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../../js/demo/datatables-demo.js"></script>