# Conversor de Centímetros PHP

### Descrição da atividade
Elabore um programa em PHP que receba um valor em metros e converta para centímetros.

### Aprendizado
1. Formas de capturar entrada de dados pelo teclado

O professor ensinou a utilizar a variável $argv para capturarmos entrada de dados pelo teclado pela linha de comando, segue abaixo o uso do aprendizado:
```
$metros = $argv[1];

$centimetros = $metros * 100;

echo "Resultado da conversão: $centimetros";
```
A variável **$argv** representa uma coleção de dados que podem ser passados pela linha de comando utilizando o teclado, logo tudo que for digitado será recebido por essa variável, por isso precisamos indicar o índice porque desta forma mostramos ao $argv qual dos dados digitados eu quero que ele armazena na variável responsável por receber e utilizar posteriormente aquele dado.

**Mas temos outra forma de capturar entrada do teclado, veja:**
```
fwrite(STDOUT, "Digite a distância em metros: ");

$metros = trim(fgets(STDIN));

$conversorCentimetros = $metros * 100;

echo "Resultado da conversão: $conversorCentimetros";
```
São duas formas válidas e que devem ser levadas em consideração de acordo com a necessidade do projeto, eu quis explorar as duas formas, afinal em programação não há somente uma forma de obter o mesmo resultado.
