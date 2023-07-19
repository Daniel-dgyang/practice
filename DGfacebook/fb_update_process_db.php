<?php
require"fb_header_db.inc";
?>
      <div id="content">
        <!-- 결과화면도 동일한 레이아웃을 유지하기 위해서 fb_login.html 파일의 content div 영역에
              여기부터 복사, 새로운 이름 fb_login_process.php 로 저장 --------------------------- -->
        <?php
        /* -----------------
        개발자: 양동근
        개발날짜: 2023.6.5
        개요: 개인정보 수정
        -------------------- */
      // 업데이트 할 이메일/비번을 세션 변수에 저장
      require"fb_session_test.inc";
      $_SESSION['update_email'] = $_POST['user_email'];
      $_SESSION['update_pwd'] = $_POST['user_password'];
      //db에 있는 정보를 이용하여 회원 정보 수정 폼 출력 및 전송
      require"db_connect.inc";
      $query = "SELECT * FROM fb_201911754 WHERE email = '{$_POST['user_email']}' AND password = '{$_POST['user_password']}'";
      $result = mysql_query($query);
      $user_info = mysql_fetch_array($result);
      if(!empty($user_info)){
      echo<<<EOD
      <div id="register_content">
      <p style="font-size: 20px; font-weight: bold; margin-top: 3px; margin-bottom: 3px; text-align: center">
      회원가입을 위해 아래의 정보를 입력해주세요.
      </p>
      <form id="reg_form" method="post" action="fb_update_process_complete_db.php" name="register_form">
            <div id="reg_name">
            <div class="reg_text">이 름</div>
            <br /><input class="reg_box" type="text" name="user_name" value="{$user_info['name']}" autofocus required placeholder="예) 홍길동" />
            </div>
            <div id="reg_email">
            <div class="reg_text">E-MAIL</div>
            <br /><input class="reg_box" type="email" name="user_email" value="{$user_info['email']}"  required placeholder="예) abc123@xxx.com" />
            </div>
            <div id="reg_pw1">
            <div class="reg_text">비밀번호</div>
            <br />
            <input class="reg_box" type="password" name="user_password1" required placeholder="설정할 비밀번호를 입력하세요."/>
            </div>
            <div id="reg_pw2">
            <div class="reg_text">비밀번호 재입력</div>
            <br />
            <input class="reg_box" type="password" name="user_password2" required placeholder="비밀번호를 다시 입력해주세요."/>
            </div>
            <div id="reg_birth">
            <div class="reg_text">생년월일</div>
            <br /><input class="reg_box" type="date" name="user_birthday" value="{$user_info['birth_date']}"  />
            </div>
            <div id="reg_phone">
            <div class="reg_text">전화번호</div>
            <br />
            <input class="reg_box" type="tel" name="user_phone" value="{$user_info['phone']}"  placeholder="예) 01012345678" />
            </div>
            <div id="reg_address">
            <div class="reg_text">주 소</div>
            <br />
            <input class="reg_box" type="text" name="user_address" value="{$user_info['address']}"  placeholder="예) 서울시 동작구 대방동길 74"/>
            </div>
EOD;
            // 성별에 따라 기본 값을 줌
            $love = $user_info['status'];
            $love_list = ['싱글', '연애중', '약혼', '기혼', '자유연애중', '복잡한관계', '별거중', '이혼', '미혼'];
            for($i=0;$i<count($love_list);$i++){
            if($love == $love_list[$i]){
                  echo<<<EOD
            <div id="reg_love">
            <div class="reg_text">연애상태</div>
            <br />
            <select name="user_love" id="reg_opt">
            <option value={$love}>{$love}</option>
EOD;
            }
            }
            for($i=0;$i<count($love_list);$i++){
            if($love != $love_list[$i]){
            echo<<<EOD
            <option value={$love_list[$i]}>{$love_list[$i]}</option>
EOD;
            }
            }
            echo<<<EOD
            </select>
            </div>
EOD;
            $gender = $user_info['gender'];
            if($gender == '남'){
            echo<<<EOD
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
EOD;
            }elseif($gender == '여'){
            echo<<<EOD
            <div id = "reg_gender">
            <div class="reg_text">성별</div>
            <br>
            <div id=reg_gender_input>
            <input type="radio" id="male" name="user_gender" value="남" />
            <label for="male">남성</label>
            <input type="radio" id="female" name="user_gender" value="여" checked />
            <label for="female">여성</label>
            </div>
            </div>
EOD;
            }
            echo<<<EOD
            <div id="reg_intro">
            <div class="reg_text">자기 소개</div>
            <br />
            <input id="reg_intro_box" type="text" name="user_intro" value="{$user_info['memo']}"  placeholder="자기소개를 해주세요." />
            </div>
            <div>
            <input type="submit" name="register_submit" value="수정" id="register_button" />
            <input type="reset" name="register_reset" value="취소" id="register_reset"/>
            </div>
      </form>
      </div>
      </div>      
EOD;
      }elseif(empty($user_info)){
      header("Location: fb_update_db.php");
      }
      ?>
<?php
require"fb_footer_db.inc";
?>