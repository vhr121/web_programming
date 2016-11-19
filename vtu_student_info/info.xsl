<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:tempate match="vtu">
<html>
	<head>
		<title>student-info</title>
	</head>

	<body>

	<table>
		<tr>
			<th>USN</th>
			<th>Name</th>
			<th>Branch</th>
			<th>College</th>
			<th>mail</th>
		<tr>

		<xsl:for-each select="student">
		<tr>
			<td><xsl:value-of select="usn"</td>
			<td><xsl:value-of select="name"</td>
			<td><xsl:value-of select="branch"</td>
			<td><xsl:value-of select="college"</td>
			<td><xsl:value-of select="mail"</td>
		</tr>
		</xsl:for-each>
	</table>
	</body>
</html>
</xsl:template>
</xsl:stylesheet>