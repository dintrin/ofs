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
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="css/jquery-ui.min.css" rel="stylesheet">
  <link href="css/jquery-ui.structure.min.css" rel="stylesheet">
  <link href="css/jquery-ui.theme.min.css" rel="stylesheet">




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
    <div class="ofs_dashboard managePage">
      <div class="top_bar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2 paddingLeftZero leftPart"> <a href="javascript:void(0)" class="menu_icon" id="menu-toggle"><i class="fa fa-bars"></i><i class="fa fa-angle-right customRight" id="toggleArrowRight"></i></a>
              <div class="ofs_heading" > <a href="javascript:void(0)"><span>OFS</span></a> </div>
            </div>
            <!-- col-2-->
            <div class="col-md-10 text-right paddingRightZero">
              <div class="right_links"> 
              <div class="dropdownManage"> <a href="./userHome" class="btn  "> DASHBOARD</a></div>
              
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
        <h1 class="title title_icon_manage">MANAGE</h1>
      </div>
      <!-- page title-->

      <!-- date Ranger-->
      <div class="searchFilter">
        {{--<h2 class="description"> Please search by entering any of customer name, number or order number </h2>--}}
        <div class="fields">
          <div class="col-md-12 leftPart" class="ui-widget">
            <label for="so_number">Please select an Sales Order</label> <input type="text" class="form-control ui-autocomplete-input" id="so_number" size="90" placeholder=" Enter SO Number       " name="so_number" style="width:500px;">


          <div class="blueButton">
            <button type="button">Search</button>
          </div>
          </div><br>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Sales Order <span class="sorter"><img src="images/sorter.png" alt="sorter"></span></th>
              <th>Customer Name <span class="sorter"><img src="images/sorter.png" alt="sorter"></span></th>
              <th>Delivery Challans <span class="sorter"><img src="images/sorter.png" alt="sorter"></span></th>
              <th>Status <span class="sorter"><img src="images/sorter.png" alt="sorter"></span></th>
              <th>Documents Available <span class="sorter"><img src="images/sorter.png" alt="sorter"></span></th>
              <th >Documents Pending <span class="sorter"><img src="images/sorter.png" alt="sorter"></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>SO/1617/123</td>
              <td>John Doe Inc.</td>
              <td><span>5 Created</span><br>
               <span>2 Delivered</span><br>
               <span> 1 Shipped</span><br/>
               <span> Create new DC</span><br/>
              </td>
              <td><span>30% Shipped</span><br>
              <span>20% Delivered</span> </td>
              <td>38</td>
              <td>9</td>
            </tr>
            <tr>
              <td>SO/1617/134</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
            </tr>
            <tr>
              <td>SO/1617/134</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
            </tr>
            <tr>
              <td>SO/1617/134</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
            </tr>
            <tr>
              <td>SO/1617/134</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
              <td>Create New DC</td>
            </tr>
          </tbody>
        </table>
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
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
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

<script type="application/javascript">

    $(document).ready(function () {

        availableTags = [
          @foreach( $so_numbers as $so_number)

              "{{ $so_number }}",
          @endforeach
        ];

        $(function () {
            $("#so_number").autocomplete({
                source: function (request, response) {
                    var matcher = new RegExp($.trim(request.term).replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&"), "i");
                    response($.grep(availableTags, function (value) {
                        return matcher.test(value.toUpperCase());
                    }));
                },
                minLength: 0,
                scroll: true
            }).focus(function () {
                $(this).autocomplete("search", $('#so_number').val());
            })
        });
    });


</script>

</body>
</html>