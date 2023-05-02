<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Conecta ao banco de dados
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "biocapilar";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verifica se a conexão foi estabelecida
  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  }

$sql = "INSERT INTO teste (nome, mCidade, minha_cidade, loja, nome_loja, cLoja, cidade_loja)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $nome, $mCidade, $minha_cidade, $loja, $nome_loja, $cLoja, $cidade_loja);
$nome = $_POST["nome"];
$mCidade = $_POST["mCidade"];
$minha_cidade = $_POST["minha_cidade"];
$loja = $_POST["loja"];
$nome_loja = $_POST["nome_loja"];
$cLoja = $_POST["cLoja"];
$cidade_loja = $_POST["cidade_loja"];
$dia = date('Y/d/m ', strtotime($dia));

  $stmt->execute();

  // Verifica se a inserção foi bem sucedida
  if ($stmt->affected_rows > 0) {
  } else {
    
  }

  // Fecha a conexão com o banco de dados
  $stmt->close();
  $conn->close();

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- arquivos style -->
  <link href="./css/style.css" rel="stylesheet">
  <!--<link href="./css/darkMode.css" rel="stylesheet"> -->

  <title>Calendario</title>
</head>
  <!-- dark mode -->
  <!-- dark 
  <div class="toggle">
    <input id="switch" type="checkbox" name="theme">
    <label for="switch">Toggle</label>
  </div>
mode -->
<!-- -------- -->

<body>
  <div id="container">
      <div id="header">
        <div id="monthDisplay"></div>

        <div>
          <button id="backButton">Voltar</button>
          <button id="nextButton">Próximo</button>
        </div>
          
      </div>

      <div id="weekdays">
        <div>Domingo</div>
        <div>Segunda-feira</div>
        <div>Terça-feira</div>
        <div>Quarta-feira</div>
        <div>Quinta-feira</div>
        <div>Sexta-feira</div>
        <div>Sábado</div>
      </div>


      <!-- div dinamic -->
      <div id="calendar" ></div>

   
  </div>

  <div id="newEventModal">
    <form method ="post">

    <h4>Colaborador que preencheu a Rota:</h4>
    <select name="mCidade" id ="mCidade">
      <option value="aquiraz">Aquiraz</option>
      <option value="cascavel">Cascavel</option>
      <option value="maranguape">Maranguape</option>
      <option value="russas">Russas</option>
      <option value="horizonte">Horizonte</option>
      <option value="beberibe">Beberibe</option>
      <option value="fortaleza">Fortaleza</option>
      <option value ="itaitinga">Itaitinga</option>
      <option value="pacajus">Pacajus</option>
      <option value ="eusebio">Eusebio</option>
      <option value ="chorozinho">Chorozinho</option>
      <option value="morada nova">Morada Nova</option>
      <option value="pacatuba">Pacatuba</option>
      <option value="pindoretama">Pindoretama</option>
      <option value ="redencao">Redenção</option>
    </select>  
     
    <h4>Nome do Promotor:</h4>
  <input type="text" name="nome" id="nome" placeholder="Seu nome"/>

    <h4>Minha Cidade:</h4>
    <select name="mCidade" id ="mCidade">
      <option value="aquiraz">Aquiraz</option>
      <option value="cascavel">Cascavel</option>
      <option value="maranguape">Maranguape</option>
      <option value="russas">Russas</option>
      <option value="horizonte">Horizonte</option>
      <option value="beberibe">Beberibe</option>
      <option value="fortaleza">Fortaleza</option>
      <option value ="itaitinga">Itaitinga</option>
      <option value="pacajus">Pacajus</option>
      <option value ="eusebio">Eusebio</option>
      <option value ="chorozinho">Chorozinho</option>
      <option value="morada nova">Morada Nova</option>
      <option value="pacatuba">Pacatuba</option>
      <option value="pindoretama">Pindoretama</option>
      <option value ="redencao">Redenção</option>
    </select>  
      <h4>Não encontrou sua cidade?:</h4>
  
      <input type="text" name="minha_cidade" id="minha_cidade" placeholder="Digite o nome da sua cidade"/>

      <h4>Loja:</h4>
    <select name ="loja" id ="loja">
      <option value="5">5 COSBEL</option>
      <option value="1964">1964  COSBEL AGUANAMBI</option>
      <option value="1926">1926 COSBEL MEIRELES</option>
      <option value="1965">1965 COSBEL CENTRO BARAO RIO</option>
      <option value="1966">1966 COSBEL MONTESE</option>
      <option value="1967">1967  COSBEL ALDEOTA</option>
      <option value="1968">1968 COSBEL W.SOARES</option>
      <option value="1969">1969 COSBEL MONSENHOR TABOSA</option>
      <option value="1971">1971 COSBEL NORT SHOPING</option>
      <option value="1889" >1889	COMETA FL10 JULIO LIMA</option>
      <option value= "1572">1572	COMETA FL05 J. WALTER</option>
      <option value="1570">1570   COMETA FL03 PQ MANIBURA OLIV PAIVA</option>
      <option value="1571">1571 	COMETA FL04 GENIBAÚ HENRIQUE JORGE<option>
      <option value = "1573"> 1573	COMETA FL06 PINTO MADEIRA</option>
      <option value="1574">1574	COMETA ITAPERI CD</option>
      <option value ="1971">1971  COSBEL NORT SHOPING</option>
      <option value="1889" >1889	COMETA FL10 JULIO LIMA</option>
      <option value="1572">1572		COMETA FL05 J. WALTER</option>
      <option value= "1570">1570  COMETA FL03 PQ MANIBURA OLIV PAIVA</option>
      <option value = "1571">1571	COMETA FL04 GENIBAÚ HENRIQUE JORGE<option>
      <option value="1573" > 1573	COMETA FL06 PINTO MADEIRA</option>
      <option value="1574">1574 COMETA ITAPERI CD</option>
      <option value="2008" >2008  IAP COSMETICOS PRAÇA LJ 26</option>
      <option value="2114">2114   IAP GAL.SAMPAIO LJ 03</option>
      <option value ="2115">2115  IAP GUILHERME ROCHA -LJ 04</option>
      <option value="2116">2116   IAP DES.LEITE ALBUQ<option>
      <option value="2117">2117   IAP BAR. DO R. BRANCO</option>
      <option value = "2118">2118 IAP MARIA TOMASIA LJ 13</option>
      <option value= "2119">2119  IAP SHOP. BENFICA LJ 18</option>
      <option value = "2120">2120 IAP BR.DO RIO BRANCO - LJ 24</option>
      <option value= "2122">2122  IAP GAL. SAMPAIO - LJ 31</option>
      <option value="2556" >2566  IAP NORTH SHOPPING LJ 38</option>
      <option value="2514">2514   IAP MESSEJANA SHOPPING LJ 37<option>
      <option value="2655">2655   IAP PARANGABA LJ 39</option>
      <option value= "3176">3176  IAP VIA SUL LJ 15</option>
      
      
      
    </select>

    <h4>Não achou sua loja?:</h4>
  
      <input type="text" name="nome_loja" id="nome_loja" placeholder="45690 LOJA A SHOP BENFICA"/>
    <h4>Cidade da Loja:</h4>
    <select name="cLoja" id ="cLoja">
      <option value="aquiraz">Aquiraz</option>
      <option value="cascavel">Cascavel</option>
      <option value="maranguape">Maranguape</option>
      <option value="russas">Russas</option>
      <option value="horizonte">Horizonte</option>
      <option value="beberibe">Beberibe</option>
      <option value="fortaleza">Fortaleza</option>
      <option value ="itaitinga">Itaitinga</option>
      <option value="pacajus">Pacajus</option>
      <option value ="eusebio">Eusebio</option>
      <option value ="chorozinho">Chorozinho</option>
      <option value="morada nova">Morada Nova</option>
      <option value="pacatuba">Pacatuba</option>
      <option value="pindoretama">Pindoretama</option>
      <option value ="redencao">Redenção</option>
    </select>  
   
    
      <h4>Não encontrou sua cidade?:</h4>
  
      <input type="text" name="cidade_loja" id="cidade_loja" placeholder="Digite o nome da cidade da loja"/>

    <button id="saveButton"> Salvar</button>
    <button id="cancelButton">Cancelar</button>
  </div>

  <div id="deleteEventModal">
    <h2>Evento</h2>

    <div id="eventText"></div><br>


    <button id="deleteButton">Deletar</button>
    <button id="closeButton">Fechar</button>
  </div>

</form>
  <div id="modalBackDrop"></div>


  <script src="scripts/darkMode.js"></script>
  <script src="./scripts/main.js"></script>
  
</body>
</html>