<?php
require"fb_header_guest_db.inc";
?>
      <div id="content">
        <div id="register_content">
          <p style="font-size: 20px; font-weight: bold; margin-top: 3px; margin-bottom: 3px; text-align: center">
            회원가입을 위해 아래의 정보를 입력해주세요.
          </p>
          <form id="reg_form" method="post" action="fb_register_db.php" name="register_form">
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
              <select name="user_love" id="reg_opt">
                <option value="싱글">싱글</option>
                <option value="연애중">연애중</option>
                <option value="약혼">약혼</option>
                <option value="기혼">기혼</option>
                <option value="자유연애중">자유연애중</option>
                <option value="복잡한관계">복잡한관계</option>
                <option value="별거중">별거중</option>
                <option value="이혼">이혼</option>
                <option value="미혼">미혼</option>
              </select>
            </div>
            <div id = "reg_gender">
              <div class="reg_text">성별</div>
              <br>
              <div id=reg_gender_input>
              <input type="radio" id="male" name="user_gender" value="남" checked/>
              <label for="male">남성</label>
              <input type="radio" id="female" name="user_gender" value="여" />
              <label for="female">여성</label>
              </div>
            </div>
            <div id="reg_intro">
              <div class="reg_text">자기 소개</div>
              <br />
              <input id="reg_intro_box" type="text" name="user_intro" placeholder="자기소개를 해주세요." />
            </div>
            <div>
              <input type="submit" name="register_submit" value="회원가입" id="register_button" />
              <input type="reset" name="register_reset" value="취소" id="register_reset"/>
            </div>
          </form>
        </div>
      </div>
      <?php
      if(isset($_POST['register_submit'])){
      require"db_connect.inc";
      $query = "insert into fb_201911754 (name, email, password, birth_date, gender, phone, address, status, memo) 
      values ('{$_POST['user_name']}', '{$_POST['user_email']}', '{$_POST['user_password1']}', '{$_POST['user_birthday']}', '{$_POST['user_gender']}', '{$_POST['user_phone']}', '{$_POST['user_address']}', '{$_POST['user_love']}', '{$_POST['user_intro']}');";
      $result = mysql_query($query, $db);
      if(isset($result)){
        echo "<h3 style='text-align: center;font-size:15px;font-weight:bold;'>😍회원가입이 성공적으로 완료되었습니다.😍</h3>";
      }
      }
      ?>
<?php
require"fb_footer_db.inc";
?>
