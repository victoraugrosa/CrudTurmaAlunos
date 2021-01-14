# CrudTurmaAlunos

# Etapas para reproduzir a aplicação:

- Crie um banco de dados com MySQL com o nome "crud_bussola". Para testes e desenvolvimento utilizei o Php MyAdmin junto ao XAMPP para simular servidor e administrar banco de dados;
- Tenha o Framework Laravel versão 7.14.1 ou posterior instalada;
- Composer v1.9.1;
- Depois de criado o banco de dados e adicionado as configurações ao ".env" do Laravel, executar o comando "php artisan migrate:refresh --seed" na raiz do projeto, para criar as tabelas através do migration do Laravel;
- Para popular as tabelas, utilizar o comando "php artisan db:seed --class=TurmasTableSeeder" e posteriormente "php artisan db:seed --class=AlunosTableSeeder", para adicionar os registros, respectivamente, de turmas e alunos;
- Para ver a aplicação sendo executada, utilizar o comando "php artisan serve" para levantar servidor localhost, na porta 8000, e acessar o crud do Projeto no navegador;
- Pode ser acessado através da URL: http://localhost:8000/;
- Projeto se encontra no github, na branch "BussolaCrud";
#Qualquer dúvida estou a disposição.
