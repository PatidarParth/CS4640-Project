<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
  <form id="login" action="mailService" method="POST">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="email" name="inputEmail" id="inputEmail" class="form-control"
               placeholder="Email address" required autofocus></br>
 		<label for="inputEmail" class="sr-only">Email Message</label>
        <input  name="email_msg" id="email_msg" class="form-control"
               placeholder="Email address" required autofocus></br>
        <label for="inputEmail" class="sr-only">Email Subject</label>
        <input name="email_subject" id="email_subject" class="form-control"
               placeholder="Email address" required autofocus></br>
         <button id="signin" class="btn btn-info" type="submit">Send</button>
  </form>
</body>
</html>