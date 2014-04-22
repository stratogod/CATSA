<? 
	
	
	$ldap="ldap.missouri.edu";
	
	$usr = $_POST["pawprint"];
	$pwd = $_POST["password"];   
	
	include("db.php");
	
	$query = mysql_query("SELECT * FROM users WHERE username='$usr'");
	$numrows = mysql_num_rows($query);	


if ($numrows!=0) {
   $ds=ldap_connect($ldap,389);  
   $ldapbind=false;
   if(ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3))      
        if(ldap_start_tls($ds)) 
		{
		$ldapbind = ((@ldap_bind($ds, $usr.'@umh.edu', $pwd) || $ldapbind = @ldap_bind($ds, $usr.'@col.missouri.edu', $pwd) || $ldapbind = @ldap_bind($ds, $usr.'@umsystem.umsystem.edu', $pwd) || $ldapbind = @ldap_bind($ds, $usr.'@tig.mizzou.edu', $pwd)) && ($usr != "" && $pwd != "") && ($numrows!=0));
		}
		$dn = "dc=edu";
		ldap_close($ds);
		
		
		if(!$ldapbind) {
       echo "Sorry, you either entered the wrong information or you do not have access to this secure area.";
   }  else {
       echo "OK";
	   session_start();
	   $_SESSION['started'] = true;
	   $_SESSION['basic_is_logged_in'] = true;
	   $_SESSION["user"] = $usr; //store the username in a session var
	   $lastlogin = date('Y-m-d H:i:s');
	   $sql = "UPDATE users SET lastlogin='$lastlogin' WHERE username='$usr'";
	   mysql_query($sql); 
	   header('Location: https://catsa.missouri.edu/main.php');
   }
   
   
} else {
	
	   $ds=ldap_connect($ldap,389);  
   $ldapbind=false;
   if(ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3))      
        if(ldap_start_tls($ds)) 
		{
		$ldapbind = ((@ldap_bind($ds, $usr.'@umh.edu', $pwd) || $ldapbind = @ldap_bind($ds, $usr.'@col.missouri.edu', $pwd) || $ldapbind = @ldap_bind($ds, $usr.'@umsystem.umsystem.edu', $pwd) || $ldapbind = @ldap_bind($ds, $usr.'@tig.mizzou.edu', $pwd)) && ($usr != "" && $pwd != ""));
		}
		$dn = "dc=edu";
		ldap_close($ds);
		
		if(!$ldapbind) {
       echo "Sorry, you either entered the wrong information or you do not have access to this secure area.";
   }  else {
       echo "OK";
	   session_start();
	   $_SESSION['started'] = true;
	   $_SESSION['basic_is_logged_in'] = true;
	   $_SESSION["user"] = "Guest"; //store the username in a session var
	   $lastlogin = date('Y-m-d H:i:s');
	   $sql = "UPDATE users SET lastlogin='$lastlogin' WHERE username='$usr'";
	   mysql_query($sql); 
	   header('Location: https://catsa.missouri.edu/main.php');
   }
   
		
}
		

		
   
   
   
   
   	   // Manual logins and test accounts
	   if ((($usr == "dbeard") && ($pwd == "passw0rd!")) || (($usr == "amartin") && ($pwd == "passw0rd!")))
	   {
	   session_start();
	   $_SESSION['started'] = true;
	   $_SESSION['basic_is_logged_in'] = true;
	   $_SESSION["user"] = $usr; //store the username in a session var
	   $lastlogin = date('Y-m-d H:i:s');
	   $sql = "UPDATE users SET lastlogin='$lastlogin' WHERE username='$usr'";
	   mysql_query($sql); 
	   header('Location: https://catsa.missouri.edu/main.php');
		} 
		
		
		
	  // Admin Login
	   if($ldapbind) {
		   if ((($usr == "thompsonstev")))
	   {
	   session_start();
	   $_SESSION['started'] = true;
	   $_SESSION['basic_is_logged_in'] = true;
	   $_SESSION["user"] = $usr; //store the username in a session var
	   $lastlogin = date('Y-m-d H:i:s');
	   $sql = "UPDATE users SET lastlogin='$lastlogin' WHERE username='$usr'";
	   mysql_query($sql); 
	   header('Location: https://catsa.missouri.edu/admin/');
		} 
	   }

?>
