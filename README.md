1. composer create-project --prefer-dist laravel/laravel laravel_oi "8.\*"
2. cd laravel_oi
   2.1) php artisan serve (para verificar a instalação - só localmente)
3. Se foi instalado o vendor.. remover
4. Criar os arquivos do composer:
   mkdir -p docker-compose/nginx
   4.1) criar o arquivo gestao.nginx
5. docker-compose build
6. docker-compose up -d
7. docker-compose exec app bash (onde app é o nome do serviço, ver docker-compose.yml)
8. composer install
9. http://localhost:8000

Obs: Dentro da imagem app verifcar se existe o arquivo .env, caso contrário:
a) cp .env.example .env
b) php artisan key:generate
c) verificar no browser
