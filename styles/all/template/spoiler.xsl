<section class="spoiler">
	<header class="spoiler-header spoiler-trigger">
		<div class="spoiler-title">
			<xsl:choose>
				<!-- deprecated:start -->
				<!-- kept just for backward compatibility -->
				<xsl:when test="@spoiler and string-length(normalize-space(@spoiler)) > 0">
					<xsl:choose>
						<xsl:when test="string-length(normalize-space(@spoiler)) > 85">
							<xsl:value-of select="concat(normalize-space(substring(normalize-space(@spoiler), 0, 85)), '…')"/>
						</xsl:when>
						<xsl:otherwise>
							<xsl:value-of select="normalize-space(@spoiler)"/>
						</xsl:otherwise>
					</xsl:choose>
				</xsl:when>
				<!-- deprecated:end -->
				<xsl:when test="@title and string-length(normalize-space(@title)) > 0">
					<xsl:choose>
						<xsl:when test="string-length(normalize-space(@title)) > 85">
							<xsl:value-of select="concat(normalize-space(substring(normalize-space(@title), 0, 85)), '…')"/>
						</xsl:when>
						<xsl:otherwise>
							<xsl:value-of select="normalize-space(@title)"/>
						</xsl:otherwise>
					</xsl:choose>
				</xsl:when>
				<xsl:otherwise>{L_SPOILER}</xsl:otherwise>
			</xsl:choose>
		</div>
		<div class="spoiler-status">{L_SPOILER_SHOW}</div>
	</header>
	<div class="spoiler-body">{TEXT1}</div>
</section>
