<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include '../util/imports.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento Médico</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img id=logo src="../img/logo.png" alt="Logo"> Atendimento Médico</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end col-8" id="navbar-links">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastrar
        </a>
        <div class="dropdown-menu navbar-dark bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item navbar-dark bg-dark" href="../view/cad_medico.php">Médico</a>
          <a class="dropdown-item navbar-dark bg-dark" href="../view/cad_paciente.php">Paciente</a>
          <a class="dropdown-item navbar-dark bg-dark" href="../view/cad_atendimento.php">Atendimento</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Listar
        </a>
        <div class="dropdown-menu navbar-dark bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item navbar-dark bg-dark" href="../view/list_medico.php">Médico</a>
          <a class="dropdown-item navbar-dark bg-dark" href="../view/list_paciente.php">Paciente</a>
          <a class="dropdown-item navbar-dark bg-dark" href="../view/list_atendimento.php">Atendimento</a>
        </div>
      </li>
      <li class="nav-item col-12">
        <a class="nav-link" href="#">Sair</a>
      </li>
    </ul>
  </div>
</nav>
</header>
</body>
</html>