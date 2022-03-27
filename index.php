<?php
  $cities = array('Paris', 'Orlando', 'Bahamas');

  if(isset($_GET['city1'])){
    $city1 = $_GET['city1'];
    array_push($cities, $city1 );
  }

  if(isset($_GET['city2'])){
    $city2 = $_GET['city2'];
    array_push($cities, $city2 );
  }

  if(isset($_GET['city3'])){
    $city3 = $_GET['city3'];
    array_push($cities, $city3 );
  }

  if(isset($_GET['city4'])){
    $city4 = $_GET['city4'];
    array_push($cities, $city4 );
  }

  if(isset($_GET['city5'])){
    $city5 = $_GET['city5'];
    array_push($cities, $city5 );
  }

  if(isset($_GET['city6'])){
    $city6 = $_GET['city6'];
    array_push($cities, $city6 );
  }

  $cities = array_diff($cities, [""]);

?>
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

    <title>Site de viagens</title>
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
      <div class="container container-custom" style="max-width: 70%">
        <div class="row g-5">
          <div class="col">
            <img src="./src/img/placeholder-05.jpg" class="img-fluid" />
            <p style="padding: 1rem 0rem">
            Em nossos pacotes nos abrangemos os mais variados preços, para assim caber em seu bolso. E varias formas de locomoções como: avião, navio, trem, entre outros. E por ultimo reservamos pacotes com estadias em hotéis ou em casa, sempre visando a melhor experiência possível em  sua viajem dos sonhos
            </p>
          </div>
          <div class="col">
            <h2>Lugares</h2>
            <p>
              Nos trabalhos com viagens ao redor do mundo todo, com diferentes tipos de transportes 
            </p>
            <img src="./src/img/placeholder-06.jpg" class="img-fluid" />
          </div>
        </div>


        <div class="container container-custom">
          <h1>Está com dúvida para onde ir?</h1>
          <div class="row" style="justify-content: space-evenly">
            <div class="col-10">
              <p>
                Deixe nosso software decidir por você, clicando nesse botão na lateral. Você pode ver alguns países de exemplo abaixo também.
              </p>
            </div>
            <div class="col">
              <button type="button" class="btn btn-dark btn-custom" onclick="showHideTripForms()">Lorem</button>
            </div>
          </div>
          <br>
          <div id="divformCities" class="formCities" style="border: 2px solid black; padding: 20px;">
          <p class="text-center">
            <?php
              // print_r($cities);
            ?>
          </p>
          <div >
            <div class="row align-items-center">
                <?php
                  for($i = 0; $i < count($cities); $i++){
                    if($i%5 == 0){
                      echo '<div class="w-100"></div>';
                    }

                    echo '<div class="col displayCities text-center">' . $cities[$i] . '</div>';
                  }
                  echo '<p class= "text-center"> Cidade: ' . $cities[mt_rand(0, count($cities)-1)] . '</p>';
                ?>
            </div>
              <form action="" method="get" name="citiesForm">
              <br>
                <div class="mx-auto" style="max-width: 50%;">
                  <div class="input-group mb-3" >
                    <select class="form-select" name="amountOfForms">
                        <option selected>Open this select menu</option>
                        <option value="one">1</option>
                        <option value="two">2</option>
                        <option value="three">3</option>
                        <option value="four">4</option>
                        <option value="five">5</option>
                        <option value="six">6</option>
                      </select>
                      <button type="button" class="btn btn-success" onclick="showHideForms()">Success</button>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="input-group mb-3" >
                        <input type="text" name="city1" class="form-control" placeholder="Digite um país" maxlength="13">
                      </div>
                      <div class="input-group mb-3" >
                        <input type="text" name="city2" class="form-control" placeholder="Digite um país" maxlength="13">
                      </div>
                      <div class="input-group mb-3" >
                        <input type="text" name="city3" class="form-control" placeholder="Digite um país" maxlength="13">
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group mb-3" >
                        <input type="text" name="city4" class="form-control" placeholder="Digite um país" maxlength="13">
                      </div>
                      <div class="input-group mb-3" >
                        <input type="text" name="city5" class="form-control" placeholder="Digite um país" maxlength="13">
                      </div>
                      <div class="input-group mb-3" >
                        <input type="text" name="city6" class="form-control" placeholder="Digite um país" maxlength="13">
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3" >
                    <select class="form-select" name="amountOfCards">
                      <option selected>Open this select menu</option>
                      <option value="one">1</option>
                      <option value="two">2</option>
                      <option value="three">3</option>
                    </select>    
                    <button class="btn btn-danger" type="button" id="button-addon1" onclick="showHideCards()">Button</button>
                  </div>
                  <!--  EM DESENVOLVIMENTO

                   -->
                  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
                </div>
              </form>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col" id="card1" >
              <img
                src="./src/img/placeholder-grid-01.jpg"
                class="img-fluid"
                style="min-width: 315px; max-height: 390px"
              />
              <div class="grid-container mx-auto" >
                <h3>Paris</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni a
                  exercitationem debitis neque provident dicta, ab tenetur
                  repellat, recusandae rerum commodi voluptas sapiente, minima
                  atque nostrum obcaecati vitae laudantium accusamus earum facere?
                  Harum, cumque ea. Ab numquam enim laudantium qui cumque, officia
                  eveniet sapiente labore, saepe et accusamus delectus quasi.
                </p>
                <a href="city.php?cidade=paris">
                  <button
                    type="button"
                    class="btn btn-dark btn-custom btn-transparent-custom"
                  >
                    SAIBA MAIS
                  </button>
                </a>
              </div>
            </div>
          <div class="col" id="card2">
            <img
              src="./src/img/placeholder-grid-02.jpg"
              class="img-fluid"
              style="min-width: 315px; max-height: 390px"
            />
            <div class="grid-container">
              <h3>Orlando</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni a
                exercitationem debitis neque provident dicta, ab tenetur
                repellat, recusandae rerum commodi voluptas sapiente, minima
                atque nostrum obcaecati vitae laudantium accusamus earum facere?
                Harum, cumque ea. Ab numquam enim laudantium qui cumque, officia
                eveniet sapiente labore, saepe et accusamus delectus quasi.
              </p>
              <a href="city.php?cidade=orlando">
                <button
                  type="button"
                  class="btn btn-dark btn-custom btn-transparent-custom"
                >
                  SAIBA MAIS
                </button>
              </a>
            </div>
          </div>
          <div class="col" id="card3">
            <img
              src="./src/img/placeholder-grid-03.jpg"
              class="img-fluid"
              style="min-width: 315px; max-height: 390px"
            />
            <div class="grid-container">
              <h3>Bahamas</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni a
                exercitationem debitis neque provident dicta, ab tenetur
                repellat, recusandae rerum commodi voluptas sapiente, minima
                atque nostrum obcaecati vitae laudantium accusamus earum facere?
                Harum, cumque ea. Ab numquam enim laudantium qui cumque, officia
                eveniet sapiente labore, saepe et accusamus delectus quasi.
              </p>
              <a href="city.php?cidade=bahamas">
                <button
                  type="button"
                  class="btn btn-dark btn-custom btn-transparent-custom"
                >
                  SAIBA MAIS
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-image">
        <div
          class="container"
          style="
            color: white;
            font-family: 'Poppins', sans-serif;
            max-width: 70%;
          "
        >
          <div class="container">
            <div class="text-center" style="padding: 8rem 0rem 4rem 0rem;">
              <h1>Lorem ipsum dolor sit, amet consectetur</h1>
              <p>
                Lorem ipsum dolor sit amet
              </p>
            </div>
            <div class="text-center">
              <h3>Lorem ipsum dolor</h3>
              <h5>
                0000-0000
              </h5>
            </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <br />
    <footer class="text-center text-white">
      <!-- Grid container -->
      <!-- Copyright -->
      <div class="text-center p-3 footer-custom">
      <?php 
      $dt = new DateTime("now", new DateTimeZone('America/Recife'));
      echo 'Jundiaí - São Paulo | '.$dt->format('d/m/Y, s:H:i');
      ?>  
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
