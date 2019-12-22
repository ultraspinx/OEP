<div class="title-content">
	<span class="title">Test marks' List <?=$scores[0]->test_code?></span>
	<a class="title" href="index.php?action=export_score&test_code=294005">Export File Excel</a>
</div>
<div class="block-content overflow scrollbar">
	<div class="content">
		<div class="preload hidden" id="preload">
			<img src="res/img/loading.gif" alt="">
		</div>
		<table class="striped centered responsive-table" id="scores">
			<thead>
				<tr>
					<th class="">Number</th>
					<th class="">Name</th>
					<th class="">Account</th>
					<th class="">Class</th>
					<th class="">Mark</th>
				</tr>
			</thead>
			<tbody>
				<?php
				for($i = 0; $i < count($scores); $i++) {
					?>
					<tr>
						<td><?=($i+1)?></td>
						<td><?=$scores[$i]->name?></td>
						<td><?=$scores[$i]->username?></td>
						<td><?=$scores[$i]->class_name?></td>
						<td><?=$scores[$i]->score_number?></td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>
</div>
<script src="res/libs/DataTables/js/jquery.dataTables.js"></script>
<script>
	$('#scores').DataTable( {
		"language": {
			"lengthMenu": "Show _MENU_",
			"zeroRecords": "Can't find",
			"info": "Show page _PAGE_/_PAGES_",
			"infoEmpty": "No data",
			"emptyTable": "No data",
			"infoFiltered": "(Filter _MAX_ )",
			"sSearch": "Search",
			"paginate": {
				"first":      "First",
				"last":       "Last",
				"next":       "Next",
				"previous":   "Prev"
			},
		}
    } );
</script>
