<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">novo cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">listar usuários</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php 
                include("config.php");
                switch(@$_REQUEST["page"]) {
                    case "novo":
                        include("new-user.php");
                    break;
                    case "listar":
                        include("listing-user.php");
                    break;
                    case "salvar":
                        include("save-user.php");
                    break;
                    case "editar":
                        include("edit-user.php");
                    break;
                    case "ver":
                        include("show-user.php");
                    break;
                        default:
                    print "Bem vidndos";
                }
    ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>