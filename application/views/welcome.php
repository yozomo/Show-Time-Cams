<div class="container">
	<div class="page-nav">
	</div>
	<div class="page-header">
	</div>
	<div class="page-body">	
		<div id="tabs">     
			<ul>
				<?php
					foreach ($model_category->result() as $category) {
						echo "<li><a href=\"#$category->uri\" title=\"$category->title\">$category->display</a></li>";
					}
				?> 
			</ul>
			<div class="row model">
				<?php
					foreach ($model_category->result() as $category) {
						echo "<div id=\"$category->uri\">";
							echo "<div class=\"col-xs-6 col-sm-4 col-md-4 modelItem\">";
								echo "<div class=\"modelItemInner\">";
									echo "<h3>Title</h3>";
									echo "<p><a href=\"/watch\" title=\"Watch\">Content</a></p>";
									echo "<p>$category->title</p>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
					}
				?>
			</div>
		</div>
	</div>
</div>