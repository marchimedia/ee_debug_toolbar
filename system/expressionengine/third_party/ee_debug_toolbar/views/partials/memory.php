<?php if ($this->input->get("D", FALSE) != 'cp'): ?>
	<div style="" id="EEDebug_memory" class="EEDebug_panel show_graph">
	<?php else: ?>
	<div style="" id="EEDebug_memory_cp" class="EEDebug_panel show_graph">
	<?php endif; ?>
<?php if ($template_debugging_enabled): ?>
	<div style="float:left">
		<h4><?php echo lang('template_debugging');?></h4>
	</div>
	<div style="float:right">
		<a href="javascript:;" id="EEDebug_graph_display" class="EEDebug_graph_actions EEDebug_graph_action_active">Graph</a>
		| <a href="javascript:;" id="EEDebug_graph_list" class="EEDebug_graph_actions">List</a>
	</div>
	<br clear="all"/>
	<div id="EEDebug_graph"></div>
	<div id="EEDebug_template_list" style="">
		<?php
		$total = 0;
		foreach ($template_debugging AS $log) {
			echo "\n<div id='EEDebug_hash_$total'>";
			echo '(' . $log['time'] . '/' . $log['memory'] . 'MB) - ' . $log['desc'] . '<br />';
			echo "</div>";
			$total++;
		}
		?>
	</div>
	<?php else: ?>
	<h4><?php echo lang('templates_not_enabled');?></h4>
	<?php endif; ?>
</div>