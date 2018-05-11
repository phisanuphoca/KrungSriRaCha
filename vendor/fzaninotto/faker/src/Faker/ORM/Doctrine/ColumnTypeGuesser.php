<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
</head>
<body>
<form name="form1" method="post" action="{{ route('check') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  Login<br>
  <table border="1" style="width: 300px">
    <tbody>
    {{ $tt }}
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
  
  <input atype="submit" name="Submit" value="Login">
</form>
</body>
</html>