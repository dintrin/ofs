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
    <div class="ofs_dashboard managePage manageCPage">
      <div class="top_bar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2 paddingLeftZero leftPart"> <a href="javascript:void(0)" class="menu_icon" id="menu-toggle"><i class="fa fa-bars"></i><i class="fa fa-angle-right customRight" id="toggleArrowRight"></i></a>
              <div class="ofs_heading" > <a href="javascript:void(0)"><span>OFS</span></a> </div>
            </div>
            <!-- col-2-->
            <div class="col-md-10 text-right paddingRightZero">
              <div class="right_links"> 
              <div class="dropdownManage"> <a href="javascript:void(0)" class="btn  "> DASHBOARD</a></div>
              
                <div class="dropdownManage"> <a href="javascript:void(0)" class="btn dropdown-toggle activeTopBar" data-toggle="dropdown" > <span>MANAGE</span><span class="triangle-down"></span></a>
                  <ul class="dropdown-menu manageDropdownMenu">
                    <li><a href="./manageDocuments">Documents</a></li>
                    <li><a href="./manageDC">Delivery Challan</a></li>
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
        <h1 class="title title_icon_manageC">MANAGE COLLECTED C FORMS</h1>
      </div>
      <!-- page title-->
      <div class="dateRanger">
        <h2 class="dateRangerTitle">Please select a Date Range</h2>
        <div class="dateGroup">
          <div class="oneGroup"> <span>From:</span>
            <div class="input-group">
              <input type="text" name="fromdate" id="fromdate">
              <label class="calendar_icon" for="fromdate"><img src="images/calendar_icon.png" alt="calendar"></label>
            </div>
          </div>
          <div class="oneGroup"> <span>To:</span>
            <div class="input-group">
              <input type="text" name="todate" id="todate">
              <label class="calendar_icon" for="todate"><img src="images/calendar_icon.png" alt="calendar"></label>
            </div>
          </div>
        </div>
        <!--dateGroup--> 
        
      </div>
      <!-- date Ranger-->
      <div class="searchFilter">
        <h2 class="description"> Please search by entering any of customer name, number or order number </h2>
        <div class="fields">
          <div class="textCombo">
            <label for="cname">Customer Name:</label>
            <input type="text" name="cname" id="cname">
          </div>
          <div class="textCombo">
            <label for="number">Number:</label>
            <input type="text" name="number" id="number">
          </div>
          <div class="textCombo">
            <label for="onumber">Order Number:</label>
            <input type="text" name="onumber" id="onumber">
          </div>
          <div class="blueButton">
            <button type="button">Search</button>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table customSelect">
          <thead>
            <tr>
              <th style="width:35%;">Sales Order Number</th>
              <th>Delivery Challan Created</th>
              <th>Upload/Download C Form</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>SO/1617/123</td>
              <td>  <a href = "javascript:void(0)"  class="blueLinks">#5</a>    
              <label>
    			<select id="gender">
        <option selected> Document Type </option>
       
  				<option>Option 1</option>
  				<option>Option 2</option>
  				<option>Option 3</option>
		

    			</select>
			  </label> <a href = "javascript:void(0)"><img src="images/ic-eye.png" alt="eye"></a>
			  </td>
              
              <td>
              <a href = "javascript:void(0)"  class="greyLinks">
              {{--<img src="images/ic-upload.png" alt="Upload document">Upload</a>--}}
              
              <a href = "javascript:void(0)"  class="greyLinks">
              <img src="images/ic-download_doc.png" alt="download document">Download</a></td>
            </tr>
            <tr>
              <td>SO/1617/123</td>
              <td>  <a href = "javascript:void(0)"  class="blueLinks">#5</a>    
              <label>
    			<select>
        <option selected> Document Type </option>
       
  				<option>Option 1</option>
  				<option>Option 2</option>
  				<option>Option 3</option>
		

    			</select>
			  </label><a href = "javascript:void(0)"> <img src="images/ic-eye.png" alt="eye"></a>
			  </td>
              
              <td>
              <a href = "javascript:void(0)"  class="greyLinks">
              {{--<img src="images/ic-upload.png" alt="Upload document">Upload</a>--}}
              
              <a href = "javascript:void(0)"  class="greyLinks">
              <img src="images/ic-download_doc.png" alt="download document">Download</a></td>
            </tr>
            <tr>
              <td>SO/1617/123</td>
              <td>  <a href = "javascript:void(0)"  class="blueLinks">#5</a>    
              <label>
    			<select>
        <option selected> Document Type </option>
       
  				<option>Option 1</option>
  				<option>Option 2</option>
  				<option>Option 3</option>
		

    			</select>
			  </label> <a href = "javascript:void(0)"><img src="images/ic-eye.png" alt="eye"></a>
			  </td>
              
              <td>
              <a href = "javascript:void(0)"  class="greyLinks">
              {{--<img src="images/ic-upload.png" alt="Upload document">Upload</a>--}}
              
              <a href = "javascript:void(0)"  class="greyLinks">
              <img src="images/ic-download_doc.png" alt="download document">Download</a></td>
            </tr>
            <tr>
              <td>SO/1617/123</td>
              <td>  <a href = "javascript:void(0)"  class="blueLinks">#5</a>    
              <label>
    			<select>
        <option selected> Document Type </option>
       
  				<option>Option 1</option>
  				<option>Option 2</option>
  				<option>Option 3</option>
		

    			</select>
			  </label> <a href = "javascript:void(0)"><img src="images/ic-eye.png" alt="eye"></a>
			  </td>
              
              <td>
              <a href = "javascript:void(0)"  class="greyLinks">
              {{--<img src="images/ic-upload.png" alt="Upload document">Upload</a>--}}
              
              <a href = "javascript:void(0)"  class="greyLinks">
              <img src="images/ic-download_doc.png" alt="download document">Download</a></td>
            </tr>
            <tr>
              <td>SO/1617/123</td>
              <td>  <a href = "javascript:void(0)"  class="blueLinks">#5</a>    
              <label>
    			<select>
        <option selected> Document Type </option>
       
  				<option>Option 1</option>
  				<option>Option 2</option>
  				<option>Option 3</option>
		

    			</select>
			  </label> <a href = "javascript:void(0)"><img src="images/ic-eye.png" alt="eye"></a>
			  </td>
              
              <td>
              <a href = "javascript:void(0)"  class="greyLinks">
              {{--<img src="images/ic-upload.png" alt="Upload document">Upload</a>--}}
              
              <a href = "javascript:void(0)"  class="greyLinks">
              <img src="images/ic-download_doc.png" alt="download document">Download</a></td>
            </tr>
            
            
            
            
          </tbody>
        </table>
        <a class="excelExport" href="javascript:void(0)">Export to Excel</a>
      </div>
      <!-- table-responsive--> 
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