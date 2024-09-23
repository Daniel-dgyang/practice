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
        개요: 사용자가 회원가입 시 입력한 정보를 출력한다. 
         */
        echo <<<REGISTER
        <table id='reg_table'>
        <tr>
        <td>이름<p>{$_POST['user_name']}</p></td><td>EMAIL<p>{$_POST['user_email']}</p></td>
        </tr>
        <td>비밀번호<p>{$_POST['user_password1']}</p></td><td>비밀번호 재입력<p>{$_POST['user_password2']}</p></td>
        <tr>
        <td>생년월일<p>{$_POST['user_birthday']}</p></td><td>전화번호<p>{$_POST['user_phone']}</p></td>
        </tr>
        <tr>
        <td>주소<p>{$_POST['user_address']}</p></td><td>연애상태<p>{$_POST['user_love']}</p></td>
        </tr>
        <tr>
        <td id='reg_intro' colspan='2'>자기소개<p>{$_POST['user_intro']}</p></td>
        </tr>
        </table>
REGISTER;
            ?>
        </div>
        <hr align="left" color="black" width="100%" size='3px' />
        <p>※현재는 입력값만 출력하므로 실제 작업을 위해서는 나중에 프로그램을 수정해야 합니다.</p>
        </div>
      </div>
      <div id="footer">
        <p>대표 번호: +82)10-xxxx-xxxx E-MAIL: xxxx1223@xxx.com</p>
        <p style="margin-top: -10px">© Copyright DGfacebook. All Rights Reserved</p>
      </div>
    </div>
  </body>
</html>
