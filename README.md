# Nextcloud-install-k8s

Install Nextcloud in Kubernetes.

## How to install

#### Step 1: Clone this project to the server host where you want to install it.

```sh
git clone https://github.com/imjokey/nextcloud-install-k8s.git && cd nextcloud-install-k8s
```


#### Step 2:  Install Postgres and Redis dependencies.

-  Postgress
  Install **kubegres**  ref:  [https://www.kubegres.io/doc/getting-started.html](https://www.kubegres.io/doc/getting-started.html) .
  
  > Deploy sample yamls you can find in the **postgres** directory. 
  
-  Redis
  Deploy yamls you can find in the **redis** directory.

#### Step 3:  Configure  customer nextcloud config(optional)

Go to the `cus_config` directory and customize the config to what you want.

And copy your custom configs to the `/opt/nextcloud/config` directory(the location of nextcloud code directories mounts in the host path).

#### Step 4:  build & deploy  nextcloud 

Just run `run.sh` script to build and deploy discourse.

> Certainly,  If you have custom build requirements,  you could also customize the building script. 

```sh
sh run.sh 
```

###### Enjoy it! if you have any questions in install processing, please contact me and let me know. :)
