<p align="center">
   <img src="https://www.beacademy.com.br/wp-content/uploads/2019/11/Logo-Topo.png" /> 
</p>

<h1 align="center">Projeto individual Be Academy - Paylivre</h1>
<p align="center">
 <a href="#o-desafio">Desafio</a> •
    <a href="#screenshot">Screenshot</a> •
 <a href="#tecnologias">Tecnologias</a> •
 <a href="#pré-requisitos">Pré Requisitos</a> •
 <a href="#clonar-o-repositório">Clonar repositório</a> •
 <a href="#migração-de-tabelas-do-banco-de-dados">Migração de tabelas do banco de dados</a> •
 <a href="#iniciando-projeto">Iniciando projeto</a> •
 <a href="#autor">Autor</a>
</p>

---

<br>

### O Desafio

Criar um CRUD em PHP, utilizando Laravel
<br>O sistema deverá possuir autenticação
<br>Utilizar o banco de dados Mysql para criar uma tabela - de sua preferência, com 10 atributos
<br>O CRUD deve conter os métodos de Insert, Update, Delete e Read dessa tabela
<br>As ações deverão ser realizadas através de uma página web, portanto o sistema deverá conter um frontend que se comunique com o backend
<br>A solução deve ter pelo menos 30% de testes unitários
<br>O projeto deverá ser armazenado no repositório do github

### Screenshot

<h1 align="center">
<img alt="demo" title="Screenshot" src="screenshot.gif" height="450" />
</h1>

### Tecnologias:

-   ✔️ PHP
-   ✔️ Laravel 9
-   ✔️ Bootstrap
-   ✔️ MariaDB

### Pré Requisitos

-   Antes de iniciar o projeto, você vai precisar das seguintes ferramentas:

    -   ✔️ [PHP](https://www.php.net/manual/pt_BR/install.php)
    -   ✔️ [Composer](https://getcomposer.org/download/)
    -   ✔️ [Git](https://git-scm.com/)
    -   ✔️ [MariaDB](https://mariadb.org/download/)

### Clonar o repositório

```
git clone https://github.com/ThiagoGalhardo/beacademy-devstart-projeto-individual.git
```

Depois de clonado, vamos acessar o projeto

```
cd beacademy-devstart-projeto-individual
```

Instalando Dependências

```
composer update
```

Configurar arquivo .env
Vá até o arquivo .env.exemple e renomeie para .env
Insira usas credenciais de acesso ao banco de dados
Por exemplo:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_laravel
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

Agora precisamos gerar uma chave da aplicação que fica no campo APP_KEY.

```
php artisan key:generate
```

### Migração de tabelas do banco de dados

Após esses passo vamos agora criar nossas tabelas do nosso banco de dados para acessar os dados das jogadas que iremos guardar nele.

```
php artisan migrate
```

E vamos popular as tabelas com dados ficticios (opcional)

```
php artisan db:seed
```

### Iniciando projeto

Iniciar projeto

```
php artisan serve
```

Para acessar a aplicação abra o navegador e digite o endereço

```
localhost:8000
```

### Autor

<img alt="Thiago Galhardo" title="Thiago Galhardo" src="https://avatars.githubusercontent.com/u/70352885?v=4" height="100" width="100" />

Feito com 💜 por Thiago Galhardo 👋

[![LinkedIn Badge](https://img.shields.io/badge/-Thiago_Galhardo-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/thgalhardo/)](https://www.linkedin.com/in/thgalhardo/)
[![GitHub Badge](https://img.shields.io/badge/-Thiago_Galhardo-gray?style=flat-square&logo=GitHub&logoColor=white&link=https://github.com/ThiagoGalhardo/)](https://github.com/thiagogalhardo/)
