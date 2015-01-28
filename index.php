<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web2PD</title>
<script language="JavaScript" type="text/javascript" src="ajax.js"></script>
</head>

<body>

<form id="form" name="form2" method="get" action="index.php" onSubmit="return false">
  Message: <input name="msg" type="text" placeholder="Set a message to send." />
  <input type="button" value="Send to PD" onClick="web2pd(form.msg.value)" >
  
  <br /><br />
  
  Defined Messages:
  <br />
  <input type="button" name="msg2" value="Hell o World" onClick="web2pd(form.msg2.value)" />
  <input type="button" name="msg3" value="127"          onClick="web2pd(form.msg3.value)" />
  <input type="button" name="msg4" value="hi :)"        onClick="web2pd(form.msg4.value)" />
  <input type="button" name="msg5" value="#@*12+$%"     onClick="web2pd(form.msg5.value)" />
</form>


</body>
</html>