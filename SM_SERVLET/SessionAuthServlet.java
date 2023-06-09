import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public final class SessionAuthServlet extends HttpServlet
{
  protected void doGet(HttpServletRequest req, HttpServletResponse res)
            throws ServletException, IOException
  {
    sendPage(req, res, req.getSession(false));
  }

  protected void doPost(HttpServletRequest req, HttpServletResponse res)
            throws ServletException, IOException
  {
    if(req.getParameter("login") != null)
    {
      HttpSession session = req.getSession(true);
      String name = req.getParameter("name");
      if(name == null || name.length()==0) name = "Anonymous";
      session.putValue("name", name);
      sendPage(req, res, session);
    }
    else
    {
      HttpSession session = req.getSession(false);
      if(session != null) session.invalidate();
      sendPage(req, res, null);
    }
  }

  private void sendPage(HttpServletRequest req, HttpServletResponse res,
			HttpSession session)
          throws ServletException, IOException
  {
    res.setContentType("text/html");
    res.setHeader("pragma", "no-cache");
    PrintWriter o = res.getWriter();
    o.print("<HTML><HEAD><TITLE>SessionAuthServlet</TITLE></HEAD><BODY>");
    if(session == null)
      o.print("<FORM METHOD=POST>Please enter your name: "+
	      "<INPUT TYPE=TEXT NAME=\"name\">"+
	      "<INPUT TYPE=SUBMIT NAME=\"login\" VALUE=\"Log in\">"+
	      "</FORM></BODY></HTML>");
    else
      o.print("Hi " + session.getValue("name") +
	      "<P><FORM METHOD=POST><INPUT TYPE=SUBMIT NAME=\"logout\" "+
	      "VALUE=\"Log out\"></FORM></BODY></HTML>");
    o.close();
  }
}
