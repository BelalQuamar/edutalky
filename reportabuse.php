<?php session_start();
 include 'top.php';
echo "<h1><font size=12>REPORT ABUSE</font></h1>";
?>
<form  method="get">
Please describe your issue: <input type="text" name="uname" size="100" >
<input type="submit" name="submit" value="submit" /></form>
<br><br>

<?php
echo "<font size=\"5\">Report Abuse are a particular kind of feedback whereby users can flag other users' posts as abusive content.By doing so, the offending content will be hidden. Don't worry, your report is anonymous. When something gets reported to EduTalky, we'll review it and remove anything that doesn't follow the EduTalky Community Standards. We don't include any information about the person who filed the report when we reach out to the person responsible.</font>";
echo "<br><font size=\"5\">Please keep in mind that reporting something to EduTalky doesn't guarantee that it will be removed. You may see something you don't like on EduTalky that doesn't violate the EduTalky Terms.</font>";
echo "<br><br><br><font size=\"6\" face='Arial'>EduTalky Community Standards:</font>";
echo "<br><br><font size=\"5\">Please review these standards. They will help you understand what type of expression is acceptable, and what type of content may be reported and removed.</font>";
echo "<br><br><font size=\"4\">VIOLATION AND THREAT: Safety is EduTalky's top priority. We remove content and may escalate to law enforcement when we perceive a genuine risk of physical harm, or a direct threat to public safety. You may not credibly threaten others, or organize acts of real-world violence. Organizations with a record of terrorist or violent criminal activity are not allowed to maintain a presence on our site. We also prohibit promoting, planning or celebrating any of your actions if they have, or could, result in financial harm to others, including theft and vandalism.</font>";
echo "<br><br><font size=\"4\">BULLYING AND HARASSMENT: EduTalky does not tolerate bullying or harassment. We allow users to speak freely and debate on posts, but take action on all reports of abusive behavior directed at private individuals.</font>";
echo "<br><br><font size=\"4\">HATE SPEECH: EduTalky does not permit hate speech, but distinguishes between serious and humorous speech. While we encourage you to challenge ideas, institutions, events, and practices, we do not permit individuals or groups to attack others based on their race, ethnicity, national origin, religion, sex, gender, sexual orientation, disability or medical condition.</font>";
echo "<br><br><font size=\"4\">INTELLECTUAL PROPERTY:Before sharing content on EduTalky, please be sure you have the right to do so. We ask that you respect copyrights, trademarks, and other legal rights.</font>";
echo "<br><br><font size=\"4\">SECURITY:We take the safety of our members seriously and work to prevent attempts to compromise their privacy or security, including those that use fraud or deception. Additionally, we ask that you respect our members by not contacting them for commercial purposes without their consent.</font>";
echo "<br><br><br><br>";


if (!empty($_GET['uname']))
{
$_SESSION["abus"] = $_GET['uname'];
header( "Location: ra2.php" );
}
include 'bottom.php';
?>