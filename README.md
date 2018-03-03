# boletos
Sistema para geração de boletos
# OpenPagoo Orientado à Objetos

Esse pacote foi criado a partir do pacote Boletosphp-oo ([link](https://github.com/giordanolima/boletosphp-oo)) e fornece a mesma lógica  orientada a objeto, para uma melhor aplicação em frameworks e uso através do composer.

## Pacote em desenvolvimento
Este pacote ainda encontra-se em fase de adaptação e não tem suporte a todos os bancos disponíveis no pacote original. Aos poucos estes vão sendo adicionados. Dê um fork e contribua e ajude com correções de bugs e novas features. Atualmente o pacote possui suporte aos seguintes bancos:
* Itaú
* Sicredi
* Bancoob

## Install
Instalação através do composer:
Configure o composer para usar um repositório vcs

```json
    (...)
	"require" : {
		"nxstep-si/nx-boletos" : "dev-master"
	},
    (...)
    "repositories" : [{
			"url" : "https://github.com/nxstep-si/nx-boletos",
			"type" : "vcs"
		}
	]
    (...)
```

## Uso
```php
use unixelias\OpenPagoo\Boletos;
$boleto = new Boletos(Boletos::BOLETOSPHP_ITAU);
$boleto->setData([...]);
$boleto->setImageBasePath("path/to/images/");
echo $boleto->render();
```

## Constantes
Ao instanciar a classe, o banco que será gerado o boleto deverá ser passado como parâmetro. Segue abaixo a tabela dos bancos e suas respectivas constantes:

| Banco   | Constante          |
| ------- | ------------------ |
| Itaú    | BOLETOSPHP_ITAU    |
| Sicredi | BOLETOSPHP_SICREDI |
| Bancoob | BOLETOSPHP_BANCOOB |

## Dados
Os dados dos boletos deverão ser passados através do método `setData`no formato de array, no estilo `campo => valor`.
Ex.:
```php
$boleto->setData([
    "valor_boleto" => "99,00",
    "data_vencimento" => "01/04/2016",
    "nosso_numero" => 00000001,
    (...)
]);
```
Os dados padrão a todos os bancos são:

|        Campo       | Descrição                                                 | Obrigatório |
|:------------------:|-----------------------------------------------------------|:-----------:|
|    valor_boleto    | Valor do boleto no formato de moeda brasileira.           |     SIM     |
|   data_vencimento  | Data de vencimento do boleto no formato d/m/Y             |     SIM     |
|    nosso_numero    | Número que será usado como base para gerar o nosso número |     SIM     |
|       agencia      | Agência do cedente                                        |     SIM     |
|        conta       | Conta do cedente                                          |     SIM     |
|      conta_dv      | Dígito verificador da conta do cedente                    |     SIM     |
|      carteira      | Carteira do cedente                                       |     SIM     |
|    identificacao   | Nome do cedente                                           |     SIM     |
|      cpf_cnpj      | CPF ou CNPJ do cedente                                    |     SIM     |
|  numero_documento  | Campo "Número do Documento" do boleto                     |     NÃO     |
|   data_documento   | Data do documento. Formato: d/m/Y                         |     NÃO     |
| data_processamento | Data do processamento. Formato: d/m/Y                     |     NÃO     |
|       sacado       | Nome do sacado                                            |     NÃO     |
|      endereco      | Endereço completo do sacado a ser mostrado no Recibo      |     NÃO     |
|      endereco1     | Linha 1 do endereço no corpo do boleto                    |     NÃO     |
|      endereco2     | Linha 2 do endereço no corpo do boleto                    |     NÃO     |
|   demonstrativo1   | Linha 1 do demonstrativo                                  |     NÃO     |
|   demonstrativo2   | Linha 2 do demonstrativo                                  |     NÃO     |
|   demonstrativo3   | Linha 3 do demonstrativo                                  |     NÃO     |
|     instrucoes1    | Linha 1 das instruções                                    |     NÃO     |
|     instrucoes2    | Linha 2 das instruções                                    |     NÃO     |
|     instrucoes3    | Linha 3 das instruções                                    |     NÃO     |
|     instrucoes4    | Linha 4 das instruções                                    |     NÃO     |
|     quantidade     | Campo quantidade do boleto                                |     NÃO     |
|   valor_unitario   | Campo valor unitário do boleto                            |     NÃO     |
|       aceite       | Campo aceito do boleto                                    |     NÃO     |
|       especie      | Campo espécie do boleto                                   |     NÃO     |
|     especie_doc    | Campo especie_doc do boleto                               |     NÃO     |
|      cidade_uf     | Cidade/UF do cedente                                      |     NÃO     |
|       cedente      | Razão Social ou Nome Completo do cedente                  |     NÃO     |
Cada banco possui seus campos específicos, são eles, respectivamente:
### Itaú
Não existem campos específicos para esse banco.
### Sicredi

|   Campo  | Descrição                                                                          | Obrigatório |
|:--------:|------------------------------------------------------------------------------------|:-----------:|
|   posto  | Código do posto da cooperativa de crédito                                          |     SIM     |
| byte_idt | Byte de identificação do cedente do bloqueto utilizado para compor o nosso número. |     SIM     |

### Bancoob
TODO Descrição

Em fase de pré-homologação

## Imagens
As imagens utilizadas no pacote estão na pasta `imagens` do pacote. Essas imagens deverão ser colocadas em uma pasta pública do projeto e o caminho deverá ser setada pelo método `setImageBasePath`. Ex.:
```php
$boleto->setImageBasePath("http://meusite.com.br/img/boletosphp/"); // Com "/" no final
```
## Render
O método `render` irá retornar um código HTML com o respectivo boleto gerado.
```php
echo $boleto->render();
/* Irá imprimir um código HTML
 * <html>
 * ...
 * </html>
*/
```

OBS: Para Bancoob a função render

# Instruções para contribuição

Aqui estão algumas instruções sobre o funcionamento do sistema e como contribuir

## Pastas

O espaço de nomes está configurado para a pasta "src"
Nessa pasta estão os arquivos que deverão ser alterados.

#### src/Bancos
Os arquivos nessa pasta são os motores de tudo. Quando eles chamados recebem o Array com as informações do boleto, fazem alguns cálculos, como geração de números e dígitos de verificação e renderizam o boleto que será gerado, devolvendo o desenho do boleto.
Esses arquivos tem funções específicas de cada banco, pois nele são calculados alguns números como o Nosso Número e a sequência de números da linha digitável.
Além disso, tem também a função que gera o código de barras para a impressão.
É recomendável que as funções incluídas nesses arquivos sejam comentadas pelos autores e/ou coautores.

#### src/Boletos

A arquivo "AbrstractBoleto.php" é a classe base sobre a qual as outras são extendidas. Cada banco tem um arquivo nessa pasta que extende os atributos da classe.

Por exemplo, o arquivo "Bancoob.php" extende a classe AbrstractBoleto(), adequando-a ao uso para o sistema BANCOOB

#### src/Contracts
Não alterar (TODO)

#### src/includes
Aqui estão os layouts propriamente ditos. Esses arquivos geram a imressão dos boletos, compondo a tabelas e campos.
Altere esses arquivos para modificar o layout da impressão do boleto.

#### src/Boletos.php
Essa é a classe base que é chamada quando usamos esse repositório como biblioteca. Com as funções dessa classe, as outras classes são chamadas.
Essa classe recebe como parâmetro o nome do Boleto que se deseja gerar e chama as funções pertinentes.

#### src/BoletosException.php
Trata alguns erros na classe Boletos()
