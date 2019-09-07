<details class="spoiler">
	<summary class="spoiler-header">
		<span class="spoiler-title">
			<xsl:choose>
				<xsl:when test="@spoiler and string-length(normalize-space(@spoiler)) > 0">
					<xsl:choose>
						<xsl:when test="string-length(normalize-space(@spoiler)) > 140">
							<xsl:value-of select="concat(normalize-space(substring(normalize-space(@spoiler), 0, 140)), '…')"/>
						</xsl:when>
						<xsl:otherwise>
							<xsl:value-of select="normalize-space(@spoiler)"/>
						</xsl:otherwise>
					</xsl:choose>
				</xsl:when>
				<xsl:when test="@title and string-length(normalize-space(@title)) > 0">
					<xsl:choose>
						<xsl:when test="string-length(normalize-space(@title)) > 140">
							<xsl:value-of select="concat(normalize-space(substring(normalize-space(@title), 0, 140)), '…')"/>
						</xsl:when>
						<xsl:otherwise>
							<xsl:value-of select="normalize-space(@title)"/>
						</xsl:otherwise>
					</xsl:choose>
				</xsl:when>
				<xsl:otherwise>{L_SPOILER}</xsl:otherwise>
			</xsl:choose>
		</span>
		<span class="spoiler-status"></span>
	</summary>
	<div class="spoiler-body"><xsl:apply-templates/></div>
</details>
