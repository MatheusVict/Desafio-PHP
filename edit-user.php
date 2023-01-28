<?php
    $sql = "SELECT * FROM users WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="card">
    <div class="card-body">
        <h1>Editar de usuário</h1>
        <form action="?page=salvar" method="POST" onsubmit="return validarCPF(event)">
            <input type="hidden" name="id" value="<?php print $row->id; ?>">
            <input type="hidden" name="acao" value="editar">
            <div class="mb-3">
                <label>Nome*</label>
                <input type="text" name="name" placeholder="informe seu novo" class="form-control" value="<?php print $row->name; ?>">
            </div>
            <div class="mb-3">
                <label>email*</label>
                <input type="email" name="email" placeholder="Informe seu email" class="form-control" value="<?php print $row->email; ?>">
            </div>
            <div class="mb-3">
                <label>senha* (Digite a nova senha)</label>
                <input type="password" name="password" placeholder="Informe sua nova senha" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>cpf*</label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Informe seu cpf" value="<?php print $row->cpf; ?>">
            </div>
            <div class="mb-3">
                <label>número de telefone*</label>
                <input type="text" name="phonenumber" class="form-control" placeholder="Informe o seu telefone" value="<?php print $row->phonenumber; ?>">
            </div>
            <div class="mb-3">
                <label>cep*</label>
                <input type="text" name="cep" placeholder="Informe o seu cep" class="form-control" value="<?php print $row->cep; ?>">
            </div>
            <div class="mb-3">
                <label>endereço*</label>
                <input type="text" name="address" placeholder="Informe o seu endereço" class="form-control" value="<?php print $row->address; ?>">
            </div>
            <div class="mb-3">
                <label>número*</label>
                <input type="text" name="number" placeholder="Infome o seu número" class="form-control" value="<?php print $row->number; ?>">
            </div>
            <div class="mb-3">
                <label>complemento*</label>
                <input type="text" name="complement" placeholder="Informe o seu complemento" class="form-control" value="<?php print $row->complement; ?>">
            </div>
            <div class="mb-3">
                <label>bairro*</label>
                <input type="text" name="district" placeholder="Informe o seu bairro" class="form-control" value="<?php print $row->district; ?>">
            </div>
            <div class="mb-3">
                <label>cidade*</label>
                <input type="text" name="city" placeholder="Informe o sua cidade" class="form-control" value="<?php print $row->city; ?>">
            </div>
            <div class="mb-3">
                <label>estado*</label>
                <input type="text" name="state" placeholder="Informe o seu estado" class="form-control" value="<?php print $row->state; ?>">
            </div>
            <div class="mb-3">
                <input type="submit" value="Criar" class="btn btn-primary">
            </div>
            <script>
                function validarCPF(event) {
                let value = document.getElementById("cpf").value;
                let re = /([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})/g;
                if (! re.test(value)) {
                    // campo inválido, retorna false para o formulário não ser submetido
                    alert('CPF Inválido');
                    event.preventDefault()
                    document.form.cpf.focus();
                    return false;
                }
                return true;
                }
            </script>
        </form>
    </div>
</div>