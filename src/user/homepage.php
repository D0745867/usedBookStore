<?php
  require __DIR__ . '/../vendor/autoload.php';
  $db = Database::get();
  $result = $db->execute("SELECT * FROM book_product ORDER BY RAND() LIMIT 4", array()); //隨機取四本

  function find_base64($product_no)
  {
      require __DIR__ . '/../vendor/autoload.php';
      $db = Database::get();
      $photo_result = $db->execute("SELECT base64 FROM photo WHERE product_no=?", array($product_no)); //隨機取四本

      if ($db->getRowCount()!=0) {
          return $photo_result[0]["base64"];
      } else {
          return null;
      }
  }


 ?>
<!DOCTYPE html>
<html>

<head>
  <title>二手書網</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="./css/homepage.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body>

  <!--This is navbar-->
  <nav id="main-nav" class="navbar navbar-expand-sm navbar-dark fixed-top">
    <div id="myBar" class="container">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <h2 style="position: fixed; left: 3em; color: darkcyan; font-family: Microsoft JhengHei;">二手書網</h2>
        </li>
          <col class="nav-item">
          <a href="homepage.php" class="nav-link topNavbar active">首頁</a>
          <col class="nav-item">
          <a href="search.php" class="nav-link topNavbar">搜尋</a>
          <col class="nav-item">
          <a href="classification.php" class="nav-link topNavbar">分類</a>
          <col class="nav-item">
          <a href="seller_baseinformation.php" class="nav-link topNavbar">賣書</a>
          <col class="nav-item">
          <a href="personinfo.php" class="nav-link topNavbar">會員中心</a>
          <col class="nav-item">
          <a href="login.php"><img src="image/account.png" alt="Avatar" id="account"></a>
      </ul>
    </div>
  </nav>
  <img src="image/homepage.jpg" id="topImage">

  <!-- This is card-->
  <section id="cardsection1">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="label">隨機推薦</div>
        </div>
        <div class="lookmore col-md-6">
          <button type="button" class="btn btn-light">看更多</button>
          <!--buttom-->
        </div>
      </div>
      <div class="row">
        <?php
        for ($i=0 ; $i<4 ; $i++) {
            $link="'Book_information.php?product_no=".$result[$i]["product_no"]."'";
            echo '<div class="col-md-3" style="padding: 3em;">
             <button type="button" class="card-button" onclick="location.href='.$link.'">
            <div class="card">
              <div class="box">
              <img class="imgsize" class="card-img-top" src="data:image/png;base64,'.find_base64($result[$i]["product_no"]).'" alt="Card image cap" >
              </div>
              <div class="card-body">
                <div class="card-book">'.$result[$i]["book_name"].'</div>
                <p class="card-writer">作者 ：'.$result[$i]["author"].'</p>
                <p class="card-pay">價格: '.$result[$i]["price"].'</p>
              </div>
            </div>
             </button>
          </div>' ;
        }
         ?>
      </div>
    </div>
  </section>

  <!-- This is card-->
  <?php
    $result = $db->execute("SELECT * FROM book_product AS b,Classify_tag AS c
      WHERE b.product_no = c.product_no AND class_name='國貿系' ORDER BY RAND() LIMIT 4", array()); //隨機取四本
   ?>

  <section id="cardsection2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="label">國貿熱門</div>
        </div>
        <div class="lookmore col-md-6">
          <button type="button" class="btn btn-light">看更多</button>
          <!--buttom-->
        </div>
      </div>
      <div class="row">

        <?php
        for ($i=0 ; $i<4 ; $i++) {
            $link="'Book_information.php?product_no=".$result[$i]["product_no"]."'";
            echo '<div class="col-md-3" style="padding: 3em;">
             <button type="button" class="card-button" onclick="location.href='.$link.'">
            <div class="card">
              <div class="box">
              <img class="imgsize" class="card-img-top" src="data:image/png;base64,'.find_base64($result[$i]["product_no"]).'" alt="Card image cap" >
              </div>
              <div class="card-body">
                <div class="card-book">'.$result[$i]["book_name"].'</div>
                <p class="card-writer">作者 ：'.$result[$i]["author"].'</p>
                <p class="card-pay">價格: '.$result[$i]["price"].'</p>
              </div>
            </div>
             </button>
          </div>' ;
        }
         ?>

       </div>
      </div>
  </section>
  <!-- This is card-->
  <?php
    $result = $db->execute("SELECT * FROM book_product AS b,Classify_tag AS c
      WHERE b.product_no = c.product_no AND class_name='資工系' ORDER BY RAND() LIMIT 4", array()); //隨機取四本
   ?>

  <section id="cardsection3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="label">資工熱門</div>
        </div>
        <div class="lookmore col-md-6">
          <button type="button" class="btn btn-light">看更多</button>
          <!--buttom-->
        </div>
      </div>
      <div class="row">
        <?php
        for ($i=0 ; $i<4 ; $i++) {
            $link="'Book_information.php?product_no=".$result[$i]["product_no"]."'";
            echo '<div class="col-md-3" style="padding: 3em;">
             <button type="button" class="card-button" onclick="location.href='.$link.'">
            <div class="card">
              <div class="box">
              <img class="imgsize" class="card-img-top" src="data:image/png;base64,'.find_base64($result[$i]["product_no"]).'" alt="Card image cap" >
              </div>
              <div class="card-body">
                <div class="card-book">'.$result[$i]["book_name"].'</div>
                <p class="card-writer">作者 ：'.$result[$i]["author"].'</p>
                <p class="card-pay">價格: '.$result[$i]["price"].'</p>
              </div>
            </div>
             </button>
          </div>' ;
        }
         ?>
      </div>
    </div>
  </section>

  <!--This is buttonbar-->
  <section id="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <nav class="nav flex-column">
            <h4 class="bottomtext">認識我們</h4>
            <a class="nav-link bottomText" href="#">認識團隊</a>
            <a class="nav-link bottomText" href="#">關於此專案</a>
            <a class="nav-link bottomText" href="#">加入我們</a>
          </nav>
        </div>
        <div class="col-md-3">
          <nav class="nav flex-column">
            <h4 class="bottomtext">網站地圖</h4>
            <a class="nav-link bottomText" href="#">首頁</a>
            <a class="nav-link bottomText" href="#">搜尋</a>
            <a class="nav-link bottomText" href="#">分類</a>
            <a class="nav-link bottomText" href="#">賣書</a>
            <a class="nav-link bottomText" href="#">會員中心</a>
          </nav>
        </div>
        <div class="col-md-3">
          <nav class="nav flex-column">
            <h4 class="bottomtext">聯絡我們</h4>
            <a class="nav-link bottomText" href="#">錯誤回報</a>
            <a class="nav-link bottomText" href="#">其他服務</a>
          </nav>
        </div>
        <div class="col-md-3">
          <nav class="nav flex-column">
            <a class="nav-link active">logo</a>
          </nav>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
