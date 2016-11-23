<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet  version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:template match="vtu">
<html>
	<head><title>vtu_info</title></head>
	<body>
	<center>
		<h1>STUDENT INFO</h1>
	<table border="1.0">
		<tr><td>name</td><td>USN</td><td>branch</td><td>college</td></tr>
		<xsl:for-each select="student">
		<tr>
		<td><xsl:value-of select="name"/></td>
		<td><xsl:value-of select="usn"/></td>
		<td><xsl:value-of select="branch"/></td>
		<td><xsl:value-of select="college"/></td>
		</tr>
		</xsl:for-each>
	
	</table>
	</center>
	</body>
</html>
</xsl:template>
</xsl:stylesheet>


