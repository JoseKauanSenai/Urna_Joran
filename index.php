<?php

include('conexao.php');

$select = " SELECT * FROM candidatos ";
$select1 = " SELECT * FROM votacao ";

$resultado = $conn->query($select);
$resultado1 = $conn->query($select1);

?>

<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<title>Vote agora</title>
		<link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
	</head>
	<body>
        <audio id="audioConfirmar" src="sons/numero.mp3"></audio>
        
        <audio id="audioNumero" src="sons/urna.mp3"></audio>

		<form class="main flex" method="get">
			<!-- <div>Nº título <input required type="number" name="nTitEleitor"/></div> -->
			<div class="flex urna">
				<div class="tela flex">
                    
					<?php
					if( isset($_GET['nNum'])){

                        echo '<div class="fim">FIM</div>';
						
                        
						
					}else{

						echo '
						<div class="input-foto flex">
						<div>
							<h3>SEU VOTO PARA</h3>
                            <h3>PREFEITO</h3>
							<input type="number" name="nNum"/>
                            
						</div>
						<div class="flex foto-nome">
							<img src="img/candidato.jpg" width="150px"/>
							<div id="nome"></div>
						</div>
					</div>
					
					<div class="info flex">
						<h1>DIGITE O NÚMERO</h1>
					</div>';
						
					}
					
					?>
				
				</div>
				<div class="teclado flex">
					<div class="numeros flex">
						<btn onclick="confirma()" data-value="1">1</btn>
						<btn onclick="confirma()" data-value="2">2</btn>
						<btn onclick="confirma()" data-value="3">3</btn>
						<btn onclick="confirma()" data-value="4">4</btn>
						<btn onclick="confirma()" data-value="5">5</btn>
						<btn onclick="confirma()" data-value="6">6</btn>
						<btn onclick="confirma()" data-value="7">7</btn>
						<btn onclick="confirma()" data-value="8">8</btn>
						<btn onclick="confirma()" data-value="9">9</btn>
						<btn onclick="confirma()" data-value="0">0</btn>
					</div>
                    
					<div>
						<btn data-branco="branco">BRANCO</btn>
						<btn data-limpar="corrige">CORRIGE</btn>
						<input type="submit" class="numeros" onclick="numero()" value="CONFIRMA"/>
                        
					</div>
				</div>
			</div>
		</form>
	</body>
</html>