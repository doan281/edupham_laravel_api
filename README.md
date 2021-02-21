# edupham_laravel_api (package api)
- Dự án mẫu phát triển RESTful API trên nền tảng Laravel 7x.
- Phần mã nguồn API được tách riêng thành package nằm trong thư mục "/packages/api".
- Việc tách thành package sẽ giải quyết tốt vấn đề khi thay đổi version của Laravel. Bạn chỉ cần copy thư mục "/packages/api" sang version của Laravel mới là xong. Xem thêm hướng dẫn tại "/packages/api/GUIDE-LINE.md".

## Môi trường phát triển
- PHP 7.2.x
- Laravel 7x
- MySQL / MariaDB  
- Composer
- ...
## Các bước cài đặt
- Clone hoặc tải file nén về
- Giải nén
- Chạy lệnh sau để cài vendor
```
composer install
```
- Tạo DB như trong file .env
- Cập nhật cấu hình bằng lệnh
```
php artisan config:cache
```
- Chạy lệnh sau để tạo bảng
```
php artisan migrate
```

