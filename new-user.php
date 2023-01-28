<div class="card">
    <div class="card-body">
        <h1>Cadastro de usuário</h1>
        <form action="?page=salvar" method="POST" onsubmit="return validarCPF(event)">
            <input type="hidden" name="acao" value="cadastrar">
            <div class="mb-3">
                <label>Nome*</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>email*</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>senha*</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>cpf*</label>
                <input type="text" name="cpf" id="cpf" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>número de telefone*</label>
                <input type="text" name="phonenumber" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>cep*</label>
                <input type="text" name="cep" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>endereço*</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>número*</label>
                <input type="text" name="number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>complemento*</label>
                <input type="text" name="complement" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>bairro*</label>
                <input type="text" name="district" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>cidade*</label>
                <input type="text" name="city" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>estado*</label>
                <input type="text" name="state" class="form-control" required>
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