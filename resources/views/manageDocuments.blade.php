<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OFS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link href="css/simple-sidebar.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
</head>

<body>




<div class="modal fade uploadDoc generalModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        
          
          <div class="closeCont">
          <div class="closeStyle"></div>
          <button type="button" class="close" data-dismiss="modal"><img src="images/ic-popup_close.png" alt="close"></button> </div>
          
          <h4 class="modal-title">Upload New Document</h4>
        </div>
        <div class="modal-body">
            <div class="newDocPanel">
      <label>
    <select>
        <option selected> Document Type </option>
        <option>Document Type 1</option>
        <option>Document Type 2</option>
        <option>Document Type 3</option>
    </select>
</label>
      <div class="textField">
				<input type="text" placeholder="No file selected" class="inputText" name="file_4" id="file_4" disabled/>
				</div><!-- text field-->
                
				<div class="uploadButton">
				<input type="file" name="file4" id="file4" class="inputfile" onChange="document.getElementById('file_4').value = this.value.split('\\').pop().split('/').pop()" />
				<label for="file4" class="uploadLabel" id="browse4">Browse</label>
				<button  class="uploadLabelBlue" id="upload4" disabled>Upload</button>
                <span class="smallCTA" id="smallCTA8" title="File Uploaded Successfully"><img src="images/upload_statement.png" alt="upload"></span>
                <span class="smallCTA" id="smallCTA7" title="Remove File"><img src="images/delete_statement.png" alt="delete"></span>

				</div><!-- uploadbutton-->
      </div>
        </div>
        
      </div>
      
    </div>
  </div>
  <div class="modal fade downDoc1 downDoc generalModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        
          
          <div class="closeCont">
          <div class="closeStyle"></div>
          <button type="button" class="close" data-dismiss="modal"><img src="images/ic-popup_close.png" alt="close"></button> </div>
          
          <h4 class="modal-title">Delivery Challan No. (Customer Name)</h4>
        </div>
        <div class="modal-body">
        <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th style="width:45%">Document Name</th>
              <th>Download</th>
              <th>Request Hard Copy</th>
         
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Delivery Access</td>
              <td><img src="images/ic-download_doc.png" alt="download document"></td>
              
              <td><img src="images/ic-requestDoc.png" alt="request document"></td>
             
            </tr>
            <tr>
              <td>Delivery Access</td>
              <td><img src="images/ic-download_doc.png" alt="download document"></td>
              
              <td><img src="images/ic-requestDoc.png" alt="request document"></td>
             
            </tr>
            <tr>
              <td>Delivery Access</td>
              <td><img src="images/ic-download_doc.png" alt="download document"></td>
              
              <td><img src="images/ic-requestDoc.png" alt="request document"></td>
             
            </tr>
            
           
          </tbody>
        </table>
      </div>
        </div>
        
      </div>
      
    </div>
  </div>
   <div class="modal fade reqDoc  downDoc generalModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        
          
          <div class="closeCont">
          <div class="closeStyle"></div>
          <button type="button" class="close" data-dismiss="modal"><img src="images/ic-popup_close.png" alt="close"></button> </div>
          
          <h4 class="modal-title">Requested Documents</h4>
        </div>
        <div class="modal-body">
        <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th style="width:45%;">Document Name</th>
              
              <th>Request Hard Copy</th>
         
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Delivery Access</td>
                 <td><img src="images/ic-requestDoc.png" alt="request document"></td>
             
            </tr>
            <tr>
              <td>Delivery Access</td>
            
              <td><img src="images/ic-requestDoc.png" alt="request document"></td>
             
            </tr>
            <tr>
              <td>Delivery Access</td>
              
              <td><img src="images/ic-requestDoc.png" alt="request document"></td>
             
            </tr>
            
           
          </tbody>
        </table>
      </div>
        </div>
        
      </div>
      
    </div>
  </div>
  
                  
 
<div id="wrapper" class="toggled"> 
  
  <!-- Sidebar -->
  <div id="sidebar-wrapper" >
    <div class="profile"><img src="images/dp.png" alt="display-pic"><span>User Name</span></div>
    <ul class="sidebar-nav">
      <li> <a href="#">OFS</a> </li>
      <li> <a href="./manageDocuments">Document Management System</a> </li>
      <li> <a href="./ts">Tracking System</a> </li>
    </ul>
  </div>
  <!-- sidebar-wrapper --> 
 
  
  <!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="ofs_dashboard managePage manageDocs">
      <div class="top_bar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2 paddingLeftZero leftPart"> <a href="javascript:void(0)" class="menu_icon" id="menu-toggle"><i class="fa fa-bars"></i><i class="fa fa-angle-right customRight" id="toggleArrowRight"></i></a>
              <div class="ofs_heading" > <a href="./"><span>OFS</span></a> </div>
            </div>
            <!-- col-2-->
            <div class="col-md-10 text-right paddingRightZero">
              <div class="right_links"> 
              <div class="dropdownManage"> <a href="./userHome" class="btn  "> DASHBOARD</a></div>
              
                <div class="dropdownManage"> <a href="javascript:void(0)" class="btn dropdown-toggle activeTopBar" data-toggle="dropdown" > <span>MANAGE</span><span class="triangle-down"></span></a>
                  <ul class="dropdown-menu manageDropdownMenu">
                      <li><a href="./manageDocuments">Documents</a></li>
                      <li><a href="./manageDC">DC</a></li>
                  </ul>
                </div>
                <div class="dropdownManage"><a class="btn" href="javascript:void(0)"> <span>REPORTS</span></a></div>
                <div class="dropdown"> <span class="counter">10</span> <a class="notifications dropdown-toggle"  data-toggle="dropdown">Notifications</a>
                  <ul class="dropdown-menu customDropdownMenu">
                    <li><a href="javascript:void(0)">#17 Hard Copy Requests</a></li>
                    <li><a href="javascript:void(0)">Delivery Challan</a></li>
                    <li><a href="javascript:void(0)">Purchase Order</a></li>
                    <li><a href="javascript:void(0)" style="background-color: #efeeee;">View All</a></li>
                  </ul>
                </div>
                <a class="welcome">Welcome</a> </div>
              <!--right links--> 
            </div>
            <!-- col-10--> 
          </div>
        </div>
      </div>
      <!-- TopBar-->
      <div class="pageTitle">
        <h1 class="title title_icon_manage_doc">MANAGE DOCUMENTS</h1>
       <div class="row">
       		<div class="col-md-8 leftPart">
            <label for="salesOrder">Please select an Sales Order</label> <input type="text" id="salesOrder" name="salesOrder">
            <button type="button">Manage</button>
            </div>
            <div class="col-md-4 rightPart text-right">
            <div class="buttonBorder">
            <button type="button">Request Documents </button>
            </div>
            </div>
       </div>
      </div>
      <div class="salesOrder">
      <h3>Documents for Sales Order</h3>
        <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Document Name </th>
              <th>Upload Document</th>
              <th>Download Document</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Customer PO</td>
              <td>
              
              <div class="textField">
				<input type="text" placeholder="No file selected" class="inputText" name="file_1" id="file_1" disabled/>
				</div><!-- text field-->
                
				<div class="uploadButton">
				<input type="file" name="file1" id="file1" class="inputfile" onChange="document.getElementById('file_1').value = this.value.split('\\').pop().split('/').pop()" />
				<label for="file1" class="uploadLabel" id="browse1">Browse</label>
				<button  class="uploadLabelBlue" id="upload1" disabled>Upload</button>
                <span class="smallCTA" id="smallCTA2" title="File Uploaded Successfully"><img src="images/upload_statement.png" alt="upload"></span>
                <span class="smallCTA" id="smallCTA1" title="Remove File"><img src="images/delete_statement.png" alt="delete"></span>

				</div><!-- uploadbutton-->
                
               </td>
              
              <td><img src="images/ic-download_doc.png" alt="download document"></td>
            </tr>
            <tr>
              <td>Vendor Purchase order</td>
              <td>
              
              <div class="textField">
				<input type="text" placeholder="No file selected" class="inputText" name="file_2" id="file_2" disabled/>
				</div><!-- text field-->
                
				<div class="uploadButton">
				<input type="file" name="file2" id="file2" class="inputfile" onChange="document.getElementById('file_2').value = this.value.split('\\').pop().split('/').pop()" />
				<label for="file2" class="uploadLabel" id="browse2">Browse</label>
				<button  class="uploadLabelBlue" id="upload2" disabled>Upload</button>
                <span class="smallCTA" id="smallCTA4" title="File Uploaded Successfully"><img src="images/upload_statement.png" alt="upload"></span>
                <span class="smallCTA" id="smallCTA3" title="Remove File"><img src="images/delete_statement.png" alt="delete"></span>

				</div><!-- uploadbutton-->
                
               </td>
              
              <td><span class="redMessage" >Not Uploaded</span></td>
            </tr>
           
          </tbody>
        </table>
      </div>
      <!-- table-responsive-->
      <div class="addNewDoc">
      <div class="panelTrigger">
      {{--<a id="addNewDoc">Add New Document<img src="images/ic-addNewDoc.png" alt="add new doc"></a>--}}
      </div>
      <div class="newDocPanel">
      <label>
    <select>
        <option selected> Document Type </option>
        <option>Document Type 1</option>
        <option>Document Type 2</option>
        <option>Document Type 3</option>
    </select>
</label>
      <div class="textField">
				<input type="text" placeholder="No file selected" class="inputText" name="file_3" id="file_3" disabled/>
				</div><!-- text field-->
                
				<div class="uploadButton">
				<input type="file" name="file3" id="file3" class="inputfile" onChange="document.getElementById('file_3').value = this.value.split('\\').pop().split('/').pop()" />
				<label for="file3" class="uploadLabel" id="browse3">Browse</label>
				<button  class="uploadLabelBlue" id="upload3" disabled>Upload</button>
                <span class="smallCTA" id="smallCTA6" title="File Uploaded Successfully"><img src="images/upload_statement.png" alt="upload"></span>
                <span class="smallCTA" id="smallCTA5" title="Remove File"><img src="images/delete_statement.png" alt="delete"></span>

				</div><!-- uploadbutton-->
      </div>
      </div> 
      </div>
     <div class="salesOrder dchallan">
      <h3>Documents for Delivery Challan</h3>
        <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Delivery Challan No.</th>
              <th>Upload Delivery Challan</th>
              <th>Download Delivery Challan</th>
              <th>Requested Documents</th>
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>DC/123/12334/12</td>
              <td><a href = "javascript:void(0)" data-toggle="modal" data-target=".uploadDoc" class="greyLinks">Upload New Document</a></td>
              
              <td>Download Documents   <a href = "javascript:void(0)" data-toggle="modal" data-target=".downDoc1" class="blueLinks">#3</a></td>
              <td>Documents   <a href = "javascript:void(0)" data-toggle="modal" data-target=".reqDoc"  class="blueLinks">#4</a></td>
            </tr>
             <tr>
              <td>DC/123/12334/12</td>
              <td><a href = "javascript:void(0)" data-toggle="modal" data-target=".uploadDoc" class="greyLinks">Upload New Document</a></td>
              
              <td>Download Documents   <a href = "javascript:void(0)" data-toggle="modal" data-target=".downDoc" class="blueLinks">#3</a></td>
              <td>Documents   <a href = "javascript:void(0)" data-toggle="modal" data-target=".reqDoc"  class="blueLinks">#4</a></td>
            </tr>
             <tr>
              <td>DC/123/12334/12</td>
              <td><a href = "javascript:void(0)" data-toggle="modal" data-target=".uploadDoc" class="greyLinks">Upload New Document</a></td>
              
              
              <td>Download Documents   <a href = "javascript:void(0)" data-toggle="modal" data-target=".downDoc" class="blueLinks">#3</a></td>
              <td>Documents   <a href = "javascript:void(0)" data-toggle="modal" data-target=".reqDoc"  class="blueLinks">#4</a></td>
            </tr>
             <tr>
              <td>DC/123/12334/12</td>
              <td><a href = "javascript:void(0)" data-toggle="modal" data-target=".uploadDoc" class="greyLinks">Upload New Document</a></td>
              
              <td>Download Documents   <a href = "javascript:void(0)" data-toggle="modal" data-target=".downDoc" class="blueLinks">#3</a></td>
              <td>Documents   <a href = "javascript:void(0)" data-toggle="modal" data-target=".reqDoc"  class="blueLinks">#4</a></td>
            </tr>
             <tr>
              <td>DC/123/12334/12</td>
              <td><a href = "javascript:void(0)" data-toggle="modal" data-target=".uploadDoc" class="greyLinks">Upload New Document</a></td>
              
              <td>Download Documents   <a href = "javascript:void(0)" data-toggle="modal" data-target=".downDoc" class="blueLinks">#3</a></td>
              <td>Documents   <a href = "javascript:void(0)" data-toggle="modal" data-target=".reqDoc"  class="blueLinks">#4</a></td>
            </tr>
            
           
          </tbody>
        </table>
      </div>
      <!-- table-responsive-->
      
      </div>
    </div>
  </div>
  <!-- /#page-content-wrapper --> 
</div>
<!--wrapper-->
<footer class="dashboard_footer">
  <div class="poweredby text-center">Powered by: <a href="http://www.power2sme.com" target="_blank">Power2SME</a></div>
</footer>
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/main.js"></script> 
<script src="js/jquery.datetimepicker.js"></script> 
<script type="text/javascript">

		$(document).ready(function(){
		 	$('#fromdate').datetimepicker({
		  		format:'Y/m/d',
		  		onShow:function( ct ){
		   			this.setOptions({
		   	 			maxDate:$('#todate').val()?$('#todate').val():false
		   			})
		  		},
		  		timepicker:false
		 	});
		 	$('#todate').datetimepicker({
		  		format:'Y/m/d',
		  		onShow:function( ct ){
		   			this.setOptions({
		    			minDate:$('#fromdate').val()?$('#fromdate').val():false
		   			})
		  		},
		  		timepicker:false
		 	});
		});
				

    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
		$("#wrapper").toggleClass("shifter");
		
    });
    
	</script>
</body>
</html>