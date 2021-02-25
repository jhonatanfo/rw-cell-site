<div class="menu">
  <div class="container">
    <div class="row sem-espaco">
      <div class="col-md-12 sem-espaco">
        <a href="index.php">
          <i class="logo"></i>
        </a>
        <button class="nav-tgl" type="button" aria-label="toggle menu">
          <span aria-hidden="true"></span>
        </button>
        <nav class="nav">
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="empresa.php">EMPRESA</a></li>
            <li><a href="servicos.php">SERVIÇOS</a></li>
            <li><a href="lojas.php">LOJAS</a></li>
            <li><a href="fale-conosco.php">FALE CONOSCO</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<script>
  const menu = document.querySelector(".menu");
  const btn = menu.querySelector(".nav-tgl");

  btn.addEventListener("click", (evt) => {
    menu.classList.toggle("active");
  });
</script>