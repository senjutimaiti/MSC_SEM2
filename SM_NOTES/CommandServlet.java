import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class CommandServlet extends HttpServlet
{
  interface Command
  {
    public void execute()
           throws ServletException, IOException;
  }

  protected void doGet(HttpServletRequest req,
                       HttpServletResponse res)
            throws ServletException, IOException
  {
    final PrintWriter out = res.getWriter();

    Command c = new Command(){

      private boolean lineBreak = true;

      public void execute()
	     throws ServletException, IOException
      {
        out.println("<HTML><BODY>");
        printLink("foo.html");
        printLink("bar.html");
        out.println("</BODY></HTML>");
      }

      private void printLink(String s)
	      throws IOException
      {
        out.print("<A href=\"" + s + "\">" + s + "</A>");
	if(lineBreak) out.print("<BR>");
      }
    };

    c.execute();
  }
}
