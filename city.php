<?php
  if(isset($_GET["cidade"])) {
    $cidade = $_GET["cidade"];
  } else {
    $cidade = "paris";
  }

  if ($cidade == "paris"){
      $img1 = "<img src='./src/img/146.jpg' class='img-fluid' />";
      $img2 = "<img src='./src/img/arco-do-triunfo.jpg' class='img-fluid' />";
  }
  if ($cidade == "orlando"){
      $img1 = "<img src='./src/img/disney.jpg' class='img-fluid' style='max-width: 500px'/>";
      $img2 = "<img src='./src/img/uni.jpg' class='img-fluid' style='max-width: 450px'/>";
    }
    if ($cidade == "bahamas"){
        $img1 = "<img src='./src/img/baha.jpg' class='img-fluid' style='max-width: 500px'/>";
        $img2 = "<img src='./src/img/barcos.jpg' class='img-fluid' style='max-width: 500px'/>";
    }
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

    <title>01</title>
  </head>
  <body>
    <main>
      <div class="container container-custom" style="max-width: 70%; padding-top: 1rem; margin-top:1rem">
      <h1 class="text-center">O que ver em <?php echo ucfirst($cidade)?></h1>
      <br><br><br>
        <div class="row g-5">
          <div class="col">
              <?php
                echo $img1;
              ?>
            <p style="padding: 1rem 0rem">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
              laudantium voluptatum ut laboriosam officiis odit, error sed
              similique perferendis debitis? Magnam deleniti eligendi
              repudiandae quos!
            </p>
            <button type="button" class="btn btn-dark btn-custom">
            PLACE HOLDER BUTTON
            </button>
          </div>

          <div class="col">
            <h2>Lorem ipsum dolor sit.</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam
              quia totam, deserunt eius nam adipisci!
            </p>
            <?php
                echo $img2;
            ?>
          </div>
        </div>
        <div class="container container-custom">
          <h1>Lorem ipsum dolor sit.</h1>
          <div class="row" style="justify-content: space-evenly">
            <div class="col-10">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quaerat, eius voluptatibus illo temporibus obcaecati est totam
                nobis, perferendis libero itaque dignissimos inventore, alias
                quos ea!
              </p>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-dark btn-custom">
                <?php
                  if ($cidade == "paris"){
                    $valorDaviagem = 7296;
                  }
                  if ($cidade == "orlando"){
                    $valorDaviagem = 6484;
                  }
                  if ($cidade == "bahamas"){
                    $valorDaviagem = 3265;
                  }   
                  echo "R$" . $valorDaviagem . ",00"
                ?>
              </button>
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

    <!-- <script src="src/script/hero.js"></script> -->
  </body>
</html>
