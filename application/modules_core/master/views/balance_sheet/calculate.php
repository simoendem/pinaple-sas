    <div class="pageheader">
      <h2><i class="fa fa-money"></i>Neraca Saldo</h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>dashboard">Pinaple SAS</a></li>
          <li>Master</li>
          <li class="active">Balance Sheet</li>
        </ol>
      </div>
    </div>
        
    <div class="contentpanel">

      <?php if ($message != null ) : ?>
      <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Well done!</strong>   <?php echo $message; ?>
       </div>
      <?php endif ; ?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<p>Neraca saldo lorem ipsum dolor sit amet</p>
			</div>
	        <div class="panel-body">
	        	<div class="row">
	        	<div class="neraca col-md-12">
	        		<div class="col-md-6">
	        			<table class="table table-bordered table-debet">
	        				<thead>
								<tr role="row" class="heading">
									<th width="10%">
										Kode
									</th>
									<th width="35%">
										Keterangan
									</th>
									<th width="55%">
										 Nilai Debet
									</th>
								</tr>
	        				</thead>
	        				<tbody>
	        					<tr class="group-heading">
		        					<td colspan="3">Group I</td>
	        					</tr>
	        					<tr class="group-content">
	        						<td>12345</td>
	        						<td>ABCDE</td>
	        						<td><input type="text" class="value-activa price" data-value="0"/></td>
	        					</tr>
	        					<tr class="group-content">
	        						<td>67890</td>
	        						<td>QWEERTY</td>
	        						<td><input type="text" class="value-activa price" data-value="0"/></td>
	        					</tr>
	        				</tbody>
	        				<tfoot>
	        					<tr class="grand-total">
									<td colspan="2" class="total-label">Total</td>
		        					<td><input type="text" class="price" readonly/></td>
	        					</tr>
	        				</tfoot>
	        			</table>
	        		</div>
	        		<div class="col-md-6">
	        			<table class="table table-bordered table-credit">
	        				<thead>
								<tr role="row" class="heading">
									<th width="10%">
										Kode
									</th>
									<th width="35%">
										Keterangan
									</th>
									<th width="55%">
										 Nilai Kredit
									</th>
								</tr>
	        				</thead>
	        				<tbody>
	        					<tr class="group-heading">
		        					<td colspan="3">Group I</td>
	        					</tr>
	        					<tr class="group-content">
	        						<td>09876</td>
	        						<td>EDCBA</td>
	        						<td><input type="text" class="value-activa price" data-value="0"/></td>
	        					</tr>
	        					<tr class="group-content">
	        						<td>54321</td>
	        						<td>YTREWQ</td>
	        						<td><input type="text" class="value-activa price" data-value="0"/></td>
	        					</tr>
	        				</tbody>
	        				<tfoot>
	        					<tr class="grand-total">
									<td colspan="2" class="total-label">Total</td>
		        					<td><input type="text" class="price" readonly/></td>
	        					</tr>
	        				</tfoot>
	        			</table>	
	        		</div>
	        	</div>
	        	</div>
	        </div>
	        <div class="panel-footer">
	        	<button class="btn btn-success btn-lg btn-block">Save</button>
	        </div>
		</div>
    </div>