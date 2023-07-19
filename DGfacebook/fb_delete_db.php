<?php
require"fb_session_test.inc"; 
require"fb_header_db.inc";
?>
      <div id="content">
        <img src="./image/exit.png" id="exit_img" />
        <div id="login_content">
          <p id="sub_title">이메일과 비밀번호를 입력 후, 회원 탈퇴 버튼을 눌러주세요.</p>
          <form method="post" action="fb_delete_process_db.php" name="login_form">
            <p style="font-weight: bold">
              E-MAIL
              <input
                class="login_input"
                type="email"
                name="user_email"
                autofocus
                required
                placeholder="이메일을 입력하세요."
              />
            </p>

            <p id="pw_input">
              PW
              <input
                class="login_input"
                type="password"
                name="user_password"
                required
                placeholder="비밀번호를 입력하세요."
              />
            </p>

            <p>
              <input name="login_submit" value="회원탈퇴" type="submit" id="login_button" />
              <input name="login_reset" value="취소" type="reset" id="login_reset" />
            </p>
          </form>
        </div>
      </div>
<?php
require"fb_footer_db.inc";
?>
