<?php
require"fb_session_test.inc"; 
require"fb_header_db.inc";
?>
      <div id="content">
        <?php
        echo <<<EOD
        <img src="./image/DGfacebook_logo.png" alt="" id="mainImg" />
        <p id="main_text">{$_SESSION['name']}님, DGfacebook에 오신 것을 환영합니다</p>
EOD;
        ?>
      </div>
<?php
require"fb_footer_db.inc";
?>
