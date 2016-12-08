# phpunit-mink-example

Për të ekzekutuar shembujt ndiqni hapat e mëposhtëm:

## Merrni një kopje të kodit

git clone https://github.com/klesti/phpunit-mink-example.git

Ose shkarkoni skedarin zip dhe ekstraktoni folderin:

https://github.com/klesti/phpunit-mink-example/archive/master.zip

Të gjithë komandat e mëposhtme duhen ekzekutuar brenda folderit të projektit shembullit

## Instaloni composer

https://getcomposer.org/download/

Mënyra më e thjeshtë për ta përdorur:

chmod 755 composer.phar

më pas komandat ekzekutohen

./composer.phar ....

P.sh. ./composer.phar install

Për instruksione më të detajuara:

https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-14-04

## Shkarkoni libraritë e nevojshme

Ekzekutoni komandën

composer install

## Shtoni phpunit në PATH

export PATH=./vendor/bin:$PATH

Pas kësaj komande mund të përdorni komandën phpunit brenda folderit të shembullit

## Testet

Testet (PHPUnit) gjenden brenda folderit tests

### Për të ekzekutuar të gjithë testet njëherësh:

phpunit tests

### Shembull ekzekutimi të një testi individual

phpunit tests/ArsimiTest.phpunit

### ToodledoTest

Për të ekzekutuar testet e automatizuara mbi Toodledo.com (ToodledoTest.php) 
duhet më parë të krijoni një llogari në testingbot.com

Më pas ndryshoni vlerat e variablave $key dhe $secret në skedarin përkatës

Testi mund të ekzekutohet kështu:

phpunit tests/ToodledoTest.php

Pas ekzekutimit mund të hapni faqen https://testingbot.com/members (të identifikuar)
për të parë një video të ndërveprimeve me shfletuesin që u automatizuan nga 
testi PHPUnit.
