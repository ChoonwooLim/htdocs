<?php
	session_start();
	$session_value = "gnuwiz";
	$_SESSION["mySession"] = $session_value;
        $_SESSION["city"] = "부산";
        $_SESSION["gu"] = "해운대구";
?>
<html>
<head>
	<title>Create Session</title>
</head>
<body>
<h1>Session Example</h1>
	세션을 만듭니다.<br/>
	세션 내용은 <a href="./result_session.php">여기로</a>!!!
<h1>거주지</h1>
        내가 사는곳은 <?php echo $_SESSION["city"]; ?>입니다<br/>
        그중에서도 <?php echo $_SESSION["gu"]; ?>에 살고 있습니다<br/>
</body>
</html>