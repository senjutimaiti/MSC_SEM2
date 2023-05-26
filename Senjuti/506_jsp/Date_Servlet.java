import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.util.*;


 public class Date_Servlet extends javax.servlet.http.HttpServlet implements javax.servlet.Servlet {
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		Date dt=new Date();
		response.setContentType("text/html");
		PrintWriter out=response.getWriter();
		out.println("hello today is :"+dt);
		out.close();
	}  	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request,response);
	}     	  	    
}

