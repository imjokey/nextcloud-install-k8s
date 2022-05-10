#! /bin/sh

docker build -t nextcloud/full .
# for containerd runtime
docker image save  nextcloud/full  > nextcloud_full.tar
ctr -n=k8s.io images import apache_full/nextcloud_full.tar && rm -f nextcloud_full.tar
