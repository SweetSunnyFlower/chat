## 安装步骤
* git clone https://github.com/SweetSunnyFlower/demo.git
* chmod -R 0777 storage/
* cp .env.example .env
* 编辑 .env 设置数据库 APP_URL
* composer install
* php artisan key:generate 
* php artisan db:seed
* php artisan workman start --d （ctrl + c退出即可）
