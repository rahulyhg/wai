<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="/webformmailer.php" method="post"> 
<input type="hidden" name="subject" value="Submission" /> 
<input type="hidden" name="redirect" value="thankyou.html" />
First Name: <input type="text" name="FirstName" />
Last Name :<input type="text" name="LastName" />
Email: <input type="text" name="email" />
Comments: <textarea name="comments" cols="40" rows="10">
Type comments here.</textarea>
<input type="submit" name="submit" value="submit"/>
<input type="hidden" name="form_order" value="alpha"/> <input type="hidden" name="form_delivery" value="hourly_digest"/> <input type="hidden" name="form_format" value="html"/> </form>
</body>
</html>