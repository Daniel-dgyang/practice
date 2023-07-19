<?php
require"fb_header_db.inc";
?>
      <div id="content">
        <!-- 결과화면도 동일한 레이아웃을 유지하기 위해서 fb_login.html 파일의 content div 영역에
                 여기부터 복사, 새로운 이름 fb_login_process.php 로 저장 --------------------------- -->
        <div id="result_box">
        <h3 class="red">폼에서 받은 입력값을 화면에 보여주는 간단한 php 프로그램이 호출되어 실행되었습니다</h3>
        <p style="color=#0000ff;font-weight=bold">이 프로그램이 호출될 때 아래 값이 전달되었습니다</p>
        <hr align="left" color="black" width="100%" size='3px'/>
        <div id='php_box'>
        <?php
        /*
        개발자: 양동근(201911754)
        개발날짜: 2023.4.4
        개요: 사용자가 검색한 결과를 출력한다.
        */
        echo <<<SEARCH
        <table id='search_table'>
        <tr>
        <td>검색한 사용자명
        <p>{$_POST['user_search']}</p></td>
        </tr>
        </table>
SEARCH;
            ?>
          </div>
        <hr align="left" color="black" width="100%" size='3px' />
        <p>※현재는 입력값만 출력하므로 실제 작업을 위해서는 나중에 프로그램을 수정해야 합니다.</p>
        </div>
      </div>
<?php
require"fb_footer_db.inc";
?>
