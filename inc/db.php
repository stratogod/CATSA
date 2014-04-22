<?
$members = mysql_connect("localhost", "catsa_user", "catsaPass!db");
    if(!$members) 
        {
            echo "<p>Sorry! We could not log you in at this time. Please Try again later!</p>";
        }
mysql_select_db("catsa_db", $members); 
?>