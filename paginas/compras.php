<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../CSS/Style.css">
  <link rel="stylesheet" href="../CSS/menu.css">
  <meta name="author" content="Mauricio T Welter">
  <title>Senac Boxe</title>
  <link rel="icon" href="../Imagens/logoMini.png" type="Logo">
</head>

<body>

  <script src="../script/Script.js"></script>

  <!-- cabeçalho -->
  <?php require('header.php'); ?>

  <!-- carousel -->
  <?php require('carousel.php'); ?>


  <!--Seção De Compras-->
  <section class="container mt-5">
    <h2 class="text-center text-danger mb-4">Compre Aqui Seu Equipamento</h2>
    <div class="row">

      <!-- Item 1: Luvas de Boxe -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Imagens/luvas.jpg" height="300px" width="300px" alt="Luvas de Boxe" class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Luvas de Boxe</h3>
            <p class="card-text">Luvas de alta qualidade para treinamento.</p>
            <h4 class="card-text text-danger">R$ 99,99</h4>
            <button class="btn btn-danger btn-block" onclick="addToCart('luvas')">Adicionar ao Carrinho</button>
          </div>
        </div>
      </div>

      <!-- Item 2: Protetor Bucal -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Imagens/protetorB.jpg" height="300px" width="300px" alt="Protetor Bucal"
            class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Protetor Bucal</h3>
            <p class="card-text">Proteja seus dentes durante os treinos.</p>
            <h4 class="card-text text-danger">R$ 19,99</h4>
            <button class="btn btn-danger btn-block" onclick="addToCart('protetorBucal')">Adicionar ao Carrinho</button>
          </div>
        </div>
      </div>

      <!-- Item 3: Saco de Pancada -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Imagens/sacoPancada.png" height="277px" width="300px" alt="Saco de Pancada"
            class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Saco de Pancada</h3>
            <p class="card-text">Treine sua potência de soco com nosso saco de pancada.</p>
            <h4 class="card-text text-danger">R$ 149,99</h4>
            <button class="btn btn-danger btn-block" onclick="addToCart('sacoPancada')">Adicionar ao Carrinho</button>
          </div>
        </div>
      </div>

      <!-- Item 4: Bandagens -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Imagens/atadura.jpg" height="300px" width="300px" alt="Bandagem de Boxe" class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Bandagem de Boxe</h3>
            <p class="card-text">Bandagem elástica para proteger as mãos e os pulsos.</p>
            <h4 class="card-text text-danger">R$ 14,99</h4>
            <button class="btn btn-danger btn-block" onclick="addToCart('bandagens')">Adicionar ao Carrinho</button>
          </div>
        </div>
      </div>

      <!-- Item 5: Protetor de Cabeça -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Imagens/protetor_cabeca.jpg" height="300px" width="300px" alt="Protetor de Cabeça"
            class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Protetor de Cabeça</h3>
            <p class="card-text">Proteja sua cabeça e rosto durante os sparrings.</p>
            <h4 class="card-text text-danger">R$ 49,99</h4>
            <button class="btn btn-danger btn-block" onclick="addToCart('protetorCabeca')">Adicionar ao
              Carrinho</button>
          </div>
        </div>
      </div>

      <!-- Item 6: Short de Boxe -->
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="../Imagens/short.jpg" height="277px" width="300px" alt="Short de Boxe" class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Short de Boxe</h3>
            <p class="card-text">Short resistente e confortável para treinos de alta intensidade.</p>
            <h4 class="card-text text-danger">R$ 34,99</h4>
            <button class="btn btn-danger btn-block" onclick="addToCart('shortBoxe')">Adicionar ao Carrinho</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <h2 class="text-center text-danger">Carrinho de Compras</h2>
      <ul id="cart" class="list-group"></ul>
      <div class="text-center mt-3">
        <h4>Total: <span id="total" class="text-danger">R$ 0,00</span></h4>
        <button class="btn btn-danger mt-3 mx-2" onclick="checkout()">Finalizar Compra</button>
        <button class="btn btn-secondary mt-3 mx-2" onclick="clearCart()">Limpar Carrinho</button>
      </div>
    </div>
  </section>

  <!--Espaço entre Grafico e Mapa-->
  <div class="mt-3"></div>


  <div class="footer-linha-container"></div>

  <!-- footer -->
  <?php require('footer.php'); ?>
  
</body>

</html>