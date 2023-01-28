<div class="card">
    <div class="card-body">
        <form action="?page=salvar" method="POST">
            <input type="hidden" name="acao" value="logar">
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" placeholder="Informe seu Email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>senha</label>
                <input type="password" name="password" class="form-control" placeholder="Informe sua senha">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Entrar">
            </div>
        </form>
    </div>
</div>