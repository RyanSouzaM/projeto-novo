<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iGame</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li> -->
      </ul>
      <form action="login.php" method="post" class="d-flex">
        <input class="form-control me-2" type="email" name="email" placeholder="E-mail">
        <input class="form-control me-2" type="password" name="senha"  placeholder="Password">
        <button class="btn btn-outline-success me-2" type="submit">Entrar</button>

        <a href="novo-usuario.php" class="btn btn-outline-primary" type="submit">Cadastrar</a>
      </form>
    </div>
  </div>
</nav>  
