 
## eMarket - E-Commerce para Supermercados

O sistema tem como objetivo ser um e-commerce gerenciavel que facilite o processo de vendas de Supermercados.

### Ferramentas e Tecnologias Utilizadas

* **Bootstrap 3.3.7 ->**       http://getbootstrap.com/
* **IDE NetBeans 8.2 ->**      https://netbeans.org/
* **Mysql 5.7.14 ->**          https://dev.mysql.com/doc/refman/5.7/en/
* **MySQL Workbench 6.3 ->**   https://www.mysql.com/
* **PHP 5.6 ->**               http://php.net/docs.php
* **Xampp 3.2.2 ->**      	   https://www.apachefriends.org/pt_br/index.html
* **Laravel 5.4.22 ->**		   https://laravel.com/

### Execução do Projeto

1. Clone o projeto 

```sh
git clone https://github.com/kelvinfer4/eMarket.git
```

2. Abra o Terminal e navegue até o local que você clonou o projeto

3. Execute o seguinte comando

```sh
composer update --no-scripts 
```

4. Inicie os serviços de Mysql e Apache no Xampp.

5. Crie o banco de dados no PhpMyAdmin denominado: emarket

6. Execute o seguinte comando no Terminal para criação de tabelas

```sh
php artisan migrate
```

7. Execute o seguinte comando no Terminal para popular as tabelas pré-definidas

```sh
php artisan db:seed
```

8. Abra um navegador e coloque o seguinte endereço

```sh
localhost:8000/
```

### Licensa

Ainda não definida.

### Autor

* **Kelvin Ferreira Souza**