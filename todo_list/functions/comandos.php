<?php  
	require_once __DIR__.'/../database/conexao.php';
	
	$conexao = conectar();

	function cadastrar_tarefa (array $parameters) {
		global $conexao;
		try {
			if (empty($parameters[':name']) || empty($parameters[':description'])) {
				throw new InvalidArgumentException("Nome e descrição da tarefa não podem ser vazios.");
			}
			$sql = "INSERT INTO task (name, description) VALUES ( :name, :description)";
			$stmt = $conexao->prepare(query: $sql);
			$stmt->execute(params: $parameters);
			return true;
			unset($conexao);
			unset($stmt);
			unset($sql);
			unset($parameters);
		} catch (PDOException | InvalidArgumentException $e) {
			echo "Erro: ".$e->getMessage()."\n";
			return false;
		}
		
	}
	
	function listar_tarefas(): array {
		global $conexao;
		$sql = "SELECT * FROM task";
		$stmt = $conexao->prepare(query: $sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
		unset($conexao);
		unset($stmt);
		unset($sql);
		
	}

	function deletar_tarefa(int $id_tarefa): bool {
		global $conexao;
		try {
			if ($id_tarefa <= 0) {
				throw new InvalidArgumentException(message: "ID da tarefa deve ser um número positivo.");
			}
			$sql = "DELETE FROM task WHERE id = :id";
			$stmt = $conexao->prepare(query: $sql);
			$stmt->bindParam(param: ':id', var: $id_tarefa, type: PDO::PARAM_INT);
			$stmt->execute();
			
			return true;
			unset($conexao);
			unset($stmt);
			unset($sql);
			unset($id_tarefa);
		} catch (PDOException | InvalidArgumentException $e) {
			echo "Erro: ".$e->getMessage()."\n";
			return false;
		}
		
	}
	

	
?>