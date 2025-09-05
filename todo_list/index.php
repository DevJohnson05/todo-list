<?php  
	while(true) {
		require_once __DIR__.'/functions/comandos.php';
		echo "------------------------ \n";
		echo "BEM VINDO AO TO-DO_LIST!! \n";
		echo "------------------------ \n";
		echo "Escolha o que você quer fazer:\n";
		echo "[1]- Cadastrar tarefa \n";
		echo "[2]- Visualizar suas tarefas \n";
		echo "[3]- Apagar alguma tarefa \n";
		echo "-----------------------------\n";
		$option = (int) readline(prompt: "Digite a sua escolha: ");
		
		switch ($option) {
			case 1:
				$nome_tarefa = (string) readline(prompt: "Digite o nome da tarefa: ")."\n";
				$desc_tarefa = (string) readline(prompt: "Digite a descrição da tarefa: ")."\n";
				$parameters = [
					':name' => $nome_tarefa,
					':description' => $desc_tarefa
				];
				$status = cadastrar_tarefa(parameters: $parameters) ? "Tarefa cadastrada com sucesso!" : "Falha ao cadastrar tarefa.";
				echo $status . "\n";
				
				break;
			
			case 2:
				echo "SUAS TAREFAS: \n";
				$tarefas = listar_tarefas();
				if (empty($tarefas)) {
					echo "Nenhuma tarefa cadastrada.\n";
				} else {
					foreach ($tarefas as $tarefa) {
						echo "ID: ".$tarefa['id']."\n";
						echo "Nome: ".$tarefa['name']."\n";
						echo "Descrição: ".$tarefa['description']."\n";
						echo "------------------------\n";
					}
				}
				
				break;
			case 3:
				$id_tarefa = (int) readline(prompt: "Digite o ID da tarefa que você quer apagar: ")."\n";
				$status = deletar_tarefa(id_tarefa: $id_tarefa) ? "Tarefa deletada com sucesso!" : "Falha ao deletar tarefa.";
				echo $status . "\n";
				break;
			default:
				exit("Opção inválida! \n");
				break;
		}
	}
?>