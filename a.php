<html>

<script language="javascript">
function listboxchange(p_index)
{
<%
OpenSqlConn
mySQL = "SELECT * FROM menu Order By menuid "

'Get Recordset using our SQL
Set myRS = Conn.Execute(mySQL)
%>
switch (p_index)
{
<%
'Loop Through all authors and books
Do Until myRS.eof
StartAuthor = myRS("menuid")
Cnt = 0

%>
case "<%=StartAuthor%>" :
<%

do until myrs.eof or StartAuthor <> myRS("menuid")
%>
document.myform.listbox2.options[<%=cnt%>]=new Option("<%=myRs("sizeid")%>","<%=myRs("size")%>");
<%
Cnt = Cnt + 1
myrs.movenext
if myrs.eof then exit do
Loop
%>
break;
<%
Loop

%>
}
return true;
}
</script>


<%
mySQL = "SELECT DISTINCT menuid FROM menu Order By menuid asc"


Set myRS = Conn.Execute(mySQL)

do until myrs.eof
ListBox1 = ListBox1 & "<option value=""" & myRs("menuid") & """>" & myRs("menuid") & "</option>"
myRs.movenext
loop

myRS.close
Set myRS = nothing
Conn.close

%>
</head>
<body>
<form name="myform" action="" method="get">
<select name="listbox1" id="listbox1" onChange="javascript: listboxchange(this.options[this.selectedIndex].value);">
<option value="">Please Select</option>
<%=ListBox1%>
</select>

<select name="listbox2">
<option value="">Please Select</option>
</select>
<input type="submit" name="submit" value="show values" />
</form>


</body>
</html>