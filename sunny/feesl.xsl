<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html>
    
    <head>
        <style>
            body{
            background: #56ab2f;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #a8e063, #56ab2f);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #a8e063, #56ab2f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            }
            h2{
            font-size: 35px;
            }
            table{
            width: 50%;
            height: 300px;
            color: black;
            font-size: 30px;
            border: 4px solid black;
            border-collapse: collapse;
            }
            th,td{
            border: 4px solid black;
            font-size: 30px;
            text-align: center;
            }
            p{
            font-size: 20px;
            color: red;
            }
        </style>
    </head>
<body>
<h2>Fees Details:</h2>

<table>
<tr bgcolor="red">
<th>coach_name</th>
<th>batting</th>
<th>bowling</th>
<th>all_rounder</th>
</tr>


<xsl:for-each select="Fees/Fees-Details">
<xsl:choose>
<xsl:when test="all_rounder>=7000">


<tr bgcolor="orange">
<td><xsl:value-of select="coach_name"/></td>
<td><xsl:value-of select="batting"/></td>
<td><xsl:value-of select="bowling"/></td>
<td><xsl:value-of select="all_rounder"/></td>
</tr>
</xsl:when>
<xsl:otherwise>
<tr>
<td><xsl:value-of select="coach_name"/></td>
<td><xsl:value-of select="batting"/></td>
<td><xsl:value-of select="bowling"/></td>
<td><xsl:value-of select="all_rounder"/></td>
</tr>
</xsl:otherwise>
</xsl:choose>
</xsl:for-each>
</table>
    <p>Note: All rounder fees above 5000 are marked as orange</p>
</body>
</html>
</xsl:template>
</xsl:stylesheet>