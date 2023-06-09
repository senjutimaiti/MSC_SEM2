import java.io.*;
import java.sql.Date;
import java.util.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class HitCountServlet extends HttpServlet {
	private int hitCount;

	public void init()
	{
		// Reset hit counter.
		hitCount = 0;
	}
	public void doGet(HttpServletRequest request,
					HttpServletResponse response)
		throws ServletException, IOException
	{
		// Set response content type
		response.setContentType("text/html");

		// This method executes whenever the servlet is hit
		// increment hitCount
		hitCount++;
		PrintWriter out = response.getWriter();
		String title = "Count of total number of hits";
		String docType
			= "<!doctype html public \"-//w3c//dtd html 4.0 "
			+ "transitional//en\">\n";

		out.println(
			docType + "<html>\n"
			+ "<head><title>" + title + "</title></head>\n"
			+ "<body bgcolor = \"#f0f0f0\">\n"
			+ "<h1 align = \"center\">" + title + "</h1>\n"
			+ "<h2 align = \"center\">" + hitCount
			+ "</h2>\n"
			+ "</body>"
			+ "</html>");
	}

	public void destroy()
	{
		// This is an optional step,
		// however you may store the hitCount value in your
		// database if you like.
	}
}
