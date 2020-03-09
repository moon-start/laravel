## SCSS 的使用
```
## 下載
wget https://raw.githubusercontent.com/moon-start/SH/master/binSHH/phpSASS


## 初始 + 安裝 + 編譯 app.scss
cd ./laravel
phpSASS
```
```
##################################
## laravel  / SASS / app.scss   ##
##################################   
      // app.scss文件
      @import "~font-awesome/scss/font-awesome";
      
      //動態產生 想要的SCSS
      .FFI {
          @extend .fa;
          @extend .fa-heart;
          @extend .fa-2x;
          @extend .mr-3;
          @extend .py-2;
      }
############################################
## 產生 laravel / public / css / app.css  ##
############################################
```
+ **SCSS 練習 https://codepen.io/moon-start/pen/rNVGmmR?editors=1000**
```
## Google 網頁 => 可產生一個 https://網址
## https://drv.tw/~login0516@gmail.com/gd/www/SCSS/app.css

## 可填寫在 https://codepen.io/moon-start/pen/XXXX.css
@import url('https://bzj7jdmrn8bbwmcy2kazaa-on.drv.tw/www/SCSS/app.css');
```