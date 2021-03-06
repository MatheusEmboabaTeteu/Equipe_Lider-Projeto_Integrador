<html>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm fixed-top">
    <div class="my-0 mr-md-auto font-weight-normal">
      <img class="card-img-overlay" style="border-radius: 35px;" src="imagens/logo.jpeg" width="150px">
    </div>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="Menu">Página Inicial</a>
      <a class="p-2 text-dark" href="Empresa">Empresa</a>
      <a class="p-2 text-dark" href="Conteudos">Conteúdos</a>
      <a class="p-2 text-dark" href="Contato">Contato</a>
      <a class="p-2" href="Carrinho">
        <img class="figure figure-caption" src="imagens/carrinho.png" width="30px">
      </a>
    </nav>
    <a class="btn btn-outline-primary" href="Logon"><?php echo $this->acc_status;?></a>
  </div>

  <?php $data = $this->showFile($_GET["i"]);?>

  <div class="ml-5" style="margin-top: 8rem">
    <h1>
      <a href="List_Item?i=<?php echo $data["conteudo"];?>" class='btn btn-outline-primary rounded-circle'><b><-</b></a>
      <?php echo $data["nome"];?>
    </h1>
    <hr class="mr-5">
    <br>
      <h3><u>Descrição</u></h3>
      <h5 class="text-justify"><?php echo $data["descrip"];?></h5>
  </div>
</body>
</html>