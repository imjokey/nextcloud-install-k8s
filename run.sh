#! /bin/sh
# build image
cd ./apache_full
chmod +x build.sh && ./build.sh
cd -
# apply cus_configmap
kubectl create configmap cus-php-config --from-file=./php_ini/cus-php-config.ini
kubectl create configmap nextcloud-cron-config --from-file=./cron_config/www-data
# apply service
kubectl  apply -f deploy_full.yaml  -f  ingress.yaml -f svc.yaml
# apply cronjob
kubectl apply -f  ./jobs/cronjob.yaml
