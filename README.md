<h1 align="center">
  <br>
    <img src="https://i.imgur.com/d8QEHRb.png" alt="Tradução Magento 2 pt_BR" width="128" height="128" title="Tradução Magento 2 pt_BR"/> 
  <br>
  Aplicação de Placeholder nos campos do formulário de Checkout Magento 2
  <br>
</h1>

Para realizar alterações na estrutura do Magento 2 é necessário criar um módulo e aplicar a função merge.

Isso significa que é possível adicionar, remover, renomear, reconfigurar e modificar características internas dos elementos sem realizar quaisquer alterações no módulo original, ou seja, aplica-se o conceito de Loose Coupling.

Estrutura do Módulo
etc/module.xml: Definição do módulo
etc/events.xml (ou etc/{area}/events.xml): Definição dos eventos 
etc/adminhtml/system.xml: Configurações
etc/config.xml: Configurações padrões

# Compatível

- Magento 2 Open Source
- Magento 2 Commerce
- Magento 2 B2B

# Instalação

## Via Composer 

Para instalar essa tradução via [Composer](https://getcomposer.org) você precisa usar o terminal do seu servidor.

```
composer require franciele-sena/placeholder-magento-2
enable module : sudo bin/magento module:enable Jsp_Placeholder
upgrade setup : sudo bin/magento setup:upgrade
compile setup : sudo bin/magento setup:di:compile
php bin/magento cache:clean
```

## ou manualmente

Para instalar a tradução manualmente você irá precisar acessar seu servidor.

* Crie o diretório **app/code/Jsp/Placeholder**
* Efetue o [download do zip](https://github.com/franciele-sena/placeholder-magento-2/archive/master.zip)
* Mova o conteúdo do repositório para a pasta
* Enable module : sudo bin/magento module:enable Jsp_Placeholder
* Upgrade setup : sudo bin/magento setup:upgrade
* Compile setup : sudo bin/magento setup:di:compile
* php bin/magento cache:clean

