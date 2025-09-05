<?php 
	function conectar(): PDO {
		try {
			$host = "localhost";
			$dbname = "todo_list";
			$username = "root";
			$password = "Niciu2005#";
			$pdo = new PDO(dsn: "mysql:host=$host;dbname=$dbname", username: $username, password: $password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
			unset($pdo);
			
		} catch ( PDOException $e) {
			die("Erro na conexão: ".$e->getMessage());
		}

		return $pdo;
		
	}
	conectar();
?>