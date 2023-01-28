<?php
    $sql = "SELECT * FROM users WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="card">
    <div class="card-body">
        <h1>Editar de usuário</h1>
        <form action="?page=salvar" method="POST">
            <input type="hidden" name="id" value="<?php print $row->id; ?>">
            <input type="hidden" name="acao" value="editar">
            <div class="mb-3">
                <label>Nome*</label>
                <input type="text" name="name" class="form-control" value="<?php print $row->name; ?>">
            </div>
            <div class="mb-3">
                <label>email*</label>
                <input type="email" name="email" class="form-control" value="<?php print $row->email; ?>">
            </div>
            <div class="mb-3">
                <label>senha* (Digite a nova senha)</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>cpf*</label>
                <input type="text" name="cpf" class="form-control" value="<?php print $row->cpf; ?>">
            </div>
            <div class="mb-3">
                <label>número de telefone*</label>
                <input type="text" name="phonenumber" class="form-control" value="<?php print $row->phonenumber; ?>">
            </div>
            <div class="mb-3">
                <label>cep*</label>
                <input type="text" name="cep" class="form-control" value="<?php print $row->cep; ?>">
            </div>
            <div class="mb-3">
                <label>endereço*</label>
                <input type="text" name="address" class="form-control" value="<?php print $row->address; ?>">
            </div>
            <div class="mb-3">
                <label>número*</label>
                <input type="text" name="number" class="form-control" value="<?php print $row->number; ?>">
            </div>
            <div class="mb-3">
                <label>complemento*</label>
                <input type="text" name="complement" class="form-control" value="<?php print $row->complement; ?>">
            </div>
            <div class="mb-3">
                <label>bairro*</label>
                <input type="text" name="district" class="form-control" value="<?php print $row->district; ?>">
            </div>
            <div class="mb-3">
                <label>cidade*</label>
                <input type="text" name="city" class="form-control" value="<?php print $row->city; ?>">
            </div>
            <div class="mb-3">
                <label>estado*</label>
                <input type="text" name="state" class="form-control" value="<?php print $row->state; ?>">
            </div>
            <div class="mb-3">
                <input type="submit" value="Criar" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>