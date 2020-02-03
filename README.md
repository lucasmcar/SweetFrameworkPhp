<h3>1. O Framework </h3>

O SweetFrameworkPhp é um framework php quefoi pensado para ser um framework simples, de fácil adesão, Orientado a Objeto e sem precisar utilizar o composer.

<h4>1.1 O padrão de nomenclatura </h4>
<ul>
  <li>1.1.1 - Para o nome de classes: </li>
  A nomenclatura das classes deve ser feita da seguinte maneira colocando SW antes do nome da classe, ficando assim:
  
  ```
  class SWNomeDaClasse 
  { 
    //Atributos
    
    //Métodos
  }
  ```
  <li>1.1.2 - Para o nome de Interfaces: </li>
  A nomenclatura das Interfaces segue o padrão das classes, com a diferença de que deve se colocar o I entre SW e NomeDaInterface, ficando assim:
  
  ```
  interface SWINomeDaInterface 
  { 
    //Métodos
  }
  ```

  
<h3>2. A Classe Database </h3>

<h3>3. A Classe Mensagem: </h3>

A classe abstrata Mensagem foi pensada para que o desenvolvedor crie suas própias mensagens,
de **Sucesso** e **Falha**

Se o arquivo não existir; <br>
Se o formato não for o correto;

O valor padrão de parametro das mensagens é do tipo inteiro.

![message](https://user-images.githubusercontent.com/21208286/73621099-87822e00-4613-11ea-837c-97819f181c3e.jpg)

Você deve chamar a classe Message e invocar o Método showErrors ou showSuccess.

***Obs: Não esqueça de incluir o arquivo de mensagem***

```
/*Se a classe mensagem não se encontrar no mesmo diretório da classe em que você for invocá-la.
 *A recomendação é que a classe se encontre no mesmo diretório
 */
require('diretorio/Message.php'); 

Message::showError($num)  

Message::showSuccess($num)
```







