<p align="center">
<a href="https://www.emarketsoftware.com.br"><img src="http://oi65.tinypic.com/2q99ua8.jpg" width="260" height="200;"></p></a>

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

## Acesso ao Sistema

1. Acesse: http://emarketsoftware.herokuapp.com/

2. Clique em Login

3. Digite no campo Login: admin

4. Digite no campo Senha: bancatcc

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

7. Execute o seguinte comando no Terminal para preparar o composer para realizar os seeds.

```sh
composer dump-autoload
```

8. Execute o seguinte comando no Terminal para popular as tabelas pré-definidas.

```sh
php artisan db:seed
```

9. Abra um navegador e coloque o seguinte endereço

```sh
localhost:8000/
```

### Licença

Todos os direitos reservados. Proibida qualquer utilização do mesmo, no todo ou em parte.

### Autor

* **Kelvin Ferreira Souza**