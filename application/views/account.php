<div class="container">
	<div class="page-nav clearfix">
	</div>
	<div class="page-header clearfix">
		<h1 class="text-right">Account</h1>
	</div>
	<div class="page-body clearfix">	
		<div class="accountWrap col-xs-12 col-md-8 clearfix">
			<div class="accountleft col-xs-6">
				<h2>Broadcast</h2>
				<p>Your Account is set to</p>
				<div class="broadcaststatus">
					<?php
						foreach ($broadcast_status->result() as $status) {
							if ($status->broadcast == '0') {
								echo "<span class=\"broadcaststatusoff\"></span>";
							} else {
								echo "<span class=\"broadcaststatuson\"></span>";
							}
						}
					?>
				</div>
			</div>
			<div class="accountleft col-xs-6">
				<h2>Tokens</h2>
			</div>
		</div>
	</div>
</div>