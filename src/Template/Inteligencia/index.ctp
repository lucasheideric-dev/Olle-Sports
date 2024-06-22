<!-- MATEUS ESSE TRECHO AQUI DESABILITA TODAS DEPENDENCIAS DA OLLE, SEMPRE DEIXE ESSA LINHA AQUI -->
<?php $this->layout = false; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Inteligência Computacional</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!-- Import -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=default'></script>
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Meu CSS -->
  <?php echo $this->Html->css('ramos/styles.css');?>
</head>
<body class="d-flex justify-content-center align-items-center h-100 py-5">
  

  <main id="main_form" class="d-flex justify-content-center align-items-center p-4 ">
    <form class="w-100 h-100" action="javascript:mainfuzzy()">
      <div class="main-title">
        <h2>Entre com os valores para o cálculo:</h2>
      </div>
      <div class="row form-container d-flex align-items-center justify-content-center">
        <!-- Linha 01 -->
        <div class="col-lg-6 mb-4">
          <label for="preco" class="form-label">Preço do automóvel:</label>
          <input type="number" class="form-control" name="preco" id="preco">
        </div>
        <div class="col-lg-6 mb-4">
          <label for="amassado" class="form-label">Quantidade de amassados:</label>
          <input type="number" class="form-control" name="amassado" id="amassado">
        </div>
        <!-- Linha 02 -->
        <div class="col-lg-4 mb-4">
          <label for="idade" class="form-label">Idade do motorista:</label>
          <input type="number" class="form-control" name="idade" id="idade">
        </div>
        <div class="col-lg-4 mb-4">
          <label for="km" class="form-label">Quilometros rodados:</label>
          <input type="number" class="form-control" name="km" id="km">
        </div>
        <!-- Linha 03 -->
        <div class="col-lg-4 mb-4">
          <label for="ano" class="form-label">Ano do automóvel:</label>
          <input type="number" class="form-control" name="ano" id="ano">
        </div>
        <!-- Linha final -->
        <div class="col-lg-12 mt-4 d-flex align-items-center justify-content-between">
          <button onclick="mostraDetalhes()" class="btn btn-link">ver tabelas</button>
          <button type="submit" class="btn btn-success">Calcular</button>
        </div>
      </div>
    </form>
  </main>

  <main id="main_resultado" class="d-flex justify-content-center align-items-center flex-column p-4 hidden">
    <div class="main-title mb-4">
      <h2>O resultado do seu cálculo é:</h2>
    </div>
    <div class="formula d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center flex-column">
        <div>
          <p style="width: fit-content; border-bottom: 1px solid white;margin: 0;"><span id="result-r1">0,2</span> x <span id="final-r1">100</span> + <span id="result-r2">0,3</span> x <span id="final-r2">200</span> + <span id="result-r3">0,4</span> x <span id="final-r3">300</span></p>
        </div>
        <div>
          <p><span id="result-r1">0,2</span> + <span id="result-r2">0,3</span> + <span id="result-r3">0,4</span></p>
        </div>
      </div>
      <div class="ms-3">
        <p id="resultado-resultado" style="color: rgb(23, 202, 23)!important;"> = <strong id="result-final"></strong></p>
      </div>
    </div>
    <div class="main-resultado-btn d-flex justify-content-end align-items-center mt-3 w-100">
      <button type="button" onclick="window.location.reload()" class="btn btn-link">voltar</button>
      <button type="button" onclick="mostraDetalhes()" class="btn btn-info">Detalhes</button>
    </div>
  </main>

  <main id="main_detalhes" class="d-flex align-items-center justify-content-center flex-column p-4 w-75 h-fit hidden">
    <div class="main-title mb-4 d-flex align-items-center justify-content-between w-100">
      <h2>Detalhes</h2>
      <button class="btn btn-light" onclick="mostraDetalhes()">Voltar</button>
    </div>
     <div class="main-tables row d-flex align-items-center justify-content-center">
      <div class="col-lg-11">
        <table id="tabela_preco" class="table table-preco table-bordered">
          <thead>
            <tr>
              <th scope="col">Preço</th>
              <th scope="col">0</th>
              <th scope="col">2.500</th>
              <th scope="col">5.000</th>
              <th scope="col">7.500</th>
              <th scope="col">10.000</th>
              <th scope="col">12.500</th>
              <th scope="col">15.000</th>
              <th scope="col">17.500</th>
              <th scope="col">20.000</th>
              <th scope="col">22.500</th>
              <th scope="col">25.000</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Barato</th>
              <td id="preco_0_10">1</td>
              <td id="preco_0_9">0,9</td>
              <td id="preco_0_8">0,8</td>
              <td id="preco_0_7">0,7</td>
              <td id="preco_0_6">0,6</td>
              <td id="preco_0_5">0,5</td>
              <td id="preco_0_4">0,4</td>
              <td id="preco_0_3">0,3</td>
              <td id="preco_0_2">0,2</td>
              <td id="preco_0_2">0,1</td>
              <td id="preco_0_0">0</td>
            </tr>
            <tr>
              <th scope="row">Caro</th>
              <td id="preco_1_10">0</td>
              <td id="preco_1_9">0,1</td>
              <td id="preco_1_8">0,2</td>
              <td id="preco_1_7">0,3</td>
              <td id="preco_1_6">0,4</td>
              <td id="preco_1_5">0,5</td>
              <td id="preco_1_4">0,6</td>
              <td id="preco_1_3">0,7</td>
              <td id="preco_1_2">0,8</td>
              <td id="preco_1_1">0,9</td>
              <td id="preco_1_0">1</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-lg-11">
        <table id="tabela_amassados" class="table table-amassados table-bordered">
          <thead>
            <tr>
              <th scope="col">Amassados</th>
              <th scope="col">0</th>
              <th scope="col">1</th>
              <th scope="col">2</th>
              <th scope="col">3</th>
              <th scope="col">4</th>
              <th scope="col">5</th>
              <th scope="col">6</th>
              <th scope="col">7</th>
              <th scope="col">8</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Muitos</th>
              <td id="amassado_0_0">0</td>
              <td id="">0</td>
              <td id="">0</td>
              <td id="amassado_0_2">0,2</td>
              <td id="amassado_0_4">0,4</td>
              <td id="amassado_0_6">0,6</td>
              <td id="amassado_0_8">0,8</td>
              <td id="amassado_0_10">1</td>
              <td id="">1</td>
            </tr>
            <tr>
              <th scope="row">Poucos</th>
              <td id="amassado_1_10">1</td>
              <td id="">1</td>
              <td id="">1</td>
              <td id="amassado_1_8">0,8</td>
              <td id="amassado_1_6">0,6</td>
              <td id="amassado_1_4">0,4</td>
              <td id="amassado_1_2">0,2</td>
              <td id="amassado_1_0">0</td>
              <td id="">0</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-lg-11">
        <table id="tabela_idade" class="table table-idade table-bordered">
          <thead>
            <tr>
              <th scope="col">Idade</th>
              <th scope="col">20</th>
              <th scope="col">30</th>
              <th scope="col">40</th>
              <th scope="col">50</th>
              <th scope="col">60</th>
              <th scope="col">70</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Novo</th>
              <td id="idade_0_10">1</td>
              <td id="idade_0_8">0,8</td>
              <td id="idade_0_6">0,6</td>
              <td id="idade_0_4">0,4</td>
              <td id="idade_0_2">0,2</td>
              <td id="idade_0_0">0</td>
            </tr>
            <tr>
              <th scope="row">Velho</th>
              <td id="idade_1_0">0</td>
              <td id="idade_1_2">0,2</td>
              <td id="idade_1_4">0,4</td>
              <td id="idade_1_6">0,6</td>
              <td id="idade_1_8">0,8</td>
              <td id="idade_1_10">1</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-lg-11">
        <table id="tabela_km" class="table table-idade table-bordered">
          <thead>
            <tr>
              <th scope="col">Quilometragem</th>
              <th scope="col">0</th>
              <th scope="col">20.000</th>
              <th scope="col">40.000</th>
              <th scope="col">60.000</th>
              <th scope="col">80.000</th>
              <th scope="col">100.000</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Alta</th>
              <td id="km_0_0">0</td>
              <td id="">0</td>
              <td id="km_0_3">0,3</td>
              <td id="km_0_6">0,6</td>
              <td id="km_0_9">0,9</td>
              <td id="km_0_10">1</td>
            </tr>
            <tr>
              <th scope="row">Baixa</th>
              <td id="km_1_10">1</td>
              <td id="km_1_9">0,9</td>
              <td id="km_1_7">0,7</td>
              <td id="km_1_3">0,3</td>
              <td id="km_1_0">0</td>
              <td id="">0</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-lg-11">
        <table id="tabela_ano" class="table table-idade table-bordered">
          <thead>
            <tr>
              <th scope="col">Ano de fabricação</th>
              <th scope="col">2006</th>
              <th scope="col">2009</th>
              <th scope="col">2012</th>
              <th scope="col">2015</th>
              <th scope="col">2018</th>
              <th scope="col">2021</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Velho</th>
              <td id="ano_0_10">1</td>
              <td id="ano_0_6">0,6</td>
              <td id="ano_0_2">0,2</td>
              <td id="ano_0_0">0</td>
              <td id="">0</td>
              <td id="">0</td>
            </tr>
            <tr>
              <th scope="row">Novo</th>
              <td id="">0</td>
              <td id="">0</td>
              <td id="ano_1_0">0</td>
              <td id="ano_1_2">0,2</td>
              <td id="ano_1_6">0,6</td>
              <td id="ano_1_10">1</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-lg-11">
        <table class="table table-idade table-bordered">
          <thead>
            <tr>
              <th scope="col">Seguro</th>
              <th id="seguro_scope_50" scope="col">50</th>
              <th id="seguro_scope_70" scope="col">70</th>
              <th id="seguro_scope_100" scope="col">100</th>
              <th id="seguro_scope_200" scope="col">200</th>
              <th id="seguro_scope_300" scope="col">300</th>
              <th id="seguro_scope_400" scope="col">400</th>
              <th id="seguro_scope_500" scope="col">500</th>
              <th id="seguro_scope_600" scope="col">600</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Alto</th>
              <td id="seguro_0_0">0</td>
              <td>0</td>
              <td id="seguro_0_2">0,2</td>
              <td id="seguro_0_4">0,4</td>
              <td id="seguro_0_6">0,6</td>
              <td id="seguro_0_75">0,75</td>
              <td id="seguro_0_10">1</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">Baixo</th>
              <td id="seguro_1_10">1</td>
              <td>1</td>
              <td id="seguro_1_8">0,8</td>
              <td id="seguro_1_6">0,6</td>
              <td id="seguro_1_4">0,4</td>
              <td id="seguro_1_2">0,2</td>
              <td id="seguro_1_0">0</td>
              <td>0</td>
            </tr>
          </tbody>
        </table>
      </div>
     </div>
  </main>



  <!-- Meu JS -->
  <?php echo $this->Html->script('ramos/main.js');?>
  <!-- Imports -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>