# Utilizando REST com Laravel

[![Laravel version](https://img.shields.io/badge/Laravel-v5.3.6-green.svg)](https://travis-ci.org/laravel/framework)
[![BeMobile project](https://img.shields.io/badge/education-BeMobile-blue.svg)](https://bemobile.cc)

Exemplo de uma aplicação utilizando o framework Laravel e arquitetura REST. 

## Aplicação para estudo

Apresentado na disciplina [AUTUBI - UFPel](http://ubiq.inf.ufpel.edu.br/au2016/doku.php).

Apresentação pode ser [vista aqui](https://docs.google.com/presentation/d/1XdqFEqol-7xwOusL3AU3RdHCtelGyOHAfFr_8GvF4VE/edit?usp=sharing).

## Desenvolvedores

Marcos Echevarria quinho@gmail.com @echevarria
Luthiano Venecian venecian@gmail.com

## Instalação

1. Configure o arquivo `.env` com as configurações do ambiente local

2. Instanlando via composer (na raiz do projeto)
    ```composer install```

3. Crie a base de dados que foi configurada no `.env`

4. Rode as migrations
```php artisan migrate```

5. Gere os seeds para a aplicação
```php artisan db:seed```

6. Rode a aplicação
```php artisan serve```
