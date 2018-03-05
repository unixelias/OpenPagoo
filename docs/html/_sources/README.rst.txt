OpenPagoo Orientado a Objetos
=============================

Esse pacote foi criado a partir da integração dos pacotes Boletosphp-oo_ e OpenCnabPHP_ para fundir o processo de geração de layouts de boleto para impressão com código de barras e a geração e processamento de arquivos de remessa e retorno aos bancos. 
Esse pacote busca aplicar a lógica de Orientação a Objeto, para uma melhor aplicação em frameworks e uso através do composer.

.. _Boletosphp-oo: https://github.com/giordanolima/boletosphp-oo

.. _OpenCnabPHP: https://github.com/QuilhaSoft/OpenCnabPHP


Pacote em desenvolvimento
-------------------------

Este pacote ainda encontra-se em fase de adaptação e não tem suporte a todos os bancos disponíveis no pacote original.
Será desenvolvido primeiramente o pacote para o SICOOB e em seguida serão adaptados os demais. Sinta-se livre para usar e contribuir com o pacote, através de correções de bugs e/ou novas features.

instalação do pacote
--------------------

A instalação pode ser feita através do Composer_: Configure o composer para usar um repositório vcs (Github)

.. _Composer: https://www.phpmaranhao.com.br/tag/instalando-o-composer/


Instalação através do composer: Configure o composer para usar um
repositório vcs

.. code:: json

        (...)
        "require" : {
            "unixelias/OpenPagoo" : "master"
        },
        (...)
        "repositories" : [{
                "url" : "https://github.com/nxstep-si/nx-boletos",
                "type" : "vcs"
            }
        ]
        (...)

Uso
---

.. code:: php

    use unixelias\OpenPagoo\Boletos;
    $boleto = new Boletos(Boletos::BOLETOSPHP_ITAU);
    $boleto->setData([...]);
    $boleto->setImageBasePath("path/to/images/");
    echo $boleto->render();

Constantes
----------

Ao instanciar a classe, o banco que será gerado o boleto deverá ser
passado como parâmetro. Segue abaixo a tabela dos bancos e suas
respectivas constantes:

+---------+--------------------+
| Banco   | Constante          |
+=========+====================+
| Itaú    | BOLETOSPHP_ITAU    |
+---------+--------------------+
| Sicredi | BOLETOSPHP_SICREDI |
+---------+--------------------+
| Bancoob | BOLETOSPHP_BANCOOB |
+---------+--------------------+

Dados
-----

Os dados dos boletos deverão ser passados através do método
``setData``\ no formato de array, no estilo ``campo => valor``. Ex.:

.. code:: php

    $boleto->setData([
        "valor_boleto" => "99,00",
        "data_vencimento" => "01/04/2016",
        "nosso_numero" => 00000001,
        (...)
    ]);

Os dados padrão a todos os bancos são:

+-----------------------+-----------------------+-----------------------+
| Campo                 | Descrição             | Obrigatório           |
+=======================+=======================+=======================+
| valor_boleto          | Valor do boleto no    | SIM                   |
|                       | formato de moeda      |                       |
|                       | brasileira.           |                       |
+-----------------------+-----------------------+-----------------------+
| data_vencimento       | Data de vencimento do | SIM                   |
|                       | boleto no formato     |                       |
|                       | d/m/Y                 |                       |
+-----------------------+-----------------------+-----------------------+
| nosso_numero          | Número que será usado | SIM                   |
|                       | como base para gerar  |                       |
|                       | o nosso número        |                       |
+-----------------------+-----------------------+-----------------------+
| agencia               | Agência do cedente    | SIM                   |
+-----------------------+-----------------------+-----------------------+
| conta                 | Conta do cedente      | SIM                   |
+-----------------------+-----------------------+-----------------------+
| conta_dv              | Dígito verificador da | SIM                   |
|                       | conta do cedente      |                       |
+-----------------------+-----------------------+-----------------------+
| carteira              | Carteira do cedente   | SIM                   |
+-----------------------+-----------------------+-----------------------+
| identificacao         | Nome do cedente       | SIM                   |
+-----------------------+-----------------------+-----------------------+
| cpf_cnpj              | CPF ou CNPJ do        | SIM                   |
|                       | cedente               |                       |
+-----------------------+-----------------------+-----------------------+
| numero_documento      | Campo "Número do      | NÃO                   |
|                       | Documento" do boleto  |                       |
+-----------------------+-----------------------+-----------------------+
| data_documento        | Data do documento.    |                       |
|                       | Formato: d/m/Y        |                       |
+-----------------------+-----------------------+-----------------------+