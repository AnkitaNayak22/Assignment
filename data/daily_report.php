<?php
require_once('../class/Sales.php');
$reports = $sales->daily_sales();
?>
<br />
<div class="table-responsive">
        <table id="myTable-report" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th><center>Type</center></th>
                    <th><center>Laundry Received</center></th>
                    <th><center>Date Paid</center></th>
                    <th><center>Amount</center></th>
										<th><center>Status</center></th>
                </tr>
            </thead>
            <tbody>
            	<?php
            		foreach($reports as $r):

            	?>
	                <tr align="center">
	                    <td align="left"><?= $r['sale_customer_name']; ?></td>
	                    <td><?= $r['sale_type_desc']; ?></td>
	                    <td><?= $r['sale_laundry_received']; ?></td>
	                    <td><?= $r['sale_date_paid']; ?></td>
	                    <td><?= '₱ '.number_format($r['sale_amount'], 2); ?></td>
											<td>
	                        <button type="button" class="btn btn-success btn-sm">
	                           Completed
	                        </button>
	                    </td>
	                </tr>
	            <?php endforeach; ?>
            </tbody>
	            <tr>
	            	<td></td>
	            	<td></td>
	            	<td></td>

	            </tr>
        </table>
</div>


<!-- for the datatable of employee -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable-report').DataTable();
    });
</script>
