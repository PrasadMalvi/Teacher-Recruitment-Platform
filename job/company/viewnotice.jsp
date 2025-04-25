<table width="36%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>Notice id</td>
    <td>To</td>
    <td>Notice name</td>
    <td>Description</td>
    <td>Date</td>
  </tr>
  <%@page import="java.sql.*"%>
<%@page import="sorg.charity"%>
<jsp:useBean id="s" class="sorg.charity"/>
<jsp:getProperty name="s" property="conn"/>
<%
ResultSet rs=s.st.executeQuery("select *from notice");
while(rs.next())
{
%>
  <tr>
    <td>&nbsp;<%=rs.getInt("Notice id"%></td>
    <td>&nbsp;<%=rs.getString("To"%></td>
    <td>&nbsp;<%=rs.getString("Notice name"%></td>
    <td>&nbsp;<%=rs.getString("Description"%></td>
    <td>&nbsp;<%=rs.getString("Date"%></td>
  </tr>
  <%
  }
  %>
</table>
