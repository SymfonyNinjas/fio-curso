fio-tasks
=========

A Symfony project created on November 23, 2015, 8:21 pm.

Comandos Symfony:
-----------------

Ao fazer o clone da aplicação primeiro rode o comando de instalação:

composer install


Outros Comandos:
----------------
Comando para rodar o server em modo stand-alone:

    `php app/console server:run`

Comando para limpeza de cache do sistema sem armá-los:

    `php app/console cache:clear --no-warmup`

Comando para geração de Bundles:

    `php app/console generate:bundle`

Comando para geração de Banco:

    `php app/console doctrine:database:create`

Comando para geração de Entidade:

    `php app/console doctrine:generate:entity`

Comando para limpeza de cache dos metadados das entidades:

    `php app/console doctrine:cache:clear-metadata`

Comando para limpeza de cache das querys:

    `php app/console doctrine:cache:clear-query`

Comando para limpeza de cache dos resultados de dados:

    `php app/console doctrine:cache:clear-result`

Comando para mostrar as rotas do sistema:

    `php app/console router:debug`

Comando para mostrar os serviços do sistema:

    `php app/console container:debug`

Comando para mostrar o script das diferenças das tabelas do banco de dados:

    `php app/console doctrine:schema:update --dump-sql`

Comando para atualizar as tabelas do banco de dados:

    `php app/console doctrine:schema:update --force`

Comando para geração de classes de Repositório:

    `php app/console doctrine:generate:entities NomeDoBundle`

