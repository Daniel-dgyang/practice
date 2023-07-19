<?php
require"fb_session_test.inc";
require"fb_header_db.inc";
?>
      <div id="content">
        <img src="./image/edit.png" id="edit_img" />
        <div id="login_content">
          <p id="sub_title">수정할 이메일과 비밀번호를 입력 후, 로그인해주세요.</p>
          <form method="post" action="fb_update_process_db.php" name="login_form">
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
              <input name="login_submit" value="로그인" type="submit" id="login_button" />
              <input name="login_reset" value="취소" type="reset" id="login_reset" />
            </p>
          </form>
        </div>
      </div>
<?php
require"fb_footer_db.inc";
?>
