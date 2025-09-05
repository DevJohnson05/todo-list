# Todo List

Este projeto é uma aplicação simples de lista de tarefas (todo-list) desenvolvida em PHP, com o objetivo de fixar os conceitos de PDO (PHP Data Objects) para manipulação de banco de dados.

> **Atenção:** Este projeto não possui interface gráfica. Toda interação é realizada via terminal.

## Funcionalidades

- Adicionar novas tarefas à lista
- Marcar tarefas como concluídas
- Excluir tarefas
- Visualizar todas as tarefas cadastradas

## Tecnologias Utilizadas

- **PHP**: Lógica de backend e integração com banco de dados
- **PDO**: Interface para acesso seguro ao banco de dados
- **MySQL**: Banco de dados relacional para armazenamento das tarefas

## Como Executar

1. Clone o repositório:
   ```bash
   git clone https://github.com/DevJohnson05/todo-list.git
   ```
2. Configure o banco de dados MySQL:
   - Crie um banco de dados chamado `todo_list`.
   - Importe o arquivo de estrutura (se houver).
3. Atualize as credenciais de acesso ao banco no arquivo de configuração PHP.
4. Execute os scripts PHP diretamente pelo terminal:
   ```bash
   php index.php
   ```
   > Certifique-se de ter o PHP instalado e configurado corretamente no seu sistema.

## Estrutura dos Arquivos

- `index.php` — Script principal que exibe e gerencia as tarefas via terminal
- `conexao.php` — Conexão com o banco de dados via PDO
- `README.md` — Documentação do projeto

## Aprendizados

- Utilização do PDO para operações CRUD
- Boas práticas de segurança em consultas SQL
- Estruturação de projetos PHP para iniciantes
- Desenvolvimento de aplicações PHP sem interface gráfica, utilizando apenas o terminal

## Contribuição

Sinta-se à vontade para abrir issues ou enviar pull requests com sugestões de melhorias!

## Licença

Este projeto está licenciado sob a MIT License.

---

Projeto feito por [DevJohnson05](https://github.com/DevJohnson05).
