<!DOCTYPE html>
<html>
  <head>
    <title>DGfacebook</title>
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="./css/fb_style.css" />
    <link rel="stylesheet" type="text/css" href="./css/fb_menu.css" />
    <link rel="icon" type="image/x-icon" href="./image/favicon-32x32.png" />
    <script>
      function updatemenu() {
        if (document.getElementById('responsive-menu').checked == true) {
          document.getElementById('menu').style.borderBottomRightRadius = '0';
          document.getElementById('menu').style.borderBottomLeftRadius = '0';
        } else {
          document.getElementById('menu').style.borderRadius = '0px';
        }
      }
    </script>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <p>DGfacebook</p>
      </div>
      <div id="navigation">
        <nav id="menu">
          <input type="checkbox" id="responsive-menu" onclick="updatemenu()" /><label></label>
          <ul>
            <li><a href="fb_home_db.php">Home</a></li>
            <li><a href="fb_search_db.php">회원검색</a></li>
            <li><a href="fb_search_v2_db.php">회원검색v2</a></li>
            <li><a href="fb_view_db.php">모든 회원 보기</a></li>
            <li><a href="fb_update_db.php">회원 정보 수정</a></li>
            <li><a href="bizapp_final.php">방명록v3</a></li>
            <li><a href="fb_logout_db.php">로그 아웃</a></li>
            <li><a href="fb_delete_db.php">회원 탈퇴</a></li>
          </ul>
        </nav>
      </div>

