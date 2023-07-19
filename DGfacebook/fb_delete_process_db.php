<?php
require"fb_header_db.inc";
?>
      <div id="content">

        <?php
        /* -----------------
        개발자: 양동근
        개발날짜: 2023.6.5
        개요: 회원탈퇴 
        -------------------- */
      require"db_connect.inc";
      $query = "DELETE FROM fb_201911754 WHERE email = '{$_POST['user_email']}' AND password = '{$_POST['user_password']}'";
      $result = mysql_query($query);
      $num_rows = mysql_affected_rows($db);
      if($num_rows > 0){
        echo  "<p id = 'del_result'>{$num_rows}명의 회원정보를 성공적으로 삭제하였습니다😉</p>";
      }else{
        echo "<p id = 'del_result'>회원정보를 다시 입력해주세요.😅</p>";
      }
        ?>

<?php
require"fb_footer_db.inc";
?>