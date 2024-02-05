# install

Run `./install.sh`

This bash file build docker, install packages, generate key and run migration and seeders

I have 3 modules for Alarm,Notification and Elastic in modules table

Run this command for add elastic data :

`docker-compose exec app  php artisan elastic:add-data`

