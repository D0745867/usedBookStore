<?php
  require __DIR__ . '/../vendor/autoload.php';
  // 建立 Session
  session_start();
  $db = Database::get();
  
  $result = $db->execute("SELECT * FROM generaluser WHERE username = ?;", array($_SESSION['username']));
   
?>

<!DOCTYPE html>

<head>
  <title>搜尋</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="./css/VIPcenter.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
        <a href="#home-section" class="nav-link topNavbar active">首頁</a>
        <col class="nav-item">
        <a href="#explore-head-section" class="nav-link topNavbar">搜尋</a>
        <col class="nav-item">
        <a href="#author-head-section" class="nav-link topNavbar">分類</a>
        <col class="nav-item">
        <a href="#mission-head-section" class="nav-link topNavbar">賣書</a>
        <col class="nav-item">
        <a href="#mission-head-section" class="nav-link topNavbar">會員中心</a>
        <col class="nav-item">
        <img src="image/account.png" alt="Avatar" id="account">
      </ul>
    </div>
  </nav>

  <h3 id="Title">會員中心</h3>

  <div class="row">
    <div class="card" id="card1">
      <div class="index">
        <div class="row">
          <a href="#" id="profile">
            <img src="image/profile.png" style="width: 25px;">
            個人基本資料
          </a>
        </div>
        <div class="row">
          <a href="#" id="change">
            <img src="image/security.png" style="width: 25px;">
            帳號密碼修改
          </a>
        </div>
        <div class="row">
          <a href="#" id="order">
            <img src="image/list.png" style="width: 25px;">
            訂單查詢
          </a>
        </div>
      </div>
    </div>
    <div class="card" id="card2">
      <div class="row">
        <div class="col">
          <img src="image/account.png" alt="Avatar" style="width: 10em; border-radius: 50%;">
        </div>
        <div class="col group1">
          <div class="row">
          <form method="post" action="personinfo-api.php">
          <span>姓名: <?php echo $result[0]['name'] ; ?></span>
          </div>
          <div class="row">
            <span>生日: <?php echo $result[0]['bdate'] ; ?></span>
          </div>
        </div>
        <div class="col-md-5 group1">
          <div class="row">
            <span>手機號碼: <?php echo $result[0]['phonenumber'] ; ?></span>
          </div>
          <div class="row">
            <span>E-mail: <?php echo $result[0]['email'] ; ?></span>
          </div>
        </div>
        <div class="col group1">
          <div class="row">
            <span>性別: 男</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card" id="card3">
    <div class="row">
      <div class="col-md-3">
        <i class="material-icons" id="done">done</i>
      </div>
      <div class="col-md-8">
        <div style="font-size: 22px; font-weight: bolder; color: #548687;" id="idCard">學生證已通過驗證</div>
        <div class=" row group2">
          <div class="col-md-4">
            <div>學校: 逢甲大學</div>
            <div>學號: D0765432</div>
            <div>系所: 資訊工程學系</div>
          </div>
          <div class="col-md-6">
            <div>偏好面交地點: <span><select>
                  <option></option>
                  <option>逢甲大門</option>
                  <option>福星宿舍</option>
                  <option>逢甲東門停車場</option>
                </select></span></div>
            <div>是否公開學校: <span><input type="radio" name="choose" value="Taipei"> 是
                <input type="radio" name="choose" value="Taoyuan"> 否</span></div>
            <div>申請修改學籍資料: <span><a href="#" style="color: #8FBC94;">點我申請</a></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="store" style="margin-bottom: 5em;">
    <button type="button" class="btn btn-success button1">儲存更改</button>
    <button type="button" class="btn btn-secondary button1">取消</button>
  </div>
  </form>
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