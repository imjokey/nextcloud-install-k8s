# nextcloud-install-k8s

Install nextcloud in kubernetes.

## How to install

#### Step 1: Clone this project to server host where you want to install.

```sh
git clone https://github.com/imjokey/nextcloud-install-k8s.git && cd nextcloud-install-k8s
```


#### Step 2:  Install Postgres and Redis dependencies.

-  Postgress
  Install **kubegres**  ref:  [https://www.kubegres.io/doc/getting-started.html](https://www.kubegres.io/doc/getting-started.html) .
  
  > Deploy smaple yamls you can find in **postgres** directory. 
  
-  Redis
  Deploy yamls you can find in **redis** directory.

#### Step 3:  Configure  customer nextcloud config(optional)

Go to `cus_config` directory and customize config what you want.

And copy your custom configs to `/opt/nextcloud/config` directory(the location of nextcloud code  directories mounts in  host path).

#### Step 4:  build & deploy  nextcloud 

Just run `run.sh` script to build and deploy discourse.

> Certainly,  If you have custom  build requirements,  you could  also customize the building script. 

```sh
sh run.sh 
```

###### Enjoy it! if you have any questions  in install processing, please contact me and let me know that. :)



