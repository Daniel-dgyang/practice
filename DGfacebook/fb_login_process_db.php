<?php
require"fb_header_guest_db.inc";
?>
      <div id="content">
        <!-- 결과화면도 동일한 레이아웃을 유지하기 위해서 fb_login.html 파일의 content div 영역에
                 여기부터 복사, 새로운 이름 fb_login_process.php 로 저장 --------------------------- -->
        <?php
        /* -----------------
        개발자: 양동근
        개발날짜: 2023.6.5
        개요: 로그인 입력
        -------------------- */
        // 데이터 베이스에 있는 입력자 정보를 확인 
        require"db_connect.inc";
        $query = "SELECT * FROM fb_201911754 WHERE email = '{$_POST['user_email']}' AND password = '{$_POST['user_password']}'";
        $result = mysql_query($query);
        $result_array = mysql_fetch_array($result);
        // 세션을 시작
        session_start();
        // 세션 변수에 사용자 정보를 부여
        if(isset($result_array['email'])){
          $_SESSION['login'] = True;
          $_SESSION['name'] = $result_array['name'];
          $_SESSION['email'] = $result_array['email'];
          $_SESSION['pwd'] = $result_array['password'];
          $_SESSION['birth_date'] = $result_array['birth_date'];
          $_SESSION['gender'] = $result_array['gender'];
          $_SESSION['phone'] = $result_array['phone'];
          $_SESSION['address'] = $result_array['address'];
          $_SESSION['status'] = $result_array['status'];
          $_SESSION['memo'] = $result_array['memo'];
          $_SESSION['reg_date'] = $result_array['reg_date'];
          header("Location:fb_home_db.php");
        }
        // 세션에 사용자 정보가 있으면 회원 홈페이지로 이동
        // 그렇지 않으면, 비회원 로그인 페이지로 다시이동
        elseif(!isset($_SEESION['login'])){
          header("Location:fb_login_db.php");
        }
        ?>
<?php
require"fb_footer_db.inc";
?>