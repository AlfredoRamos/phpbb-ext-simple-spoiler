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
		<div class="spoiler-status">
			<i class="icon fa-eye-slash fa-fw" aria-hidden="true" title="{L_SPOILER_SHOW}"></i>
			<span>{L_SPOILER_SHOW}</span>
		</div>
	</div>
	<div class="spoiler-body">{TEXT1}</div>
</div>
