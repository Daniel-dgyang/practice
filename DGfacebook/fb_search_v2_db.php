<?php
require"fb_session_test.inc";
require"fb_header_db.inc";
?>
      <div id="content">
        <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" name="search_form">
        <select name="search_option" id='search_select'>
            <option value="name">이름</option>
            <option value="email">이메일주소</option>
            <option value="tel">전화번호</option>
        </select>
        <input type="text" name="user_search" id="user_search2" required autofocus placeholder="검색어를 입력하세요."/>
        <input type="submit" name="search_subit" value="검색" id="search_button" /><input type="reset" name="search_reset" value="취소" id="search_reset" />
        </form>
        <p></p>
        <hr>
        <?php
        if(isset($_POST['search_subit'])){
        require "db_connect.inc";
        $option = $_POST['search_option'];
        if($option == 'name'){
            $result = mysql_query("select * from fb_201911754 where name like '%".$_POST['user_search']."%'", $db);
        }elseif($option == 'email'){
            $result = mysql_query("select * from fb_201911754 where email like '%".$_POST['user_search']."%'", $db);
        }else{
            $result = mysql_query("select * from fb_201911754 where phone like '%".$_POST['user_search']."%'", $db);
        }
        if(isset($result)){
        $fields = mysql_num_fields($result);
        echo "<div id='search_box'><table border = '1' id = 'view_table'> 
        <tr id='view_header'>
          <td>회원 번호</td><td>이름</td><td>이메일</td><td>비밀 번호</td><td>생년월일</td><td>성별</td><td>연락처</td><td>주소</td><td>연애 상태</td><td>메모</td><td>등록일</td>
        </tr>";
        while($row = mysql_fetch_array($result)){
          echo"<tr id='search_content'>";
        for($i = 0;$i<$fields;$i++){
          if($i == $fields-1){
            $reg_date = date("y/m/d", strtotime($row[$i]));
            echo"<td>{$reg_date}</td>";
          }else{
          echo"<td>{$row[$i]}</td>";}
        }
        echo"</tr>";
        }
        echo"</table></div>";
        }else{
          echo"<p style='text-align:center; font-size:30px; font-weight:bold;'>❌검색어가 잘못됐습니다. 다시 입력해주세요.❌<p>";
        }
        }

        ?>
      </div>
<?php
require"fb_footer_db.inc";
?>
