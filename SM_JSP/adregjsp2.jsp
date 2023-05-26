<%-- 
    Document   : adregjsp
    Created on : May 4, 2019, 11:06:45 AM
    Author     : user
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.util.*" %>
<%@page import="java.sql.*" %>
<%@page import="javax.sql.*" %>

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>

    <body>
        <%
		out.println("<h1>Hello World!</h1>");

           try
		{

		/*      Class.forName("com.mysql.jdbc.driver");
			Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/my//db","root","system");
		
		*/	

	        Class.forName ("sun.jdbc.odbc.JdbcOdbcDriver");
		
	Connection con= DriverManager.getConnection("jdbc:odbc:mydb"); // mydb:DSN
		out.println("Connection created ....");

//		Statement st=con.createStatement();
     
		String nm=request.getParameter("nam");
		String id=request.getParameter("aid");
           String pwd=request.getParameter("passwd");
           String g=request.getParameter("gender");
           String mail=request.getParameter("email");
           String cno=request.getParameter("contact");

out.println(" "+nm+" "+id+" "+pwd+" "+g+" "+mail+" "+cno);

//PreparedStatement ps=con.prepareStatement("insert into ad_reg values ('"+nm+"','"+id+"','"+pwd+"','"+g+"','"+mail+"','"+cno+"')");

String sql="insert into ad_reg values ('"+nm+"','"+id+"','"+pwd+"','"+g+"','"+mail+"','"+cno+"')";

/*		ps.setString(1,nm); 
		ps.setString(2,id); 
		ps.setString(3,pwd); 
		ps.setString(4,g); 
		ps.setString(5,mail);
		ps.setString(6,cno);
*/
		//int i=ps.executeUpdate(); 
			


          int i=st.executeUpdate(sql);

		out.println("Writing to Database done....");

                /*String sql1="select * from ad_reg ";
                ResultSet rs=st.executeQuery(sql1);
                out.println("Reading from Database done....");
                while(rs.next()){*/

		}
            	catch(Exception ex)
            	{
               		%>hoini<% 
            	}
			finally
			{
				out.println("<br>Finally Block");
			}

            %>
    </body>
</html>
