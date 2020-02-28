<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)

Laravel is accessible, powerful, and provides tools required for large, robust applications.


Class Projects
# moon 
消費習慣  
#### 目的
+ 蒐集資料
  ```html
    1. 換取商品的點數 .
    2. 統一編號 .
  ```
+ 起因:
  ```html
    1. 每一次購買商品,都會把統一發票列印.
    2. 對於多少點數,可以達到商品.藉由紀錄了解,消費多少得到多少的點數. 
  ```


## 第一正規化
  1. 要求資料庫的每個欄位都只能存放單一值
  2. 單一欄位中不可有多個有意義的值

![N1](./moon/N1.png)
<p align="center"><img src="https://imgur.com/x6XHj9f.png" width="400"></p>


## 第二正規化
  1. 要求資料表裡的所有資料都要和該資料表的主鍵有完全相依關係；
  2. 所有非主鍵的欄位都一定和主鍵有關
  3. 如果有哪些資料只和主鍵的一部份有關的話，就得把它們獨立出來變成另一個資料表。

![N2](./moon/N2.png)
<p align="center"><img src="https://imgur.com/9Qt0Evx.png" width="400"></p>


## 第三正規化
  1. 檢驗是否所有非鍵屬性都只和候選鍵有相關性，也就是說所有非鍵屬性互相之間應該是無關的。
  2. 任何一個具有部份相依性或是轉移相依性的關係都違反了第三正規化。


![N3](./moon/N1.png)
<p align="center"><img src="https://imgur.com/bPuwBdG.png" width="400"></p>
