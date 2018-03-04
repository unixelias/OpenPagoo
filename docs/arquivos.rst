Estrutura de Arquivos
=====================

Aqui está uma descrição de como os arquivos estão distribuídos no projeto


Árvore de arquivos
~~~~~~~~~~~~~~~~~~

.. code:: bash
    .
    ├── README.md
    ├── LICENSE
    ├── composer.json
    ├── composer.lock
    ├── README.md
    ├── app
    │   ├── imagens
    │   │   └── (...)
    │   ├── report
    │   │   └── phpunit
    │   │       ├── dashboard.html
    │   │       ├── Foo.php.html
    │   │       └── index.html
    │   ├── src
    │   │   ├── Bancos
    │   │   │   ├── Bancoob.php
    │   │   │   ├── Itau.php
    │   │   │   └── Sicredi.php
    │   │   ├── Boletos
    │   │   │   ├── AbstractBoleto.php
    │   │   │   ├── Bancoob.php
    │   │   │   └── Sicredi.php
    │   │   ├── Contracts
    │   │   │   └── Boleto.php
    │   │   ├── includes
    │   │   │   ├── css
    │   │   │   │   ├── a4-style.css
    │   │   │   │   └── carne-style.css
    │   │   │   ├── layout_bancoob.php
    │   │   │   ├── layout_bancoob_carne.php
    │   │   │   ├── layout_itau.php
    │   │   │   └── layout_sicredi.php
    │   │   ├── Boletos.php
    │   │   ├── BoletosException.php
    │   │   └── Foo.php
    │   ├── templates
    │   │   └── template_bancoob.php
    │   ├── test
    │   │   ├── bootstrap.php
    │   │   └── FooTest.php
    │   ├── autoloader.php
    │   ├── index.php
    │   ├── phpunit.xml.dist
    │   └── README.md
    ├── public
    ├── docs
    (...)