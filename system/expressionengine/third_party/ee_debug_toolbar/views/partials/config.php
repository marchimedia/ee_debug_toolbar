	<div id="EEDebug_registry" class="EEDebug_panel">
		<h4><?php echo lang('configuration'); ?></h4>
		<pre><?php
			foreach ($config_data AS $key => $value) {
			
				if (!is_array($value)) {
					echo $key . ' =&gt; ' . $value . ' <br />';

				} else {
					echo '<pre>' . $key . '=&gt;';
					foreach ($value AS $_k => $_v) {
						echo $_k . ' =&gt; ' . print_r($_v, TRUE) . ' <br />';
					}
					echo '</pre>';
				}
			}
			?>
		</pre>
	</div>