<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Cliente #<?=$usuario['email']?></h1>
 <!-- Basic Card Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Atualização</h6>
    </div>
    <div class="card-body">
    <form action='usuario.php' method='post'>
        <input type='hidden' name='id' value='<?=$usuario['email']?>'>
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input value='<?=$usuario['nome']?>' type="text" class="form-control" name='nome'>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input value='<?=$usuario['email']?>' type="email" class="form-control" name='email'>
        </div>
        <a href='usuario.php' class='btn btn-secondary'>Cancelar</a>
        <a href='usuario.php?excluir=<?=$usuario['email']?>' class='btn btn-danger'>Excluir</a>
        <button type="submit" class="btn btn-primary" name='atualizar'>Atualizar</button>
    </form>
    </div>
</div>