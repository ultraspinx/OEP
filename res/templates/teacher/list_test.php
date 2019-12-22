<div class="title-content">
	<span class="title">Test List</span>
</div>
<div class="block-content overflow scrollbar">
	<div class="content">
		<div class="preload hidden" id="preload">
			<img src="res/img/loading.gif" alt="">
		</div>
		<table class="striped centered responsive-table" id="tests">
			<thead>
				<tr>
					<th class="">Name</th>
					<th class="">Code</th>
					<th class="">Subject</th>
					<th class="">Grade</th>
					<th class="">Info</th>
					<th class=""><i class="material-icons">settings</i></th>
				</tr>
			</thead>
			<tbody id="list_tests">
				<?php

				for ($i = 0; $i < count($tests); $i++) {
					?>
					<tr>
						<td><?=$tests[$i]->test_name?></td>
						<td><?=$tests[$i]->test_code?></td>
						<td><?=$tests[$i]->subject_detail?></td>
						<td><?=$tests[$i]->grade?></td>
						<td><?=$tests[$i]->total_questions?> Question, Time <?=$tests[$i]->time_to_do?> minute</td>
						<td><a href="index.php?action=test_score&test_code=<?=$tests[$i]->test_code?>" class="btn">See mark</a></td>
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
	$('#tests').DataTable( {
		"language": {
			"lengthMenu": "Show _MENU_",
			"zeroRecords": "Can't find",
			"info": "Show page _PAGE_/_PAGES_",
			"infoEmpty": "No info",
			"emptyTable": "Empty",
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
