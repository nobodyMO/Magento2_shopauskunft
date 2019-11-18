# Magento2_shopauskunft
Magento 2 Module for shopauskunft customer review dialog on success page.
This is an inofficial module. The author is not related to shopauskunft.de.
## How to install
* Clone or download this repository
* Copy everything to /<magento2-path>/app/code
* run ```php bin/magento module:enable Zuckerwelt_Shopauskunft```
* run ```php bin/magento setup:upgrade```
* run ```php bin/magento setup:di:compile```
* run ```php bin/magento setup:static-content:deploy```
* Clear all caches
* Configure your values (values like Shopauskunft ID) in Stores -> Configuration -> Shopauskunft
Based on RBA INTEGRATION Rechtssichere Bewertungsanfrage V0.9.0  
More informations [here](https://www.shopauskunft.de).
