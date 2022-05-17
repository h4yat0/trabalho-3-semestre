<?php
  $cities = array('paris', 'dubai', 'phuket', 'hong kong', 'bankok', 'londres', 'singapura');

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

  $cityCard1 = '<img
    src="./src/img/'. $cities[0] .'City.jpg"
    class="img-fluid"
    style="min-width: 315px; max-height: 390px"
    />';
  $cityCard2 = '<img
    src="./src/img/'. $cities[1] .'City.jpg"
    class="img-fluid"
    style="min-width: 315px; max-height: 390px"
    />';
  $cityCard3 = '<img
    src="./src/img/'. $cities[2] .'City.jpg"
    class="img-fluid"
    style="min-width: 315px; max-height: 390px"
    />';

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
     <div id="botao_inicio"> <button id="botao">
       <svg xmlns="http://www.w3.org/2000/svg"  color="white" width="25" height="25" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">  
      <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/> </svg></button>
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
        </div>


          <div class="cards-container-container">
            <div class="row row-cols-3 row gy-4">
              <div class="cow">
                <div class="card-container">
                    <div class="card" id="pais1">
                      <h2>pais1</h2>
                      <p>saiba mais</p>
                    </div>
                </div>
              </div>

              <div class="cow">
                <div class="card-container">
                   <div class="card" id="pais2">
                      <h2>pais2</h2>
                      <p>saiba mais</p>
                   </div>
                </div>
              </div>
                  
              <div class="cow">
                <div class="card-container">
                    <div class="card" id="pais3">
                      <h2>pais3</h2>
                      <p>saiba mais</p>
                    </div>
                </div>
              </div>

              <div class="cow">
                <div class="card-container">
                    <div class="card" id="pais4">
                      <h2>pais4</h2>
                      <p>saiba mais</p>
                    </div>
                </div>
              </div>

              <div class="cow">
                <div class="card-container">
                    <div class="card" id="pais5">
                      <h2>pais5</h2>
                      <p>saiba mais</p>
                    </div>
                </div>
              </div>
              
              <div class="cow">
                <div class="card-container">
                    <div class="card" id="pais6">
                      <h2>pais6</h2>
                      <p>saiba mais</p>
                    </div>
                </div>
              </div>

              <div class="cow">
                <div class="card-container">
                    <div class="card" id="pais7">
                      <h2>pais7</h2>
                      <p>saiba mais</p>
                    </div>
                </div>
              </div>

              <div class="cow">
                <div class="card-container">
                    <div class="card" id="pais8">
                      <h2>pais8</h2>
                      <p>saiba mais</p>
                    </div>
                </div>
              </div>

              <div class="cow">
                <div class="card-container">
                   <div class="card" id="pais9">
                      <h2>pais9</h2>
                      <p>saiba mais</p>
                   </div>
                </div>
              </div>


          </div>





          </div>


















        
        <div class="row">
            <div class="col" id="card1" >
              <?php echo $cityCard1;?>
              <div class="grid-container mx-auto" >
                <h3><?php echo ucfirst($cities[0]);?></h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni a
                  exercitationem debitis neque provident dicta, ab tenetur
                  repellat, recusandae rerum commodi voluptas sapiente, minima
                  atque nostrum obcaecati vitae laudantium accusamus earum facere?
                  Harum, cumque ea. Ab numquam enim laudantium qui cumque, officia
                  eveniet sapiente labore, saepe et accusamus delectus quasi.
                </p>
                <?php 
                echo '<a href="city.php?cidade='.$cities[0].'">
                    <button
                      type="button"
                      class="btn btn-dark btn-custom btn-transparent-custom"
                    >
                      SAIBA MAIS
                    </button>
                  </a>'            
              ?>
              </div>
            </div>
          <div class="col" id="card2">
            <?php echo $cityCard2;?>
            <div class="grid-container">
              <h3><?php echo ucfirst($cities[1]);?></h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni a
                exercitationem debitis neque provident dicta, ab tenetur
                repellat, recusandae rerum commodi voluptas sapiente, minima
                atque nostrum obcaecati vitae laudantium accusamus earum facere?
                Harum, cumque ea. Ab numquam enim laudantium qui cumque, officia
                eveniet sapiente labore, saepe et accusamus delectus quasi.
              </p>
              <?php 
                echo '<a href="city.php?cidade='.$cities[1].'">
                    <button
                      type="button"
                      class="btn btn-dark btn-custom btn-transparent-custom"
                    >
                      SAIBA MAIS
                    </button>
                  </a>'            
              ?>
            </div>
          </div>
          <div class="col" id="card3">
          <?php echo $cityCard3;?>
            <div class="grid-container">
              <h3><?php echo ucfirst($cities[2]);?></h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni a
                exercitationem debitis neque provident dicta, ab tenetur
                repellat, recusandae rerum commodi voluptas sapiente, minima
                atque nostrum obcaecati vitae laudantium accusamus earum facere?
                Harum, cumque ea. Ab numquam enim laudantium qui cumque, officia
                eveniet sapiente labore, saepe et accusamus delectus quasi.
              </p>
              <?php 
                echo '<a href="city.php?cidade='.$cities[2].'">
                    <button
                      type="button"
                      class="btn btn-dark btn-custom btn-transparent-custom"
                    >
                      SAIBA MAIS
                    </button>
                  </a>'            
              ?>
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
    <script src="./src/script/voltarInicio.js"></script>




    
  </body>
</html>

<?php
error_reporting(0);
$arquivo = fopen("./cidade.txt","a");

fwrite($arquivo, "================ CIDADES ================= \n" );
fwrite($arquivo, "\nDATA | ". $dataFinal."\n\n" );

  foreach ($cities as $key) {
    fwrite($arquivo, "- ".$key ."\n"  );
  }
  
fwrite($arquivo, "\n=======================//================= \n" );
fclose($arquivo);

















?>


