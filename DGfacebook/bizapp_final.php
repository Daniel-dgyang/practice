<?php
require"fb_session_test.inc";
require"fb_header_db.inc";
?>
<div id="content">
  <!-- 
    개발날짜: 2023.06.12
    개요: 회원들만 작성할 수 있는 방명록 생성
  -->
  <!-- 방명록 작성시, 필요한 폼을 생성 -->
  <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" name = "write_form">
  <table>
    <tr>
      <td><textarea name="title" id="user_title" required autofocus placeholder="제목을 입력하세요."></textarea></td>
    </tr>
    <tr>
      <td><textarea name="contents" id="user_contents" required placeholder="내용을 입력하세요."></textarea></td>
    </tr>
      <td><input type="submit" name="submit" id="user_submit" /></td>
      <td><input type="reset" name="reset" id="user_reset" /></td>
    </tr>
  </table>
  </form>
  <?php
  // db에 연결
  require"db_connect.inc";
  if(isset($_POST['submit'])){
  // 입력된 폼을 바탕으로 방명록을 출력
  $email = $_SESSION['email'];
  $name = $_SESSION['name'];
  $title = $_POST['title'];
  $contents = $_POST['contents'];
  $ip = $_SERVER['REMOTE_ADDR'];
  //입력값을 db에 저장
  $query = "INSERT INTO final_201911754 (name, email, ip, title, contents)
            VALUES('{$name}', '{$email}', '{$ip}', '{$title}', '{$contents}');";
  $result = mysql_query($query, $db);
    }
  $select_query = "SELECT * FROM final_201911754 ORDER BY member_number desc";
  $select_result = mysql_query($select_query, $db);
  $fields = mysql_num_fields($select_result);
  // 방명록 출력
  echo "<div id='final_box'><table>";
  echo "<tr>
        <td>번호</td><td>이름</td><td>이메일</td><td>ip</td><td>제목</td><td>내용</td><td>날짜</td>
  </tr>";
  while($rows = mysql_fetch_array($select_result)){
    echo "<tr>";
    for($i = 0;$i<7;$i++){
          if($i == 6){
            $date = date("y/m/d", strtotime($rows[$i]));
            echo"<td>{$date}</td>";
          }else{
          echo"<td>{$rows[$i]}</td>";}
    }
    echo "</tr>";
  }
  echo"</table></div>";






  ?>
</div>
<?php
require"fb_footer_db.inc";
?>
