<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $cpf = $_POST["cpf"];
            $phonenumber = $_POST["phonenumber"];
            $cep = $_POST["cep"];
            $address = $_POST["address"];
            $number = $_POST["number"];
            $complement = $_POST["complement"];
            $district = $_POST["district"];
            $city = $_POST["city"];
            $state = $_POST["state"];

            $sql = "INSERT INTO users (
            name, 
            password, 
            cpf,
            email, 
            phonenumber, 
            cep, 
            address, 
            number, 
            complement, 
            district, 
            city,
            state
            ) 
            VALUES (
                '{$name}','{$password}', '{$cpf}', '{$email}', '{$phonenumber}', 
                '{$cep}', '{$address}', '{$number}', '{$complement}', '{$district}', 
                '{$city}', '{$state}')";
                $res = $conn->query($sql);

                if(!$res) {
                    print "<script>alert('Erro ao cadastrar')</script>";
                    print "<script>location.href='?page=listar'</script>";
                    return;
                } 

                print "<script>alert('Cadastrado com sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            break;
        
        case 'editar':
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $cpf = $_POST["cpf"];
            $phonenumber = $_POST["phonenumber"];
            $cep = $_POST["cep"];
            $address = $_POST["address"];
            $number = $_POST["number"];
            $complement = $_POST["complement"];
            $district = $_POST["district"];
            $city = $_POST["city"];
            $state = $_POST["state"];

            $sql = "UPDATE users SET
            name='{$name}', 
            email='{$email}', 
            password='{$password}', 
            cpf='{$cpf}', 
            phonenumber='{$phonenumber}', 
            cep='{$cep}', 
            address='{$address}', 
            number='{$number}', 
            complement='{$complement}', 
            district='{$district}', 
            city='{$city}', 
            state='{$state}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if(!$res) {
                print "<script>alert('Erro ao atualizar')</script>";
                print "<script>location.href='?page=listar'</script>";
                return;
            } 

            print "<script>alert('Atualizado com sucesso')</script>";
            print "<script>location.href='?page=listar'</script>";
            break;

        case 'excluir':
            $sql = "DELETE FROM users WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if(!$res) {
                print "<script>alert('Erro ao deletar')</script>";
                print "<script>location.href='?page=listar'</script>";
                return;
            } 

            print "<script>alert('Deletado com sucesso')</script>";
            print "<script>location.href='?page=listar'</script>";
            break;
        case 'logar':
            $email = $_POST["email"];
            $pass = $_POST["password"];

           $sql = "SELECT * FROM users WHERE email='$email'";
           $res = $conn->query($sql);
           $row = $res->fetch_object();

           if(!password_verify($pass, $row->password)) {
            print "<script>alert('Email ou senha invalida')</script>";
            print "<script>location.href='?page=login'</script>";
           } else {
            print "<script>alert('Bem vindo')</script>";
            print "<script>location.href='?page=listar'</script>";
           }
            break;
    }