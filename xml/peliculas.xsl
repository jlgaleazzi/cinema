<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<ul class="lista-peliculas">
	<xsl:for-each select="peliculas/pelicula">
    <li class="pelicula">
    <a>
        <!--<xsl:attribute name="href">
            <xsl:value-of select="urlPelicula"/>
        </xsl:attribute>-->
        <div class="container-pelicula">
           <img class="thumb">
            <xsl:attribute name="src">
               <!-- <xsl:value-of select="thumbnail"/> -->
               <xsl:apply-templates select="thumbnail"/>
               </xsl:attribute>
           </img>
       </div>
      </a>
      <div class="areaTitulo">
        <div class="tituloPelicula"><xsl:value-of select="titulo"/> </div>
   	  </div>
      <div class="boton_buscar_secc">
      <a> <xsl:attribute name="href">
            		 	<xsl:apply-templates select="idPelicula"/>
       			 	</xsl:attribute>
                 <xsl:text>Buscar Funciones</xsl:text>
     </a>
      </div>
    </li>
    </xsl:for-each>
</ul>
</xsl:template>
<xsl:template match="thumbnail">
<xsl:text>thumbnails/</xsl:text>
	<xsl:value-of select="."/>
</xsl:template>

<xsl:template match="idPelicula">
    <xsl:text>/cines/funciones.php?idpelicula=</xsl:text>
       <xsl:value-of select="."/>
</xsl:template>

</xsl:stylesheet>