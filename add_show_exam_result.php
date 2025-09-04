<?php
require("connect_db.php");
echo "<center>";
echo "<form action=save_add_examresult.php method=post>";
echo "<table border=1 width=40%>";

$raw_course_code = $_GET['course_code'] ?? $_POST['course_code'] ?? null;
if ($raw_course_code === null || $raw_course_code === '') {
    echo "<p style='color:red'>
        Missing parameter: course_code<br>
        เปิดหน้านี้แบบ <code>add_show_exam_result.php?course_code=01204113</code>
    </p>";
    exit;
}

$course_code = mysqli_real_escape_string($conn, $raw_course_code);

$course_code = $_GET["course_code"];
$sql    = "SELECT * FROM courses WHERE course_code='$course_code'";
$result = mysqli_query($conn, $sql);
$course = mysqli_fetch_assoc($result);

echo "<h1>Course: " . htmlspecialchars($course['course_name']) . "</h1>";
echo "<tr><td>Course Code:</td><td><input type=text name=course_code /></td></tr>";
echo "<tr><td>Student code:</td><td><input type=text name=student_code /></td></tr>";
echo "<tr><td>Score:</td><td><input type=text name=point /></td></tr>";
echo "<tr><td colspan=2><center><input type=submit value=Submit /></center></td></tr>";
echo "</table>";
echo "</form>";
echo "</center>";
?>