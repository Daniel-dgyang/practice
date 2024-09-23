<?php
require"fb_header_db.inc";
?>
      <div id="content">
      <?php
      /**
       * 날짜: 2023.6.5
       * 개요: 입력받은 값을 db에 쿼리 실행
       */
      require"fb_session_test.inc";
      require"db_connect.inc";
      $query = "UPDATE fb_201911754 SET name = '{$_POST['user_name']}',
      email = '{$_POST['user_email']}',
      password = '{$_POST['user_password1']}',
      birth_date = '{$_POST['user_birthday']}',
      gender = '{$_POST['user_gender']}',
      phone = '{$_POST['user_phone']}',
      address = '{$_POST['user_address']}',
      status = '{$_POST['user_love']}',
      memo = '{$_POST['user_intro']}'
      WHERE email = '{$_SESSION['update_email']}' AND password = '{$_SESSION['update_pwd']}'";
      $result = mysql_query($query, $db);
      $update_list = mysql_affected_rows($db);
      if(isset($update_list)){
        echo "<p>성공적으로 회원정보가 변경되었습니다!</p>" ;
      }elseif(!isset($update_list)){
        echo"<p>회원정보 변경에 실패했습니다.</p>";
      }
      ?>

      </div>
<?php
require"fb_footer_db.inc";
?>
