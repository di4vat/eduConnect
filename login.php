<?php
include ("classes/includes.php");
$html=new HtmlHeads();
$html->putHead();
echo "<body>";
echo "<div id=\"loginlogo\">";
echo "<table width=\"100%;\" > <tr>";
echo "<td style=\"margin:4px;width:73%;\"><img src=\"".ABS_PATH."/resource/logo.png\" alt=\"eduConnect Logo\" /></td><td width=\"20%\">";
echo "<table width=\"100%\" id=\"loginform\"><tr><td>Email:</td><td>Password:</td></tr>";
echo "<tr>";
echo "<form action=\"".ABS_PATH."/doLogin.php".(isset($_GET['redTo'])?"?redTo=".$_GET['redTo']:"")."\" method=\"post\">";
echo "<td><input type=\"text\" name=\"email\" /></td>";
echo "<td><input type=\"password\" name=\"pw\" /></td>";
echo "</tr>";
echo "<td><input type=\"checkbox\" name=\"remember\" value=\"true\" />Remember Me</td><td><input type=\"submit\" id =\"loginsubmit\" value=\"Login\" /></td></table>";
echo "</td><td></td>";
echo "</tr></table>";
echo "</div>";
echo "<table id=\"welcome\">";
echo "<td widht=\"60%\" valign=\"top\" align=\"center\"><img src=\"".ABS_PATH."/resource/logo.jpg\" alt=\"logo\" /></td>";
echo "<td width=\"40%\" valign=\"top\">";
echo "<h2 style=\"color:#404004;\">Stay Connected with Study, Everywhere, Anytime!</h2>";
echo "<ul>";
echo "<li>New Friends</li>";
echo "<li>Private Messaging</li>";
echo "<li>Chats</li>";
echo "<li>Forums</li>";
echo "<li>Groups</li>";
echo "</ul>";
echo "</td>";
echo "</table>";
$html->putFooter();
?>