<!-- <p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p> -->

<!-- <p align="center">
<a href="#">
  <img src="https://travis-ci.org/laravel/framework.svg" alt="建立狀態"></a>
<a href="https://github.com/moon-start/laravel/archive/master.zip">
  <img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="github下載"></a>
<a href="http://moon-start.myftp.org/">
  <img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="最新穩定版"></a>
<a href="#">
  <img src="https://poser.pugx.org/laravel/framework/license.svg" alt="執照"></a>
</p> -->

<p align="center">
<a href="https://github.com/moon-start/laravel/archive/master.zip">
  <img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="github下載"></a>
<a href="http://moon-start.myftp.org/">
  <img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="最新穩定版"></a>
</p>

## Stable
+ **no-ip(30天網址) http://moon-start.myftp.org/**
+ **自訂CSS http://moon-start.myftp.org/css/app.css**




## 目的
<!-- <table><tr><td bgcolor=orange>背景色是：orange</td></tr></table> -->
<!-- <table><tr><td bgcolor=orange> -->
1. **蒐集資料:**
   - 統一編號 .
   - 換取商品的點數 .

2. **起因:**
   - 每一次購買商品,都會把統一發票列印.
   - 對於多少點數,可以達到商品.藉由紀錄了解,消費多少得到多少的點數. 
<!-- </td></tr></table> -->


## 環境(需要)

Nginx + PHP + MySQ + Composer +PHP laravel + Composer 安裝

```
[ MySQL ]
    - 帳號 : 密碼 
    - root : hello123

[ Nginx 配置 ]
    - /etc/nginx/nginx.conf
    - /etc/nginx/conf.d/default.conf
    [ root位置 ]
      - /usr/share/nginx/html/

[ PHP 配置 ]
    - /etc/php-fpm.d/www.conf 
  
```
```
# www.conf 文件
wget https://raw.githubusercontent.com/moon-start/SH/master/binSHHconf/www.conf

# nginx.conf 文件
wget https://raw.githubusercontent.com/moon-start/SH/master/binSHHconf/nginx.conf

# default.B.conf 文件
wget https://raw.githubusercontent.com/moon-start/SH/master/binSHHconf/default.B.conf
```
## nginx root 配置
```
### 下載
wget https://raw.githubusercontent.com/moon-start/SH/master/binSHH/cloneNginx

## 取代文件
## 更新 (nginx.conf + default.conf)
cloneNginx  /usr/share/nginx/html/
```
## PHP配置(如果出現問題)
```
## 下載
wget https://raw.githubusercontent.com/moon-start/SH/master/binSHH/cloneNginx

## 取代文件
## /etc/php-fpm.d/www.conf/www.conf 文件
clonePHP
```
## Composer 安裝
```
yum install wget

## 下載安裝檔    
wget https://getcomposer.org/installer -O composer-installer.php


## 2 選 1
## 一般使用者
## php composer-installer.php --filename=composer --install-dir=/usr/local/bin

## root 使用者
## php composer-installer.php --filename=composer --install-dir=/usr/bin

## 刪除安裝檔
rm -rf composer-installer.php

## 查看 版本
composer --version
```


## 安裝 (Laravel框架)
```html
## 下載指令
wget https://raw.githubusercontent.com/moon-start/SH/master/binSHH/cloneLaravel


### ################################
### 更新 (.env) + 建置 (資料結構)  ##
### 建立一個 moon 資料庫           ##
### 執行 (會要求輸入 MySQL密碼)    ##
####################################

#1# 預設 (composer install)

sh cloneLaravel  moon  

#2# 自訂(composer install)
sh cloneLaravel /usr/share/nginx/html/ 3306 moon  root  hello123 
```

## 建置 (資料紀錄)
```
## 下載 moon紀錄
wget https://raw.githubusercontent.com/moon-start/SH/master/binSQL/moonSQL

## 執行 (會要求輸入 MySQL密碼)
sh moonSQL
```

## 瀏覽
```
## 查看內部IP (列如:  inet 192.168.1.119/24 )
wget https://raw.githubusercontent.com/moon-start/SH/master/bin/IPr

## 取得 linux 內部IP
## 如:  inet 192.168.1.120/24 brd ....
sh IPr


## 輸入 chrome 瀏覽器
## http://查到的IPr/
http://192.168.1.119/
```



<!-- ## 使用者認證 (auth)
- **[新增消費 :](https://raw.githubusercontent.com/moon-start/laravel/master/moon/新增消費.jpeg)**  -->

## 使用者認證 (auth)
- **[新增消費 :](https://github.com/moon-start/laravel/blob/master/moon/新增消費.md)**
  ``` 
  1. 須 註冊和登入 使用者.
  
  2. 進入 http://192.168.1.119/new 頁面
  
  3. 填入(付款,點數,發票,地點) 等資訊
  ```
- **新增 (按鈕):**
  ```
  1. 須 註冊和登入 使用者.
  
  2. 進入 http://192.168.1.119/newB?id=3 頁面
  
  3. 填入(項目,價格) 等資訊
  ```

- **編輯 (按鈕):**
  ```
  1. 須 註冊和登入 使用者.
  
  2. 進入 http://192.168.1.119/edit?id=3 頁面
  
  3. 可修改 (項目,價格) 等資訊

  說明: 他會一對多的把 Item資料表紀錄 取出 


- **刪除 (按鈕):**
  ```
  1. 須 註冊和登入 使用者.
  
  2. 進入 http://192.168.1.119/delete?id=3 頁面
  
  說明: 依照 invoice表的id 關聯刪除 (Invoice,Item,Payment)資料表的紀錄
    
<!-- ## [SASS 的使用](https://raw.githubusercontent.com/moon-start/laravel/master/moon/SASS.md) -->
## [SASS 的使用](https://github.com/moon-start/laravel/blob/master/moon/SASS.md)


## RWD 理念

[網頁](http://moon-start.myftp.org/QB) 包含了 4種 (寬度)呈現版面

- 電腦版
- ipad
- iphone (垂直)
- iphone (水平)

## 註冊(點選紅色地方)
![註冊](
https://raw.githubusercontent.com/moon-start/laravel/master/moon/註冊.jpg)

## 填資料(密碼需要8位數)
![填資料](
https://raw.githubusercontent.com/moon-start/laravel/master/moon/填資料.jpg)

## 登入後(會出現在消費列表)
![登入後](
https://raw.githubusercontent.com/moon-start/laravel/master/moon/登入後.jpg)

## 登出(點選紅色地方)
![登入後](
https://raw.githubusercontent.com/moon-start/laravel/master/moon/登出.jpg)



  
## 第一正規化
  1. 要求資料庫的每個欄位都只能存放單一值
  2. 單一欄位中不可有多個有意義的值


<!-- <p align="center"><img src="https://imgur.com/x6XHj9f.png" width="800"></p> -->
![N3](
https://raw.githubusercontent.com/moon-start/laravel/master/moon/N1.PNG)


## 第二正規化
  1. 要求資料表裡的所有資料都要和該資料表的主鍵有完全相依關係；
  2. 所有非主鍵的欄位都一定和主鍵有關
  3. 如果有哪些資料只和主鍵的一部份有關的話，就得把它們獨立出來變成另一個資料表。


<!-- <p align="center"><img src="https://imgur.com/9Qt0Evx.png" width="800"></p> -->
![N3](
https://raw.githubusercontent.com/moon-start/laravel/master/moon/N2.PNG)


## 第三正規化
  1. 檢驗是否所有非鍵屬性都只和候選鍵有相關性，也就是說所有非鍵屬性互相之間應該是無關的。
  2. 任何一個具有部份相依性或是轉移相依性的關係都違反了第三正規化。



<!-- <p align="center"><img src="https://imgur.com/bPuwBdG.png" width="800"></p> -->

<!-- <p align="center"><img src="https://raw.githubusercontent.com/moon-start/laravel/master/moon/N3.PNG" width="800"></p> -->


![N3](
https://raw.githubusercontent.com/moon-start/laravel/master/moon/N3.PNG)

## 資料庫的設計圖

![關聯圖](
https://raw.githubusercontent.com/moon-start/laravel/master/moon/關聯圖.PNG)
