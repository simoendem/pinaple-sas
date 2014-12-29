    <div class="pageheader">
      <h2><i class="fa fa-book"></i>School Expenses</h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>dashboard">Pinaple SAS</a></li>
          <li>School Expenses</li>
          <li class="active">Journal Entry Record</li>
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

      
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title">Journal Entry Record</h3><br/>
        </div>
        <div class="panel-body">
        <form id="formJournal" class="form-horizontal">
        	<div class="row">
    				<div class="col-sm-5">             
    					<div class="form-group">
    						<label class="col-sm-4 control-label">General Journal #</label>
    						<div class="col-sm-8">
    							<input type="text" name="journal_id" class="form-control" placeholder="input journal ID">
    						</div>
    					</div>
    				</div>  
    				<div class="col-sm-6">
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Date</label>
    						<div class="col-sm-8">
    							<input type="text" name="journal_date" class="form-control" readonly placeholder="journal date, format : dd-mm-yyyy">
    						</div>
    					</div>				    				    				
    				</div>      	
        	</div>
          <div class="row">
            <div class="col-sm-5">             
              <div class="form-group">
                <label class="col-sm-4 control-label">Memo #</label>
                <div class="col-sm-8">
                  <textarea name="memo" class="form-control" placeholder="input memo"></textarea>
                </div>
              </div>
            </div>  
            <div class="col-sm-6">
            </div>        

          </div>
        	<hr/>
        	<div class="table-responsive">
	            <table class="table table-journal" id="tableJournalList">
	            <thead>
	              <tr>
	                <th>Acct #</th>
	                <th>Name</th>
	                <th>Debit</th>
	                <th>Credit</th>
	              </tr>
	            </thead>
	            <tbody>
                <!-- 
	              <tr>
      					<td class="acct-id">A0101</td>	              
	              <td class="name">
	                    <label class="editable-label editable-click">Rent</label>
	                </td>
	                <td class="activa-debit" data-value="0"><span class="editable editable-click">0</span></td>
	                <td class="activa-credit" data-value="0"><span class="editable editable-click">0</span></td>
	              </tr>
	              <tr>
        					<td class="acct-id">ACC-102</td>	              
	                <td>
	                    <div><strong>Prepaid Rent</strong></div>
	                </td>
	                <td class="activa-debit" data-value="0"><span class="editable editable-click">0</span></td>
	                <td class="activa-credit" data-value="0"><span class="editable editable-click">0</span></td>
	              </tr>
                -->                
                <tr>
                  <td colspan="4" style="text-align:left">
                    <a href="#" 
                        data-toggle="modal" data-target="#exampleModal" class="add-row"><i class="fa fa-plus"></i> Add Row</a>
                  </td>                
                </tr> 
	            </tbody>
	          </table>
          </div>
          <table class="table table-total">
                <tbody>
                    <tr>
                        <td><strong>Total Debit :</strong></td>
                        <td class="total-debit" data-value="0">0</td>
                    </tr>
                    <tr>
                        <td><strong>Total Credit :</strong></td>
                        <td class="total-credit" data-value="0">0</td>
                    </tr>
                    <tr>
                        <td><strong>Out of Balance :</strong></td>
                        <td class="out-balance" data-value="0">0</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-right btn-invoice">
                <button class="btn btn-primary mr5" id="entry-record" disabled><i class="fa fa-check-circle-o mr5"></i> Record</button>
                <button class="btn btn-white"> Cancel</button>
            </div>
        </form>
        </div><!-- panel-body -->
      </div><!-- panel -->
        
    </div><!-- contentpanel -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Choose Account Code</h4>
      </div>
      <div class="modal-body">
          <div class="table-responsive">
              <table class="table table-journal" id="tableAccountingReference">
              <thead>
                <tr>
                  <th>Acct #</th>
                  <th>Name</th>
                  <th style="text-align:center">Tipe</th>
                  <th>Act</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                </tr>
              </tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>