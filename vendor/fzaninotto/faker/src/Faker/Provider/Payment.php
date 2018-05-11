<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
</head>
<body>
<form name="form1" method="post" action="<?php echo e(route('check')); ?>">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  Login<br>
  <table border="1" style="width: 300px">
    <tbody>
    <?php echo e($tt); ?>

      <tr>
        <td> &nbsp;Username</td>
        <td>
          <input name="txtUsername" type="text" id="txtUsername">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  
  <input type="submit" name="Submit" value="Login">
</form>
</body>
</html>