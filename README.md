# Sistema de achados e perdidos

Sistema de achados e perdidos do campus IFMS Naviraí.

## Instalação

Instalar dependencias

    composer install

criar chave de criptogafia da aplicação

    php artisan key:generate --ansi

Criar tabelas do banco

    php artisan migrate

Inserir dados no banco

    php artisan db:seed 
    php artisan db:seed --class=VoyagerDatabaseSeeder
    php artisan db:seed --class=VoyagerDummyDatabaseSeeder

Iniciar o sistema

    php artisan serve

Endereço do painel administrativo

[http://localhost:8000/admin](http://localhost:8000/admin)