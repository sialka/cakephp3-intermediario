# CakePHP 3.5 Intermediario

## 1. Criando Projeto

```bash
$ composer create-project --prefer-dist cakephp/app:^3.5 app
```

## 2.  Conectar o database

```sql
create database cakephp_intermediario
```
## 3.  Instalar o plugin

Instalando tema via composer

```bash
$  composer require cakephp-brasil/twitter-bootstrap
```

config\bootstrap.php

```PHP
...
Plugin::load('TwitterBootstrap');
```

src\View\AppView.php

```PHP
    public function initialize()
    {
        $this->loadHelper('Form', ['className' =>  'TwitterBootstrap.Form']);
    }
```
src\controller\AppController

* Colocar no controller criado no AppController não funcionou

```PHP
  public function initialize()
    {
    
    ...
    $this->viewBuilder()->theme('TwitterBootstrap');
        $this->viewBuilder()->layout('adminlte');
    }
```
publicando o tema para o cake

```bash    
    $ cake TwitterBootstrap.publish all
```

Ajuda na internet:

https://webdevbr.com.br/configurar-o-cakephp-para-usar-o-twitter-bootstrap-automaticamente


## 4. Criando as tabelas


$ bin\cake bake migration CreateProducts

no arquivo criado add as colunas da table

$ bin\cake bake migration CreateCategories

Para criar relação entre as tabelas de muitos para muitos

$ bin\cake bake migration CreateCategoriesProducts

$ bin\cake bake migration CreateStockIn

$ bin\cake bake migration CreateStockOut

$ bin\cake bake migration CreateStock

Criar as tabelas

$ bin\cake migrations migrate



