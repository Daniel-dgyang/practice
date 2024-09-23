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
        <div id="register_content">
          <p style="font-size: 15px; font-weight: bold; margin-top: 3px; margin-bottom: 3px; text-align: center">
            회원가입을 위해 아래의 정보를 입력해주세요.
          </p>
          <form id="reg_form" method="post" action="fb_register_process.php" name="register_form">
            <div id="reg_name">
              <div class="reg_text">이 름</div>
              <br /><input class="reg_box" type="text" name="user_name" autofocus required placeholder="예) 홍길동" />
            </div>
            <div id="reg_email">
              <div class="reg_text">E-MAIL</div>
              <br /><input class="reg_box" type="email" name="user_email" required placeholder="예) abc123@xxx.com" />
            </div>
            <div id="reg_pw1">
              <div class="reg_text">비밀번호</div>
              <br />
              <input
                class="reg_box"
                type="password"
                name="user_password1"
                required
                placeholder="설정할 비밀번호를 입력하세요."
              />
            </div>
            <div id="reg_pw2">
              <div class="reg_text">비밀번호 재입력</div>
              <br />
              <input
                class="reg_box"
                type="password"
                name="user_password2"
                required
                placeholder="비밀번호를 다시 입력해주세요."
              />
            </div>
            <div id="reg_birth">
              <div class="reg_text">생년월일</div>
              <br /><input class="reg_box" type="date" name="user_birthday" />
            </div>
            <div id="reg_phone">
              <div class="reg_text">전화번호</div>
              <br />
              <input class="reg_box" type="tel" name="user_phone" placeholder="예) 01012345678" />
            </div>
            <div id="reg_address">
              <div class="reg_text">주 소</div>
              <br /><input
                class="reg_box"
                type="text"
                name="user_address"
                placeholder="예) 서울시 동작구 대방동길 74"
              />
            </div>
            <div id="reg_love">
              <div class="reg_text">연애상태</div>
              <br />
              <input type="radio" name="user_love" value="solo" checked />
              <label for="solo">솔로</label>
              <input type="radio" name="user_love" value="loving" />
              <label for="loving">연애중</label>
              <input type="radio" name="user_love" value="married" />
              <label for="married">기혼</label>
            </div>
            <div id="reg_intro">
              <div class="reg_text">자기 소개</div>
              <br />
              <input id="reg_intro_box" type="text" name="user_intro" placeholder="자기소개를 해주세요." />
            </div>
            <div>
              <input type="submit" name="register_submit" value="회원가입" id="register_button" />
              <input type="reset" name="register_reset" value="취소" id="register_reset" />
            </div>
          </form>
        </div>
      </div>
      <div id="footer">
        <p>대표 번호: +82)10-xxxx-xxxxE-MAIL: xxxx123@xxx.com</p>
        <p style="margin-top: -10px">© Copyright DGfacebook. All Rights Reserved</p>
      </div>
    </div>
  </body>
</html>
