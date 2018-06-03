<?php
//ARQUIVO PARA CRIAR UMA CONEXAO COM O BANCO DE DADOS
		
		// variaveis para conexao
			$usuario = "root";
			$senha = "";
			$servidor = "localhost";
			$banco = "interstyle_samples";
		// codigo para criar a conexao com o banco de dados
			$conexao = mysql_connect($servidor,$usuario,$senha);
		// informando o erro caso nao consiga efetuar a conexao
			if(! $conexao){
				die( "nao foi possivel a conexao" );
			}
		//selecionando o banco com o qual sera feito a conexao	
			$banco_selecionado = mysql_select_db($banco);
		// informando o erro caso nao consiga encontrar o banco de dados selecionado	
			
?>