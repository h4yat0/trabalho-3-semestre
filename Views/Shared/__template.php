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

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./src/css/hero.css" />
    <link rel="stylesheet" href="./src/css/index-style.css" />

    <title>{{title}}</title>
  </head>

  <body>
    <div id="page-up"></div>
    <header>
      <!-- Hero Zone -->
      <div class="hero-image">
        <div
          class="container"
          style="
            color: white;
            font-family: 'Poppins', sans-serif;
            max-width: 70%;
          "
        >
          <div class="container">
            <!-- Navbar Zone -->
            <nav class="navbar navbar-expand-lg navbar-custom">
              <div class="container-fluid">
                <a
                  class="navbar-brand text-light"
                  href="#"
                  style="max-height: 3.5rem"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    fill="currentColor"
                    class="bi bi-house"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"
                    />
                  </svg>
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <input
                    type="checkbox"
                    id="checkbox3"
                    class="checkbox3 visuallyHidden"
                  />
                  <label for="checkbox3">
                    <div class="hamburger hamburger3">
                      <span class="bar bar1"></span>
                      <span class="bar bar2"></span>
                      <span class="bar bar3"></span>
                      <span class="bar bar4"></span>
                    </div>
                  </label>
                </button>
                <div
                  class="collapse navbar-collapse"
                  id="navbarSupportedContent"
                >
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a
                        class="nav-link active text-light"
                        aria-current="page"
                        href="#"
                        >Home</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="#">Modelos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="#">Contatos</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a
                        class="nav-link dropdown-toggle text-light"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Dropdown
                      </a>
                      <ul
                        class="dropdown-menu"
                        aria-labelledby="navbarDropdown"
                      >
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
                <!-- login section
                  <div class="nav-login-section" style="color: white">
                    <a href="./src/pages/login.html">
                      <button
                        type="button"
                        class="btn btn-outline-light btn-custom"
                      >
                        Login
                      </button>
                    </a>
                    &ensp; | &ensp;
                    <button
                      type="button"
                      class="btn btn-outline-light btn-custom"
                    >
                      Sing in
                    </button>
                  </div>
                
                -->
              </div>
            </nav>

            <!-- Navbar End -->

            <div
              style="
                max-width: 50%;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
              "
            >
              <h1>Site de viagens</h1>
              <p>
                Nos forneceremos a melhor experiencia possível em sua viagem <br>
                "Quer fazer a viagem dos seus sonhos? Venha conosco. Nos fornecemos o melhor experiência possível em sua viagem dos sonhos"
              </p>
            </div>
          </div>
        </div>
        <div class="hero-text"></div>
      </div>
      <!-- Hero End -->
    </header>

    <main>
        {{content}}
    </main>
    <br />
    <footer class="text-center text-white">
      <!-- Grid container -->
      <!-- Copyright -->
      <div class="text-center p-3 footer-custom">
      <?php 
      $dt = new DateTime("now", new DateTimeZone('America/Recife'));
      $dataFinal = 'Jundiaí, São Paulo. '.$dt->format('d/m/Y, H:i:s');
      echo $dataFinal;
      ?>
      <br>  
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

    <!-- Custom Script -->
    <script src="./src/script/index.js"></script>
  </body>
</html>