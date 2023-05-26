import java.io.*;
import java.util.*;
import java.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class crud extends HttpServlet {
    // init(), service(), and destroy() methods
    // doGet(), doPost(), doPut()
    // Create Read Update Delete
    public void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        /* Setting Content type and creating PrintWriter object */
        response.setContentType("text/html");
        PrintWriter pw = response.getWriter();

        try {

            /* JDBC(Java Database Connectivity) Establishment */
            String url = "jdbc:mysql://localhost:3306/mscsem2";
            String user = "root", password = "";
            Class.forName("com.mysql.jdbc.Driver");
            Connection connection = DriverManager.getConnection(url, user, password);

            if (!connection.isClosed()) {
                pw.println("<h2 style=\"color: green\">Connection Established!</h2>");

                /* Sql part */
                String sql = "";
                Statement stmt = connection.createStatement();
                int c = Integer.parseInt(request.getParameter("choice"));

                if (c == 1) {

                    // Creating a table (using execute method)
                    try {
                        sql = request.getParameter("query");
                        stmt.execute(sql);
                        pw.println("<h2 style=\"color: green\">Table Created Successfully!</h2>");
                    } catch (SQLException e) {
                        pw.println("<h2 style=\"color: red\">Table cannot be created!</h2>\nError: "
                                + e.getMessage());
                    }

                } else if (c == 2) {

                    // Insert a new row into the table (using executeUpdate method)
                    try {
                        int uid = Integer.parseInt(request.getParameter("iuid"));
                        String name = request.getParameter("iname");
                        sql = "INSERT INTO Test (uid, name) VALUES(" + uid + ", '" + name + "');";
                        stmt.executeUpdate(sql);
                        pw.println("<h2 style=\"color: green\">Row added Successfully!</h2>");
                    } catch (SQLException e) {
                        pw.println("<h2 style=\"color: red\">Row cannot be added!</h2>\nError: "
                                + e.getMessage());
                    }

                } else if (c == 3) {

                    // Update row(s) in the table (using executeUpdate method)
                    try {
                        int uid = Integer.parseInt(request.getParameter("uuid"));
                        String name = request.getParameter("uname");
                        sql = "UPDATE Test SET name = '" + name + "' WHERE uid = " + uid + ";";
                        stmt.executeUpdate(sql);
                        pw.println("<h2 style=\"color: green\">Row updated Successfully!</h2>");
                    } catch (SQLException e) {
                        pw.println("<h2 style=\"color: red\">Row cannot be updated!</h2>\nError: " +
                                e.getMessage());
                    }

                } else if (c == 4) {

                    // Delete row(s) from the table (using executeUpdate method)
                    try {
                        int uid = Integer.parseInt(request.getParameter("duid"));
                        sql = "DELETE FROM Test WHERE uid = " + uid + ";";
                        stmt.executeUpdate(sql);
                        pw.println("<h2 style=\"color: green\">Row deleted Successfully!</h2>");
                    } catch (SQLException e) {
                        pw.println("<h2 style=\"color: red\">Row cannot be deleted!</h2>\nError: " +
                                e.getMessage());
                    }

                } else {

                    // Reading row(s) from the table (using executeQuery method)
                    try {
                        sql = "SELECT * FROM Test;";
                        ResultSet rs = null;
                        rs = stmt.executeQuery(sql);
                        while (rs.next()) {
                            pw.println("<h2 style=\"color: blue\">Uid: " + rs.getString("uid") + "\tName: "
                                    + rs.getString("name") + "</h2><br/>");
                        }
                    } catch (SQLException e) {
                        pw.println("<h2 style=\"color: red\">Rows cannot be Read!</h2>\nError: " + e.getMessage());
                    }

                }

                // Always close the connection
                stmt.close();
                connection.close();
            }

        } catch (Exception e) {
            pw.println("<h2 style=\"color: red\">Connection cannot be Established!</h2>\nError: " + e.getMessage());
        }

        pw.close();
    }
}