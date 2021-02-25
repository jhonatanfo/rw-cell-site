<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RW Cell</title>

  <!-- Script -->
  <?php include 'style-internas.php';?>
  <!-- / Script -->     
  
  <link href="content/css/fale-conosco.css" rel="stylesheet">

</head>

<body>

  <!-- MENU -->
  <?php include 'menu.php';?>
  <!-- / MENU -->

  <section class="banner-interna lojas-internas">
    <div class="container">
      <div class="row">
        <div class="col-md-12 box-banner-interna">
          <h1>Fale Conosco</h1>
        </div>
      </div>
    </div>
  </section>
 
  <section class="fale-conosco-orcamento">
    <div class="container">
      <div class="row">
        <div class="col-md-5 bg-mensagem-box">
          <h2>RW Cell</h2>
          <p>
            Av. Prof. Alfonso Bovero, 1169 - Pompeia<br>
            (11) 3868-1077<br>
            rweletronica@terra.com.br
          </p>
          <button>Whatsapp</button>
        </div>
        <div class="col-md-7 bg-mensagem">
          <h3>Envie sua mensagem</h3>

          <form>

            <label>
              <input class="nome" type="text" id="nome" placeholder="Nome completo">
              <i class="icon-form-nome"></i>
            </label>

            <label>
              <input class="telefone" type="tel" id="telefone" placeholder="Telefone">
              <i class="icon-form-tel"></i>
            </label>

            <label>
              <input class="email" type="email" id="email" placeholder="Email">
              <i class="icon-form-email"></i>
            </label>

            <label>
              <input class="mensagem" type="text" id="mensagem"
                placeholder="Como podemos te ajudar? Escreva aqui a sua mensagem">
              <i class="icon-form-msg"></i>
            </label>

            <button>Enviar</button>

          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- marcas -->
  <?php include 'marcas.php';?>
  <!-- / marcas -->

  <!-- contato-home -->
  <?php include 'contato-home.php';?>
  <!-- / contato-home -->

  <!-- footer -->
  <?php include 'footer.php';?>
  <!-- / footer -->

  <!-- Script -->
  <?php include 'script-internas.php';?>
  <!-- / Script -->

</body>

</html>