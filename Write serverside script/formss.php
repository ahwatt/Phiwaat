<?php
	echo "You will get your output here:<br>";
	echo isset($_POST['username'])?$_POST['username']:null;
	echo '<br>';
	echo isset($_POST['useremail'])?$_POST['useremail']:null;
	echo '<br>';
	echo isset($_POST['usertel'])?$_POST['usertel']:null;
	echo '<br>';
	echo isset($_POST['userconmet'])?$_POST['userconmet']:null;
	echo '<br>';
	echo isset($_POST['useravaildate'])?$_POST['useravaildate']:null;
	echo '<br>';
	echo isset($_POST['userbrowsers'])?$_POST['userbrowsers']:null;
	echo '<br>';
	echo isset($_POST['userftype_1'])?$_POST['userftype_1']:null;
	echo '<br>';
	echo isset($_POST['userftype_2'])?$_POST['userftype_2']:null;
	echo '<br>';
	echo isset($_POST['userftype_3'])?$_POST['userftype_3']:null;
	echo '<br>';
	echo isset($_POST['userftype_4'])?$_POST['userftype_4']:null;
	echo '<br>';
	echo isset($_POST['usermessage'])?$_POST['usermessage']:null;
	echo '<br>';


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Handling in PHP</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><br>
      <div>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="username">
      </div>
      <div>
        <label for="mail">E-mail:</label><br>
        <input type="email" id="mail" name="useremail">
      </div>
      <div>
        <label for="telephone">Telephone:</label><br>
        <input type="tel" id="tel" name="usertel">
      </div>
      <div>
        <label for="cmethod">Contact Preference:</label><br>
        <input type="radio" id="conmet" name="userconmet" value="mail" checked>Email&nbsp;&nbsp;
        <input type="radio" id="conmet" name="userconmet" value="tel">Telephone<br>
      </div>
      <div>
        <label for="availDate">Available Date:</label><br>
        <input type="date" id="adate" name="useravaildate">
      </div>
      <div>
        <label for="availDate">Favourite Browser:</label><br>
        <input list="browsers" name="userbrowsers">
        <datalist id="browsers">
          <option value="Chrome">
          <option value="Edge">
          <option value="Firefox">
          <option value="Opera">
          <option value="Safari">
        </datalist>
      </div>
      <div>
        <label for="feedtype">Feedback type:</label><br>
        <label for="ftype_1">Say Hello</label>
        <input type="checkbox" id="ftype_1" name="uftype_1" value="1"><br>
        <label for="ftype_2">Complain</label>
        <input type="checkbox" id="ftype_2" name="uftype_2" value="2"><br>
        <label for="ftype_3">Share Opinion</label>
        <input type="checkbox" id="ftype_3" name="uftype_3" value="3"><br>
        <label for="ftype_4">Share Joke</label>
        <input type="checkbox" id="ftype_4" name="uftype_4" value="4"><br><br>
      </div>
      <div>
        <label for="msg">Message:</label><br>
        <textarea id="msg" name="usermessage" style="width:400px; height:200px"></textarea><br>
      </div>
      <div class="button">
        <button type="submit">Submit</button>
      </div>
    </form>
  </body>
</html>
