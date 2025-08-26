## Only Cars

## Cara Push Ke GitHub Dan Menambahkan Read Me

- git init
- git remote add origin (link repo contoh: git remote add origin https://github.com/m-soid/only-cars.git)
- git branch -M main
- git add Readme (menambahkan Readme)
- git add . (save perubahan yang telah dilakukan
- git commit -m "(isi sendiri contoh: meambahkan show)
- git push -u origin main
  
## Instalasi

- Install Composer and Npm
- Clone Repository: git clone https://github.com/m-soid/only-cars.git
- Install : composer install ; npm install ; npm run dev
- ketik (di terminal atau window powershell) cp .env.example .env for create .env file
- ketik (di terminal atau window powershell) php artisan migrate --seed for migration database
- ketik (di terminal atau window powershell) php artisan storage:link for create folder storage
