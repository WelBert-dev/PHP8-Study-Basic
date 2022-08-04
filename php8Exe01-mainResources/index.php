<?php 
	// Tipos primitivos:
		// String 
		// Integer
		// Float
		// Boolean
		// Array
		// Object
		// Null

	// funções commom:
		// var_dump() = faz um describe de um retorno (se for array mostra a estrutura, se for boolean o resultado.. e etc)

	// Manipulando strings (funções prontas)
		// strlen($palavra) = quantidade de char de uma string.
		// str_word_count($palavra) = conta a quantidade de palavras de uma string.
		// strrev($palavra) = reverse de uma string (string = gnirts).
		// strpos($frase, flag-busca) = procura a posição(começando em 0) da primeira ocorrência flag na string ou false se n match.
		// str_replace("Palavra-substituta", "qual-vai-ser-substituida", String-Alvo)
	
	// Funções matemáticas (lib math)
		// min($Array-numeros) = retorna o menor valor.
		// max($Array-numeros) = retona o maior valor.
		// abs($numero) = retorna o valor positivo (absolut) de um número (-20 = 20).
		// sqrt($numero) = retorna a raiz quadrada do numero.
		// round($float) = arredonda o valor (.5> retorna o valor arredondado para cima, .5< retorna para baixo).
		// rand() = retorna um numero aleatorio (sem parametro).
			// parametros: rand(1, 10) = retorna um numero entre 1 e 10.
	
	// Constantes (funcionam com arrays também).
		// define(nome-da-constante, valor).
			// obs: ao utilizar não colocar $ no inicio (echo nome-da-constante).
			// escopo: global
	
	// Operadores (iguais de outras linguagens, com a diferença):
		// Sequência (concatenação): . == +

	//  IF ELSE ELSEIF SWITCH CASE (iguais de outras linguagens).

	// Loopings (iguais de outras linguagens).

	// Funções (function x(){}):
		// mais de 1000 funções prontas link w3Schools: https://www.w3schools.com/php/php_functions.asp
		// Não é necessário informar o tipo primitivos.
		// Os parametros começam com $
		// mixed == tipo primitivo genérico (equivalente a não passar o tipo na função.

	// Arrays (array("pamonha", "jubileu")):
		// count($Array) = quantidade

		// sort($Array) = organiza em ASC, rsort($Array) em DESC, asort($Array) em ordem de acordo com o valor não a key em ASC,arsort($Array) de acordo com o valor em DESC, ksort($Array) organiza pela key, krsort($Array) de acordo com a key em DESC.

		// foreach($carros as $carro).
		// Array chave => valor: array("Pamonha"=>"10", "Paçoka"=>"2") o indice é a chave.
		// foreach($Array as $chave => $valor)
	
	// SuperGlobais referência: https://www.w3schools.com/php/php_superglobals.asp
		//Conceito: Variaveis pré-definidas, sempre acessíveis independentemente do escopo.

		//$GLOBAIS:
			// $GLOBALS
			// $_SERVER
			// $_REQUEST
			// $_POST
			// $_GET
			// $_FILES
			// $_ENV
			// $_COOKIE
			// $_SESSION

		//$GLOBALS referência: https://www.w3schools.com/php/php_superglobals_globals.asp
			//Conceito: Definir variáveis acessível em todo o escopo do program.

			// $GLOBALS['Nome-da-var'] = $GLOBALS['outra-var'] + $GLOBALS['outra-var']
				// Apartir de agora essas variaveis dão globais e podem ser acessíveis em qualquer escopo.
			// Atalho:
				// global $a, $b, $c; -> retorna o mesmo comportamento anterior.
		
		//$_SERVER referência: https://www.w3schools.com/php/php_superglobals_server.asp
			// Conceito: guarda informações sobre o cabeçalho da requisição, sobre os caminhos, os locais do script e etc 
			// $_SERVER['PHP_SELF'] = retorna o caminho do arquivo que chamou.
			// $_SERVER['REMOTE_ADDR'] = retorna o endereço ip do host que requisitou.
			// $_SERVER['HTTP_USER_AGENT'] = retorna variais informações do host que requisitou (Navegador, S.O, Arquitetura...)

		//$_REQUEST referência: https://www.w3schools.com/php/php_superglobals_request.asp
			//Conceito:

		//$_POST referência: https://www.w3schools.com/php/php_superglobals_post.asp
			//Conceito: pegar informações enviadas através de um formulário (body)

		//$_GET referência: https://www.w3schools.com/php/php_superglobals_get.asp
			//Conceito: Pegar informações do cabeçalho HTTP da URL
			// localhost/projeto/index.php?nome=Wellison 
				//$_GET['nome']


		//$_FILES referência: https://www.w3schools.blog/php-file-upload
			//Conceito: 

		//$_ENV referência: https://www.w3schools.in/php/environment-variables
			//Conceito: 
		
		//$_COOKIE referência: https://www.w3schools.com/php/php_cookies.asp
			//Conceito: 

		//$_SESSION	 referência: https://www.w3schools.com/php/php_sessions.asp
			//Conceito: 

	
	// Validação simples de formulários (Ant-SQLInjection):
		// trim($valor) = elimina espaços no começo e no fim de uma string (serve também para \n <br> e etc..)
		// stripslashes($valor) = elimina as barras de uma string
		// htmlspecialchars($valor) = elimina caracteres especiais de uma string 


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Primeiro programa</title>
</head>
<body>
	<h1><?php  echo $digaOla;?></h1>
</body>
</html>