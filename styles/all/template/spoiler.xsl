<div class="spoiler">
	<div class="spoiler-header spoiler-trigger">
		<div class="spoiler-title">
			<xsl:choose>
				<xsl:when test="@spoiler">
					<xsl:value-of select="@spoiler"/>
				</xsl:when>
				<xsl:when test="@title">
					<xsl:value-of select="@title"/>
				</xsl:when>
				<xsl:otherwise>{L_SPOILER}</xsl:otherwise>
			</xsl:choose>
		</div>
		<div class="spoiler-status">{L_SPOILER_SHOW}</div>
	</div>
	<div class="spoiler-body">{TEXT1}</div>
</div>
