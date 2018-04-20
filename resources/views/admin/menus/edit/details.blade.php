@extends('layouts.admin')

@section('content')

	   	<div class="row">
	   		<div class="col-sm-8">
		        <div class="list-btr">
		            <h2>Menus</h2>
		            <br>
		            <h2><em>Title Page Name</em></h2>
		        </div>	

		        <br>

		    	<div class="btn-add">
			        <ul>
			            <li>
			            	<div class="btn-group">
							  <button type="button" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Actions <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu">
							    <li><a class="popup-edit" href="#contentholder-add">Add Menu to a Web Page</a></li>
							  </ul>
							</div>
						</li>
			        </ul>
			    </div>

				<div class="list-view">
			        <ul>
			            <li class="active"><a href="#"> Details</a></li>
			            <li><a href="/admin/menus-edit-menu">Menu Items</a></li>
			            <li><a href="/admin/menus-edit-menulook">Menu look</a></li>
			            <li><a href="/admin/menus-edit-itemslook">Items look</a></li>
			        </ul>
			    </div>
				
				<div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" name="name" id="name" class="form-control" value="">
			    </div>

			    <div class="form-group">
			    	<label>Menu Type:</label>				   
					<select class="form-control">
						<option>Default</option>
						<option>CSS</option>
						<option>CSS (HTML only)</option>
					</select>
				</div>		

		    	<hr>
		       
		       	<input type="button" id="" value="Save" class="btn btn-default">
		       	<input type="button" id="" value="Cancel" class="btn btn-default">
		       	<input type="button" id="" value="Next" class="btn btn-primary btn-default">
			   
			   </div>
			</div>

    	
    	<div class="webform-popup">

        	<div class="mfp-hide popup-content-wrapper" id="contentholder-add">
	        	
	        	<div class="list-btr">
		            <h2>Web Form Properties</h2>
		        </div>

	        	<div class="modalwindow">

	        		<form id="" action="">									
						

						<div class="form-group">
						    <label for="default_template">
						    	<input type="checkbox" id="" value="1" name="">
						        Option:
						    </label>
						</div>



						<hr>
				       	<input type="button" id="btnCancel" value="Close" class="btn btn-default close-main">							  

					</form>

				</div>
			</div>

			<div class="mfp-hide popup-content-wrapper" id="contentholder-audit">
		        	
	        	<div class="list-btr">
		            <h2>Audit Log</h2>
		        </div>

		        <div class="modalwindow">

		        	<div id="" class="warningMessage">Archived information older than 90 days is automatically deleted from the system.</div>

	        		<form id="" action="">	

	        			

						<table id="" class="rgMasterTable" cellspacing="0" cellpadding="0" border="0">
						   <tbody>
						      <tr>
						         <th class="rgHeader var">Action</th>
						         <th class="rgHeader">Action By</th>
						         <th class="rgHeader">Action Date</th>
						      </tr>
						      <tr class="rgRow text">
						         <td class="var">View</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 02:54 PM</td>
						      </tr>
						      <tr class="rgAltRow text">
						         <td class="var">View</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 02:50 PM</td>
						      </tr>
						      <tr class="rgRow text">
						         <td class="var">View</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 02:06 PM</td>
						      </tr>
						      <tr class="rgAltRow text">
						         <td class="var">Edit</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 02:06 PM</td>
						      </tr>
						      <tr class="rgRow text">
						         <td class="var">View</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 02:03 PM</td>
						      </tr>
						      <tr class="rgAltRow text">
						         <td class="var">View</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 01:57 PM</td>
						      </tr>
						      <tr class="rgRow text">
						         <td class="var">Edit</td>
						         <td>Kirk Alvar</td>
						         <td>17-Apr-2018 01:57 PM</td>
						      </tr>
						   </tbody>
						</table>



	        			<div class="list-btr-top">
					       	<input type="button" id="btnCancel" value="Close" class="btn btn-default">
					    </div>

					</form>
				</div>
				
			</div>

		</div>
@endsection

