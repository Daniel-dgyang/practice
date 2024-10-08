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
        <!-- 결과화면도 동일한 레이아웃을 유지하기 위해서 fb_login.html 파일의 content div 영역에
                 여기부터 복사, 새로운 이름 fb_login_process.php 로 저장 --------------------------- -->
        <div id="result_box">
        <h3 class="red">폼에서 받은 입력값을 화면에 보여주는 간단한 php 프로그램이 호출되어 실행되었습니다</h3>
        <p style="color=#0000ff;font-weight=bold">이 프로그램이 호출될 때 아래 값이 전달되었습니다</p>
        <hr align="left" color="black" width="100%" size='3px'/>
        <div id='php_box'>
        <?php
        /*
        개발자: 양동근(201911754)
        개발날짜: 2023.4.4
        개요: 사용자가 검색한 결과를 출력한다.
        */
        echo <<<SEARCH
        <table id='search_table'>
        <tr>
        <td>검색한 사용자명
        <p>{$_POST['user_search']}</p></td>
        </tr>
        </table>
SEARCH;
            ?>
          </div>
        <hr align="left" color="black" width="100%" size='3px' />
        <p>※현재는 입력값만 출력하므로 실제 작업을 위해서는 나중에 프로그램을 수정해야 합니다.</p>
        </div>
      </div>
      <div id="footer">
        <p>대표 번호: +82)10-xxxx-xxxx E-MAIL: xxxx132@xxx.com</p>
        <p style="margin-top: -10px">© Copyright DGfacebook. All Rights Reserved</p>
      </div>
    </div>
  </body>
</html>
