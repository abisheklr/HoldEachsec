<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body>
  <style>
      #tab {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        #tab td,
        #tab th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        #tab tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        #tab tr:hover {
            background-color: #ddd;
        }
        
        #tab th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4b4276;
            color: white;
        }
    </style>
    <h2>Customer Bill Details</h2>
    <a href="index.php"><button style="color: white;background: blue;postion: relative;margin: 20px;padding: 10px;font-size: 20px;">Go to homepage</button></a>
    <a href="new_store.php"><button style="color: white;background: blue;postion: relative;margin: 20px;padding: 10px;font-size: 20px;position: relative;left: 65%;">Go back to store</button></a>
    <table id="tab" border="1">
      <tr bgcolor="#9acd32">
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
      </tr>
      <xsl:for-each select="Mycart/data">
      <tr>
        <td><xsl:value-of select="ProductID" /></td>
        <td><xsl:value-of select="ProductName" /></td>
        <td><xsl:value-of select="Price" /></td>
        <td><xsl:value-of select="Quantity" /></td>  
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>

