<form name="indexform" enctype="multipart/form-data" action="insert.php" method="post">
	<table class="clsWithoutBorder">
        <tr>
		<td></td>
	         <td class="clsWithoutBorder">
	    	      <table class="">
    	          <tr>
				  <!--<td align="right" width="280"><h1></h1> </td>-->
				  <td align="right" width="350">
				  <img src="images/close.png" onClick="closebox()" /></td>
            	  </tr>
				  </table>
				  <table>
              	  <tr>
	              <td width="250" height="30"><b>First Name</b></td>
    	          <td><input id="user_profile_attributes_first" name="fname" size="30" type="text" /></td>
        	      </tr>
            	  <tr>
	              <td height="40"><b>Last Name</b></td>
    		      <td><input id="user_profile_attributes_last" name="lname" size="30" type="text" /></td>
            	  </tr>
	              <tr>
    	          <td height="40"><b>Email</b></td>
        	      <td><input id="user_email" name="email" size="30" type="text" /></td>
            	  </tr>
	              <tr>
				  <td height="40"><b>Password</b></td>
    	          <td><input id="user_password" name="password" size="30" type="password" /></td>
        	      </tr>
				  <tr>
				  <td height="40"><b>Confirm Password</b></td>
    	          <td><input id="user_password_confirmation" name="repassword" size="30" type="password" /></td>
        	      </tr>
				  
				  <tr>
				  <td colspan="2"><input name="user[terms]" type="hidden" value="0" /><input id="user_terms" name="user[terms]" type="checkbox" value="1" />
<span>I have read and understood quirky's <a href="">terms &amp; conditions</a></span></td>
				  </tr>
				  
				  <tr>
    	          <td>	</td>
        	      <td height="50"><input type="submit" name="submit" value="Submit" class="btnstyle" />
				  </td>
            	  </tr>
	              </table>          </td>
        </tr>
    </table>

</form>