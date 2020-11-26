##Hướng dẫn
- Namespace tính đến thư mục:
```
/packages/api/src
``` 
là:
```
Edupham\Api
```
###1. Cài đặt
Bước 1:
- Copy thư mục "packages/api" vào thư mục gốc dự án laravel 5.4.x trở lên.

Bước 2:
- Cấu hình repository trong file composer.json ở thư mục gốc.
```
...
"repositories": [
    { "type": "path", "url": "packages/api" }
],
...    
```

Bước 3:
- Cấu hình sử dụng package trong file composer.json.
```
...
"require": {
    ...
    "edupham/api": "@dev",
    ...
},
```

Bước 4:
- Chạy composer update để cập nhật khai báo package.
```
composer update
```

###2. Sử dụng
- Khai báo route api ở file:
```
/packages/api/routes/api.php
```
- Khai báo config ở file:
```
/packages/api/config/edp.php
```
- Khai báo migration ở thư mục:
```
/packages/api/database/migrations
```
- Xử lý logic MVC-Repository trong thư mục:
```
/packages/api/src/app/
/packages/api/src/app/Models/
/packages/api/src/app/Http/Controllers/
```
- Xử lý validate trong thư mục:
```
/packages/api/src/app/Http/Requests/
```