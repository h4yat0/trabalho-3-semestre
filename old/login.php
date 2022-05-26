<?php
require('src/db/conexao.php');

if (isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    //Recebe dados vindos do post e limpa
    $emailLogin = limparPost($_POST['email']);
    $senhaLogin = limparPost($_POST['senha']);
    $senhaLoginCript = sha1($senhaLogin);

    //CURL
    $curl = curl_init();

    //DEFINICOES DA REQUISIÇÃO
    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => [
            'secret' => '6LfNEe0fAAAAAJiKNXzQrvmoTx1rp0FqXBelutZA',
            'response' => $_POST['g-recaptcha-response'] ?? ''
        ]
    ]);

    //EXECUTA A REQUISIÇÃO
    $response = curl_exec($curl);

    //FECHA A CONEXÃO CURL
    curl_close($curl);

    //RESPONSE EM ARRAY
    $responseArray = json_decode($response, true);

    //SUCESSO DO RECAPTCHA
    $sucessoRecaptcha = $responseArray['success'] ?? false;

    if (!isset($erroLogin) &&  $sucessoRecaptcha) {
        // Verifica se existe esse usuario
        $sql = $pdo -> prepare("SELECT * FROM usuarios WHERE email=? AND senha=? LIMIT 1");
        $sql -> execute(array($emailLogin, $senhaLoginCript));
        $usuario = $sql -> fetch(PDO::FETCH_ASSOC);
        if ($usuario) {
            //Existe usuario
            //Criar um token(caracteres aleatorios com intenção de melhor identificação de cada usuario)
            $token = sha1(uniqid().date('d-m-Y-H-i-s'));

            //Atualizar o token do usuario no banco
            $sql = $pdo -> prepare("UPDATE usuarios SET token=? WHERE email=? AND senha=?");
            if ($sql -> execute(array($token, $emailLogin, $senhaLoginCript))) {
                //Guardar o token na session
                $_SESSION['TOKEN'] = $token;
                header('location: restrita.php');
            }
        } else {
            // Não existe usuario
            $erroLogin = "Usuário ou senha incorretos!";
        }
    }
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />

      <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>Login</title>

      <script>

          function validarPost() {

              //Verifica se o recaptcha foi selecionado
              if (grecaptcha.getResponse() != "") return ture;

              //ERRO: não selecionado
              alert('Selecione a caixa de "não sou um robô"');
              return false;
          }
      </script>
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
          style="
            background-color: #ffffff;
            border-radius: 0.5rem;
            padding: 0rem;
          "
        >
          <div class="row no-gutters">
            <div
              class="container-fluid col-5"
              style="
                height: 85vh;
                padding: 0rem;
                margin: 0rem;
                border-radius: 0.5rem 0rem 0rem 0.5rem;
                background-color: black;
                background-image: url(./src/img/placeholder-01.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position-x: center;
                background-position-y: center;
              "
            >
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
            <div class="container-fluid col-5">
              <form method="post" onsubmit="return validarPost()">
                <h3>Login</h3>

                  <?php if (isset($_GET['result']) && ($_GET['result']) === 'ok') { ?>
                      <div class="sucesso animate__animated animate__rubberBand">
                          Cadastrado com sucesso!
                      </div>

                      <script>
                          setTimeout(() => {
                              $('.sucesso').addClass('animate__animated animate__fadeOutUp');
                          }, 3000);
                      </script>
                  <?php } ?>

                <label for="username">Nome de usuário</label>
                <input <?php if (isset($erroLogin)) { echo 'class="erro-input"';} ?> type="text" name="email" placeholder="Email" id="username" <?php if (isset($emailLogin)) {
                    echo "value='$emailLogin'";
                } ?> required/>
                  <?php if(isset($erroLogin)) { ?>
                      <div class="erro"> <?php echo $erroLogin; ?> </div>
                  <?php } ?>

                <label for="password">Senha</label>
                <input <?php if (isset($erroLogin)) { echo 'class="erro-input"';} ?> type="password" name="senha" placeholder="Senha" id="password" <?php if (isset($senhaLogin)) {
                    echo "value='$senhaLogin'";
                } ?> required/>
                  <?php if(isset($erroLogin)) { ?>
                      <div class="erro"> <?php echo $erroLogin; ?> </div>
                  <?php } ?>

                  <br /> <br />
                  <div class="g-recaptcha" data-sitekey="6LfNEe0fAAAAAB1vHakYbEJomRv2PnkgTJfeTMO5"></div>

                  <button>Log In</button>
                <br /> <br />
                <a href="cadastrar.php">Não tem uma conta? Inscreva-se agora</a>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </body>
</html>