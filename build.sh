rm -rf var/view_preprocessed/* &&
rm -rf pub/static/adminhtml/* &&
rm -rf pub/static/frontend/* &&
rm -rf generated/code/Magento/* &&
rm -rf generated/code/* &&
rm -rf generated/* &&
rm -rf var/cache/* &&
rm -rf var/di &&
rm -rf var/generation &&

php7.4 bin/magento cache:flush &&
php7.4 bin/magento setup:upgrade &&
php7.4 bin/magento setup:di:compile &&
php7.4 bin/magento setup:static-content:deploy -f id_ID en_US &&
php7.4 bin/magento cache:clean &&
php7.4 bin/magento cache:flush &&
chmod -R 777 var/cache &&
php7.4 bin/magento cache:enable &&
php7.4 bin/magento cache:disable full_page &&
php7.4 bin/magento cache:disable block_html
