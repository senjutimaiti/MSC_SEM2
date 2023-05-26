import java.io.*;
import java.sql.*;
import java.util.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class dbCon extends HttpServlet {
    // init(), service(), and destroy() methods
    // doGet() doPost()
    public void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        response.setContentType("text/html");
        PrintWriter pw = response.getWriter();

        try {

            String url = "jdbc:mysql://localhost:3306/mscsem2";
            String user = "root", password = "";
            Class.forName("com.mysql.jdbc.Driver");
            Connection connection = DriverManager.getConnection(url, user, password);

            if (!connection.isClosed()) {
                pw.println("<h2>Connection Established</h2>");
                connection.close();
            } else {
                pw.println("<h2>Connection Failed</h2>");
            }

        } catch (Exception e) {
            pw.println("<h2>Error: " + e.getMessage() + "</h2>");
        }
    }
}
