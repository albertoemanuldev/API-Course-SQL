# PHP-APIs-Course
📚 API de Consulta ao Banco de Dados MySQLi
Este projeto é uma API desenvolvida em sala de aula com os alunos, com o objetivo de praticar conceitos de integração entre aplicações web e bancos de dados utilizando MySQLi.

🚀 Objetivo
A API permite realizar operações básicas de consulta a um banco de dados MySQL, servindo como base para o aprendizado de:

Conexão com banco de dados usando MySQLi

Estruturação de uma API simples em PHP

Retorno de dados no formato JSON

Boas práticas de organização de código

🛠 Tecnologias Utilizadas
PHP (com MySQLi)

MySQL (banco de dados relacional)

Servidor local: Laragon, mas funciona também com o XAMPP e WAMP

📁 Estrutura do Projeto
/
├── conexao.php           # Script de conexão com o banco
├── consultar.php         # Endpoint para realizar consultas
├── index.php             # Página inicial ou roteador
└── README.md             # Este arquivo

🔧 Como Usar
Clone o repositório:
Coloque os arquivos em seu servidor local (ex: pasta htdocs do Laragon).

Configure o arquivo conexao.php com as informações do seu banco:
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'nome_do_banco';

Execute o servidor local e acesse o endpoint desejado, por exemplo:
http://localhost/nome-do-projeto/consultar.php


📦 Exemplo de Resposta JSON
Se o banco tiver uma tabela chamada alunos, a resposta pode ser semelhante a:
[
  {
    "id": 1,
    "nome": "João da Silva",
    "email": "joao@email.com"
  },
  {
    "id": 2,
    "nome": "Maria Souza",
    "email": "maria@email.com"
  }
]


✅ Status
🟢 Projeto funcional e pronto para estudos e testes locais.

🙌 Agradecimentos
Desenvolvido colaborativamente em aula com os alunos, como parte prática do conteúdo de integração com banco de dados.
