BS4 排版
## col--指定了3個版面
## col-xs 是自動大小 所以會從尾端..慢慢被遮住
<div class="row">
    <div class="col-2"></div>
    <div class="col-6">
        <input type="submit" class="btn btn-primary" value="送出">
    </div>
    <div class="col-1">
        <input type="submit" class="btn btn-warning" value="取消" name="cancel">
    </div>
</div>
   <!-- table-hover 移動效果 -->
    <!-- margin =0 -->
    <!-- bg-danger 背景顏色 -->

    <!-- 常用的代碼
    m：margin
    p：padding
    t：top
    r：right
    b：bottom
    l：left
    x：-right和-left
    y：-top 和 -bottom -->

    <!-- 
    m：margin
    mt：margin-top
    mr：margin-right
    mb：margin-bottom
    ml：margin-left
    mx：margin-right 和 margin-left
    my：margin-top 和 margin-bottom

    p：padding
    pt：padding-top
    pr：padding-right
    pb：padding-bottom
    pl：padding-left
    px：padding-right 和 padding-left
    py：padding-top 和 padding-bottom -->
    
    <!-- 
    1：0.25 * 1rem = 0.25px
    2：0.5 * 1rem = 8px
    3：1 * 1rem = 16px
    4：1.5 * 1rem = 24px
    5：3 * 1rem = 48px -->

    <!-- 
    d-block → display: block
    d-inline → display: inline
        -->

        <!-- 
        text-light
        p-4 
        text-secondary -->

        <!--  _variable.scss  可以修改 
        <div class="box border">呈現四邊有線</div>
        <div class="box border-top">呈現上邊有線</div>
        <div class="box border-right">呈現右邊有線</div>
        <div class="box border-bottom">呈現下邊有線</div>
        <div class="box border-left">呈現左邊有線</div>

        <div class="box border-0">取消四邊線條</div>
        <div class="box border border border-top-0">取消上邊線條</div>
        <div class="box border border-right-0">取消右邊線條</div>
        <div class="box border border-bottom-0">取消下邊線條</div>
        <div class="box border border-left-0">取消左邊線條</div>

        <div class="box border rounded">四腳呈現圓弧</div>
        <div class="box border rounded-top">呈現上邊圓弧</div>
        <div class="box border rounded-right">呈現右邊圓弧</div>
        <div class="box border rounded-bottom">呈現下邊圓弧</div>
        <div class="box border rounded-left">呈現左邊圓弧</div>

        <div class="box border rounded-circle">呈現圓形形狀</div>
        <div class="box box1 border rounded-pill">呈現膠囊形狀</div>

        <div class="box border border-primary">呈現主題顏色</div>
        <div class="box border border-danger">呈現主題顏色</div> -->

        <thead class="thead-darty">
            <tr class="row">
            <!-- col-xs-4 自動 -->
            <th class="bg-danger col-lg-3 col-md-4 col-sm-4 d-md-inline">日期</th>
            <th class="col-lg-2 col-md-2 col-sm-4 d-md-inline">發票</th>
            <th class="col-lg-2 col-md-0          d-none d-lg-inline">地點</th>
            <th class="col-lg-1 col-md-1          d-none d-md-inline">付款</th>
            <th class="col-lg-1 col-md-1          d-none d-md-inline">點數</th>
            <td class="col-lg-3 col-md-4 col-sm-4 d-md-inline">資料(項目處理)</td>
            </tr>
        </thead>
        <tbody>




        ![文字對其](https://blog.sbot.io/articles/37/Bootstrap-4-%E6%B0%B4%E5%B9%B3%E6%8E%92%E5%88%97-%E5%9E%82%E7%9B%B4%E6%8E%92%E5%88%97%E5%8F%8A%E6%B0%B4%E5%B9%B3-%E5%9E%82%E7%9B%B4%E5%B1%85%E4%B8%AD%E8%AF%A6%E8%A7%A3)


        ![版面](https://sweeteason.pixnet.net/blog/post/42130394#c3)

        ![表格隱藏](https://poychang.github.io/visible-and-hidden-in-bootstrap-4/)


.text-primary
藍

.text-secondary
灰

.text-success
綠

.text-danger
紅

.text-warning
黃

.text-info
淡藍

bg-danger
bg-danger 

![背景顏色](https://code.z01.com/v4/utilities/colors.html)