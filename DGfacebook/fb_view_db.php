<?php
require"fb_session_test.inc";
require"fb_header_db.inc";
?>

      <div id="content">
      <?php
        require"db_connect.inc";
        $result = mysql_query("select * from fb_201911754", $db);
        $fields = mysql_num_fields($result);
        echo "<div id='view_box'><table border = '1' id = 'view_table'> 
        <tr id='view_header'>
          <td>회원 번호</td><td>이름</td><td>이메일</td><td>비밀 번호</td><td>생년월일</td><td>성별</td><td>연락처</td><td>주소</td><td>연애 상태</td><td>메모</td><td>등록일</td>
        </tr>";
        while($row = mysql_fetch_array($result)){
          echo "<tr id='view_content'>";
          for($i = 0; $i<$fields; $i++){
          if($i == $fields-1){
            $reg_date = date("y/m/d", strtotime($row[$i]));
            echo "<td class = 'view_class'>".$reg_date."</td>";
          }
          else{
          echo "<td class = 'view_class'>".$row[$i]."</td>";
          }
          }
        echo "</tr>";
        }
        echo "</table></div>";
?>
      </div>
<?php
require"fb_footer_db.inc";
?>
