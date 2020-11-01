# Magento2_shopauskunft
Magento 2 Module for shopauskunft customer review dialog on success page.
This is an inofficial module. The author is not related to shopauskunft.de.
## How to install
```sh
$ composer config repositories.magento2-shopauskunft git git@github.com:nobodyMO/Magento2_shopauskunft.git
$ composer require zuckerwelt/shopauskunft-module
$ composer update
$ php bin/magento module:enable Zuckerwelt_Shopauskunft
$ php bin/magento setup:upgrade
$ php bin/magento setup:di:compile
$ php bin/magento setup:static-content:deploy
```

Clear all caches
Configure your values (values like Shopauskunft ID) in Stores -> Configuration -> Shopauskunft
Based on RBA INTEGRATION Rechtssichere Bewertungsanfrage V0.9.0  
More informations [here](https://www.shopauskunft.de).
