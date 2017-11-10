<%@ include file="login.jsp" %> 
<% 
String uname=request.getParameter("username"); 
out.print("Welcome "+ uname);
session.setAttribute("username",uname); 
%> 
 