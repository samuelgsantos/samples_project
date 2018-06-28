<?php
//ARQUIVO PARA CRIAR UMA CONEXAO COM O BANCO DE DADOS
		
		// variaveis para conexao
			$usuario = "sql3244019";
			$senha = "fAtWeZudCN";
			$servidor = "sql3.freemysqlhosting.net";
			$banco = "sql3244019";
		// codigo para criar a conexao com o banco de dados
			$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
		// informando o erro caso nao consiga efetuar a conexao
			if(! $conexao){
				die( "nao foi possivel a conexao" );
			}
		//selecionando o banco com o qual sera feito a conexao	
			//$banco_selecionado = mysqli::select_db ( string $banco); 
		// informando o erro caso nao consiga encontrar o banco de dados selecionado	
			
?>