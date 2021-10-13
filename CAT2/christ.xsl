<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>

 <style>
         table, th, td {
          border: 5px solid green;
          text-align:center;
          
          }
         th, td {
         padding: 20px;
         background-color:none;
         
       }
</style>

<body>
<center>
<h1>GATEWAYS 2021</h1>
<h2>Participant List</h2>
<table cellspacing="10" width="90%">
<tr bgcolor="red">
<th>STU-NAME</th>
<th>STU-BRANCH</th>
<th>STU-COLLEGE</th>
<th>STU-EMAIL</th>
</tr>
<xsl:for-each select="CHRIST/CS">
<tr>
<td bgcolor="LightGray"><xsl:value-of select="STU-NAME"/></td>
<td bgcolor="clay"><xsl:value-of select="STU-BRANCH"/></td>
<td bgcolor="LightGray"><xsl:value-of select="STU-COLLEGE"/></td>
<td bgcolor="LightGray"><xsl:value-of select="STU-EMAIL"/></td>

</tr>
</xsl:for-each>
</table>
</center>

</body>
</html>
</xsl:template>
</xsl:stylesheet>