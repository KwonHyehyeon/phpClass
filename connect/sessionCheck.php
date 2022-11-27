<!-- 글 아무나 쓸 수 없게 하기 위한 페이지 -->
<?php
    if(!isset($_SESSION['memberID'])){
        // 로그인 페이지 이동
        Header("Location: ../login/login.php");
        // echo "로그인을 먼저 해주세요!";
    }
?>