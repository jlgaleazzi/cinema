<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<ul class="lista-complejos">
	<xsl:for-each select="complejos/complejo">
    <li class="complejo">
    
       
        <div class="container-complejo">
         
             <div class="nombre-complejo">  <xsl:value-of select="Nombre"/></div>
             <div class="direccion-complejo">
                 <xsl:value-of select="Direccion"/><br />
                 <xsl:value-of select="Ciudad"/>
                 <xsl:value-of select="Estado"/>
             </div>
             
             <div class="seleccionar-complejo">
                 
                 <div class="boton-seleccionar">
                <a> <xsl:attribute name="href">
            		 	<xsl:apply-templates select="idComplejo"/>
       			 	</xsl:attribute>
                 <xsl:text>ver funciones</xsl:text>
                </a>
                 </div>
                 
             </div>
        
        </div>
      
      
      
    </li>
    </xsl:for-each>
</ul>
</xsl:template>

<xsl:template match="idComplejo">
    <xsl:text>/cines/fcomplejo.php?idComplejo=</xsl:text>
       <xsl:value-of select="."/>
</xsl:template>


</xsl:stylesheet>