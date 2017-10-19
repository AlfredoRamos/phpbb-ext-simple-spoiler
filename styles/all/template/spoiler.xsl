<div class="spoiler">
	<div class="spoiler-header spoiler-trigger">
		<span class="spoiler-title">
			<xsl:choose>
				<!-- [spoiler=title]text[/spoiler] (deprecated) -->
				<xsl:when test="@spoiler">
					<xsl:choose>
						<xsl:when test="string-length(normalize-space(@spoiler)) > 0">
							<xsl:choose>
								<xsl:when test="string-length(normalize-space(@spoiler)) > 65">
									<xsl:value-of select="concat(substring(normalize-space(@spoiler), 0, 65), '…')"/>
								</xsl:when>
								<xsl:otherwise>
									<xsl:value-of select="normalize-space(@spoiler)"/>
								</xsl:otherwise>
							</xsl:choose>
						</xsl:when>
						<xsl:otherwise>{L_SPOILER}</xsl:otherwise>
					</xsl:choose>
				</xsl:when>
				<!-- [spoiler title=text]text[/spoiler] -->
				<xsl:when test="@title">
					<xsl:choose>
						<xsl:when test="string-length(normalize-space(@title)) > 0">
							<xsl:choose>
								<xsl:when test="string-length(normalize-space(@title)) > 65">
									<xsl:value-of select="concat(substring(normalize-space(@title), 0, 65), '…')"/>
								</xsl:when>
								<xsl:otherwise>
									<xsl:value-of select="normalize-space(@title)"/>
								</xsl:otherwise>
							</xsl:choose>
						</xsl:when>
						<xsl:otherwise>{L_SPOILER}</xsl:otherwise>
					</xsl:choose>
				</xsl:when>
				<xsl:otherwise>{L_SPOILER}</xsl:otherwise>
			</xsl:choose>
		</span>
		<span class="spoiler-status">{L_SPOILER_SHOW}</span>
	</div>
	<div class="spoiler-body">{TEXT1}</div>
</div>
