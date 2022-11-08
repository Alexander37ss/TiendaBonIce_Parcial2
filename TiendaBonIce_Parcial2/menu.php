<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="img/pinguino.png" alt="" width="75px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="consultarDatos.php">Consultar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registrarBonIce.php">Registrar</a>
      </li>
       </li>
       </ul>
    <form class="form-inline my-2 my-lg-0" action="resultadoBusqueda.php">
      <input name="termino" class="form-control mr-sm-2" type="search" placeholder="Busca tu BonIce " aria-label="Search">
      <button class="btn my-sm-0 bg-danger" type="submit">Buscar</button>
    </form>
  </div>
</nav>