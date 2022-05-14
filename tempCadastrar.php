<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      neme="description"
      content="CantinhoWeb Desenvolvemento de Sites Personalizados"
    />
    <meta
      neme="keywords"
      content="Sites Personalizados, Meu Negócio, business Site, biweb"
    />

    <!-- FavIcon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="../favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="../favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="../favicon/site.webmanifest" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./src/css/hamburguer-icon.css" />
    <link rel="stylesheet" href="./src/css/index-style.css" />
    <link rel="stylesheet" href="./src/css/login.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <title>Cadastrar</title>
  </head>

  <body>
    <div id="page-up"></div>
    <header>
      <!-- Navbar Zone 
      <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="/index.html"><img style="max-height: 3.1rem;"
              src="../img/novo nxs pn.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <input type="checkbox" id="checkbox3" class="checkbox3 visuallyHidden">
            <label for="checkbox3">
              <div class="hamburger hamburger3">
                <span class="bar bar1"></span>
                <span class="bar bar2"></span>
                <span class="bar bar3"></span>
                <span class="bar bar4"></span>
              </div>
            </label>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light " aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light " href="#">Modelos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light " href="#">Contatos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light " href="#" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">1</a></li>
                  <li><a class="dropdown-item" href="#">2</a></li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">3</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
    -->
      <!-- Navbar End -->
    </header>

    <main>
      <div
        class="container-fluid"
        style="padding: 2.5rem 0rem; background-color: #8cc8c4"
      >
        <div
          class="container"
          style="background-color: #ffffff; 
          border-radius: 0.5rem;
          "          
        >
          <div class="row no-gutters">
            <div class="col-5 login-img">
              <a href="/index.html">
                <div style="padding: 1rem; text-decoration: none; color: #fff">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="35"
                    height="35"
                    fill="currentColor"
                    class="bi bi-arrow-return-left"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"
                    />
                  </svg>
                </div>
              </a>
            </div>
            <div class="container-fluid col-5" 
              style="
                max-height: 85vh;
                overflow: auto ;
                ">
              <form>
                <h3>Login</h3>

                <label for="password">Nome Completo</label>
                <input type="text" placeholder="Nome Completo" id="name" />

                <label for="username">E-mail</label>
                <input type="tel" placeholder="Email" id="e-mail" />

                <label for="username">Telefone</label>
                <input
                  type="text"
                  placeholder="Número de telofone"
                  id="phoneNumber"
                />

                <label for="password">Senha</label>
                <input type="password" placeholder="Senha" id="password" />

                <label for="password">Repetir senha</label>
                <input type="password" placeholder="Senha" id="password" />

                <button>Cadastrar</button>
                <br /><br />
                <a href="">Não tem uma conta? Inscreva-se agora</a>
              </form>
              <div
                class="container"
                style="background-color: #43bbac; padding: 0rem"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="text-center text-white" style="background: #43bbac">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4"></section>
      </div>
      <!-- Copyright -->
      <div class="text-center p-3 footer-custom">
        © 2022 Copyright: CantinhoWeb
      </div>
    </footer>
    <!--Script Zone-->

    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
