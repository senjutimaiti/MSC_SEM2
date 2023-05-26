<%@ page import="java.io.*"%>
<%@ page import="java.sql.*"%>
<body>
    <%
        String name=request.getParameter("name");
        int number=Integer.parseInt(request.getParameter("number"));
        out.println(name);
        out.println(number);
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306","root","");
            //Insert  Statement
            PreparedStatement stmt=con.prepareStatement("Insert into test values(?,?)");
            stmt.setString(1,name);
            stmt.setInteger(2,number);
            int i=stmt.executeUpdate()
            //Select Statement
            Statement st=con.createStatement();
            Resultset rs=rs.executeQuery("Select * from test where name='"+name+"'");
            while(rs.next()){
                //
            }
            //Update Statement
            PreparedStatement stmt2=con.prepareStatement("UPDATE test set number=? where name='"+name+"'");
            stmt.setInteger(1,number);
            int j=stmt2.executeUpdate();
        }
          catch(SQLException e)
        {
            out.println(e);
            e.printStackTrace();
        }
        %>
</body>