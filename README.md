## Um crud simples

### Tecnologias

* Laravel
* Laravel Sail
* Bootstrap
* Bootstrap Icons

### Sail

é uma forma rápida de criar aplicações dockerizadas no Laravel, muito útil pois evita de escrever o Dockerfile ou o compose.yml na mão

#### Passo a passo para criar um projeto usando o Laravel Sail

1. criar um projeto novo

```sh
docker run --rm -v $(pwd):/app -w /app composer create-project --prefer-dist laravel/laravel <project_name>
```

2. entrar na pasta do projeto

```sh
cd <project_name>
```

3. installar as dependências

```sh
docker run --rm -v $(pwd):/app -w /app composer install
```

4. instalar o Sail

```sh
docker run --rm -it -v $(pwd):/app -w /app php sh
```

Dentro do container

```sh
php artisan sail:install
exit
```

O sail vai perguntar quais serviços você deseja configurar, ele tem vários disponiveis que podem ser vistos na documentação. Nesse projeto usei apenas o Mysql.

5. Mudar as permissões do projeto

```sh
sudo chown -R $USER:$USER $(pwd)/<project_name>
```

Esse passo só vai precisar ser feito uma fez, uma vez configurado o Sail cria um user dentro do container que tem as mesmas permissões que o $USER.

6. Executando o projeto

```sh
./vendor/bin/sail up
```
