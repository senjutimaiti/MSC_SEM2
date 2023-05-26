<%@ page import="java.sql.*" %>
<%@ page import="java.io.*" %>

<html>
<head>
	<title>Connection with mysql db</title>
</head>
<body>
	<h1>Connection status</h1>
	<%
	try
	{
		String connectionURL = "jdbc:mysql://localhost:3306/mscsem2";
		Connection connection = null;
		Class.forName("com.mysql.jdbc.Driver");
		connection = DriverManager.getConnection(connectionURL, "root", "");
		if(!connection.isClosed()){
			out.println("<h1 style='color:green;'>connection established</h1>");
			connection.close();
		}
	}
	catch(Exception e){
		out.println(e);
		out.println("Unable to connect");
	}
	%>
</body>
</html>