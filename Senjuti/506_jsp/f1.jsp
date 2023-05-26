<%! long fibo(long n){
	if(n<=2){
		return 1;
	}
	else {
		return fibo(n-1)+fibo(n-2);
	}
}
%>
<%
	long n = Long.parseLong(request.getParameter("t1"));
	out.print("The fibonacci series :");

	for(long i = 1;  i <= n; i++){
		out.print(" "+fibo(i));
	}
%>
