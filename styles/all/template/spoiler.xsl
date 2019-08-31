<details class="spoiler">
	<summary class="spoiler-title">
		<xsl:choose>
			<xsl:when test="@spoiler">
				<xsl:value-of select="@spoiler"/>
			</xsl:when>
			<xsl:when test="@title">
				<xsl:value-of select="@title"/>
			</xsl:when>
			<xsl:otherwise>{L_SPOILER}</xsl:otherwise>
		</xsl:choose>
	</summary>
	{TEXT1}
</details>
