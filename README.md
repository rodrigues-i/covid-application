# Aplicação sobre Covid
Aplicação que permite fazer buscas sobre dados de covid em alguns país
## Componentes
- MySQL
- PHP 8

## Como executar
Para executar este projeto, é necessário ter o programa xampp instalado.  
Tendo o xampp instalado, clone este repositório e mova-o para a pasta `htdocs` que fica na pasta onde você intalou o xampp.  
Exemplo: `C:\xampp\htdocs/covid-application`  
Você precisar entrar no arquivo `includes/database.php` e alterar a seguinte linha:   
```
$database = new mysqli("localhost", "root", "", "db_accessos");
```
O primeiro argumento `localhost` é o endereço onde o seu banco está rodando, neste caso localhost indica que está rodando localmente.  
O segundo argumento `root` é o nome do usuário que você usa para acessar ao banco.  
O terceiro argumento `""` é a senha usada para acessar ao banco. Caso você não utilize uma senha para acessar ao banco, pode deixar a string vazia.  
O quarto argumento `db_accesso` é o nome do banco que você está acessando.  
Após fazer as alterações, lige o apache e o banco mysql no xampp é navegue para o endpoint: `http://localhost/covid-application` para fazer as consultas de dados sobre covid.

### Página inicial
![image](https://user-images.githubusercontent.com/76739275/227744528-e3bbb417-a265-4156-baea-7d865961af90.png)

### Buscando por um país
![image](https://user-images.githubusercontent.com/76739275/227744558-18eb137b-ce80-4560-8c72-412eea59970c.png)
