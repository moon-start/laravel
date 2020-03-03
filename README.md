<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="#">
  <img src="https://travis-ci.org/laravel/framework.svg" alt="建立狀態"></a>
<a href="https://github.com/moon-start/laravel/archive/master.zip">
  <img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="github下載"></a>
<a href="http://moon-start.myftp.org/">
  <img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="最新穩定版"></a>
<a href="#">
  <img src="https://poser.pugx.org/laravel/framework/license.svg" alt="執照"></a>
</p>

## Stable
+ **no-ip(30天網址) http://moon-start.myftp.org/**

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


## 工具 
```html
### 安裝
$ git clone https://github.com/moon-start/SH.git
$ cd ./SH
$ sh ok
```
## 安裝 
```html
$ git clone https://github.com/moon-start/laravel.git

### SH指令(安裝 PHP nginx mysql)
$ inWWW

### 安裝框架
$ clonePHP laravel

### 建立資料表
$ inDM
```

## 安裝 Laravel 框架 

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)

Laravel is accessible, powerful, and provides tools required for large, robust applications.





## 第一正規化
  1. 要求資料庫的每個欄位都只能存放單一值
  2. 單一欄位中不可有多個有意義的值


<p align="center"><img src="https://imgur.com/x6XHj9f.png" width="800"></p>


## 第二正規化
  1. 要求資料表裡的所有資料都要和該資料表的主鍵有完全相依關係；
  2. 所有非主鍵的欄位都一定和主鍵有關
  3. 如果有哪些資料只和主鍵的一部份有關的話，就得把它們獨立出來變成另一個資料表。


<p align="center"><img src="https://imgur.com/9Qt0Evx.png" width="800"></p>


## 第三正規化
  1. 檢驗是否所有非鍵屬性都只和候選鍵有相關性，也就是說所有非鍵屬性互相之間應該是無關的。
  2. 任何一個具有部份相依性或是轉移相依性的關係都違反了第三正規化。



<!-- <p align="center"><img src="https://imgur.com/bPuwBdG.png" width="800"></p> -->

<p align="center"><img src="https://raw.githubusercontent.com/moon-start/laravel/master/moon/N3.PNG" width="800"></p>


![RWD](
https://raw.githubusercontent.com/moon-start/laravel/master/moon/N3.PNG)

