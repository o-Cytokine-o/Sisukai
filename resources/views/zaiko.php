<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- BootstrapのCSS読み込み -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="/js/bootstrap.min.js"></script>
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/style.css" />
    <script src="/main.js"></script>
</head>
<body>
    <div class="main-head ">
        <div class="main-head-p"></div>
        <h1 class="main-head-c"></h1>
        <div class="main-head-pr"></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="side-menu col-xl-2 col-lg-2 col-md-3 col-sm-3 col-xs-3">
                
                <div class="menu-sub side">
                    <a href="/menu"><button type="button" class="btn btn-primary btn-ex">メニュー画面へ</button></a>
                    <a href="/kaiin">会員管理</a><br>
                    <a href="/nyuuko">入庫先管理</a><br>
                    <a href="/shouhin">商品管理</a><br>
                    <a href="/zaiko">在庫管理</a><br>
                    <a href="/nyuuko">入庫管理</a><br>
                    <a href="/shukko">出庫管理</a><br>
                    <a href="/chuumon">注文管理</a><br>
                    <a href="/uriage">売上管理</a><br>
                    <a href="/hacchuu">発注管理</a><br>
                </div>
            </div>
            <div class="contents col-xl-10 col-lg-10 col-md-9 col-sm-9 col-xs-9 wrap">
                <!---- コンテンツ ----->
                    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <h1>在庫画面</h1>
<div class="main1">
    <div class="text1">
        <input id="sbox1" id="s" name="s" type="search" placeholder="" />
        <input id="sbtn1" type="submit" value="検索" />
        <p>
            商品名 -----------------
        </p>
    </div>
    <div class="text2">
        <h2>在庫情報一覧</h2>
        
        <div class="text3">
            <table border="1">
            <tr>
                <th class="a1">商品名</th>
                <th class="b1">在庫数量</th>
                <th class="c1">安全在庫数量</th>
                <th class="d1">商品単価</th>
                <th class="e1">在庫残高</th>
            </tr>
            <tr>
                <td>モンハン</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
            </table>
        </div>

 <!--       
        <ul class="text4">
            <li>-----------------------------------------------------</li>
        </ul>
-->
        <button type="submit" class="button">クリア</button>
    </div>
</div>
<div class="main2">
        <h3>安全在庫数量以下</h3>
    <div class="text5">
        <table border="1">
            <tr>
            <th class="a2">商品コード</th>
            <th class="b2">商品名</th>
            <th class="c2">在庫数量</th>
            <th class="d2">安全在庫数量</th>
            <th class="e2">商品単価</th>
            <th class="f2">在庫残高</th>
            </tr>
            <tr>
            <td>1</td>
            <td>モンハン</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            </tr>
        </table>
        </div>
<!--    
        <ul class="text6">
            <li>------------------------------------------------------------------</li>
        </ul>
-->
</div>
            
                
                <!---- コンテンツend ----->
                </div>
        </div>
        </div>
</body>
</html>