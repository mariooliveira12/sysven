<html>
<body>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Lista</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($usuarios as $u) : ?>
                    <tr>
                        <td><?=$u['nome']?></td>
                        <td>
                            <a href="usuario.php?email=<?=$u['email']?>">
                                <?=$u['email']?>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody> 
            </table>
            <a href='cliente.php'><button type='submit' name='cadastrar' class="btn btn-success" style="width: 120px;background-color:#228B22;">Voltar</button></a>
        </div>
    </div>
</div>