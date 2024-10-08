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
            <li><a href="fb_home.php">Home</a></li>
            <li>
              <a class="dropdown-arrow" href="fb_register.php">회원가입</a>
              <ul class="sub-menus"></ul>
            </li>
            <li><a href="fb_search.php">회원검색</a></li>
            <li>
              <a class="dropdown-arrow" href="fb_login.php">로그인</a>
            </li>
            <li><a href="fb_guestbook.php">방명록</a></li>
          </ul>
        </nav>
      </div>
      <div id="content">
        <form method="post" action="fb_search_process.php" name="search_form">
          <input
            type="text"
            name="user_search"
            id="user_search"
            required
            autofocus
            placeholder="검색할 사용자명을 입력하세요."
          />
          <input type="submit" name="search_subit" value="검색" id="search_button" /><input
            type="reset"
            name="search_reset"
            value="취소"
            id="search_reset"
          />
        </form>
      </div>
      <div id="footer">
        <p>대표 번호: +82)10-xxxx-xxxx E-MAIL: xxxx123@xxxx.com</p>
        <p style="margin-top: -10px">© Copyright DGfacebook. All Rights Reserved</p>
      </div>
    </div>
  </body>
</html>
