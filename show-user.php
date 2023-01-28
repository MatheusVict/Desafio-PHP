<?php
    $sql = "SELECT * FROM users WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <p><strong>Nome: </strong><?php print $row->name ?></p>
            <p><strong>Email: </strong><?php print $row->email ?></p>
            <p><strong>CPF: </strong><?php print $row->cpf ?></p>
            <p><strong>Número de telefone: </strong><?php print $row->phonenumber ?></p>
            <p><strong>CEP: </strong><?php print $row->cep ?></p>
            <p><strong>Endereço: </strong><?php print $row->address ?></p>
            <p><strong>Numer: </strong><?php print $row->number ?></p>
            <p><strong>Complemento: </strong><?php print $row->complement ?></p>
            <p><strong>Bairro: </strong><?php print $row->district ?></p>
            <p><strong>Cidade: </strong><?php print $row->city ?></p>
            <p><strong>Estado: </strong><?php print $row->state ?></p>
        </div>
    </div>
</div>