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
        <h1 class="main-head-c">売上管理(任意の期間)</h1>
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
                <div class="form-div">
                    <h3 class="kikansitei">期間を指定する</h3>
                    <form class="form-inline form-kikan">
                        <input class="form-control" type="date"> &nbsp ~ &nbsp<input class="form-control" type="date">
                        <button type="button" class="btn btn-primary">表示</button>
                    </form>
                </div>
            <h3 class="table-name">売上状況一覧</h3>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th>商品名</th>
                    <th>購入された回数</th>
                    <th>累計金額</th>
                    </tr>
                </thead>
                <!-- データの追加-->
                <tbody>
                    <!-- データの追加-->
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <!-- ここまで　-->
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                     </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                    <tr>
                        <td>商品名１</td>
                        <td>455</td>
                        <td>700500</td>
                    </tr>
                </tbody>    
            </table>     
                <!---- コンテンツend ----->
                </div>
        </div>
        </div>
</body>
</html>