<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TPA: Trans Planet Airlines - Start</title>
<link href="styles/main.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#submit").click(function(e) {
			e.preventDefault();
			var theChoice = $('input:radio:checked').val()
			localStorage.setItem("theChoice",theChoice);
			window.location = "beam-up.php";
		});
	});
</script>
</head>

<body>
<div id="outerWrapper">
  <div id="header"><img src="images/red_bg.jpg" width="410" height="181" alt="Red Carpet" /><br>
  <img src="images/tpa_bg.jpg" width="373" height="37" alt="Red-Carpet">
  </div>
  <div id="nav">

  <h1>Create Your Red Carpet Souvenir!</h1>
    <ul>
      <li><a href="index.php">START</a></li>
      <li><a href="beam-up.php">UPLOAD</a></li>
      <li><a href="modify.php">MODIFY</a></li>
      <li id="captionNav"><a href="javascript:void();">CAPTION</a></li>
      <li><a href="javascript:void(); id="saveImage" target="_blank">SAVE</a></li>
    </ul>
  </div>
<div id="content">
  <h1>Step 1: Choose your souvenir background</h1>
  <p>&nbsp;</p>
  <form name="form1" method="post" action="">
    <table>
      <tr>
        <td><label><input type="radio" name="bgImage" value="redcarpet_images.jpeg" id="radioImage_0"></label></td>
        <td>
        Leister Square</td>
        <td><img src="images/redcarpet_images.jpeg" width="320" height="238"></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="bgImage" value="hollywood_redcarpet.png" id="radioImage_1">
        </label></td>
        <td>Hollywood</td>
        <td><img src="images/hollywood_redcarpet.png" width="320" height="238"></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="bgImage" value="canne_redcarpet.jpeg" id="radioImage_2">
        </label></td>
        <td> Canne Festival</td>
        <td><img src="images/canne_redcarpet.jpeg" width="320" height="238"></td>
      </tr>
    </table>
    <p>
      <input type="submit" name="submit" id="submit" value="Select Background and Proceed">
    </p>
  </form>
</div>
<div id="footer"> 
<p>
  <a href="git@heroku.com:red-carpet.git">git@heroku.com:red-carpet.git</a>
</p>

</body>
</html>
