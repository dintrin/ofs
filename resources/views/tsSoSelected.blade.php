
    <style>
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    </style>


<table id="countTable" class="table table-striped bordered">
    <thead>
    <tr><th>DC Number</th><th> Created on </th> <th> Current status </th><th>  Update </th><th> save </th></tr>
    </thead>
    <tbody>


    @foreach( $result as $dc )

        <?php
//        dd($dc);
        ?>

        <tr>
            <td class="dc_number">{{ $dc['dc_number'] }}</td>
            <td>{{ $dc['created_at'] }}</td>
            <td>{{ $dc['dc_status'] }}</td>
            <td class="selectRow">
                <div class="form-group selectDiv">
                    @if(count($dc['possible_statuses'])==0)
                        Delivered
                        @else

                    <select class="form-control status"  id="1">
                        <option value="0">Select updated status</option>
                        @foreach( $dc['possible_statuses'] as $possible_status )

                                <option value="{{ $possible_status['status'] }}">{{ $possible_status['description'] }}</option>

                        @endforeach

                    </select>
                    @endif
                </div>

            </td>
            <td><button type="button" class="btn btn-default btn-sm update_status" value="1">
                    <span class="glyphicon glyphicon-floppy-save" value="test"></span> Update status</button></td>
        </tr>

    @endforeach
    </tbody>
    </table>

<script type="text/javascript"  src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(function(){
        $("#countTable").dataTable({
            "bPaginate": true,
            "bInfo": true,
            "bFilter": false,
            "bLengthChange": false
        })

    });


    $('.update_status').click(function () {

        var $row = $(this).closest("tr");
        var dc_number= $row.find(".dc_number").text();
        var updated_status=$row.find(".selectRow").find(".selectDiv").find(".status").val();
        console.log("dc_number:"+dc_number+".....updatedStatus:"+updated_status);
        data={"dc_number":dc_number,"updated_status":updated_status};
        $.post('ts/update',data,function (response) {
            console.log(response);
            if(response==1){
                alert("Dc status updated successfully");
                $.post("ts/soSelected", {so_number: so_number}, function (result) {
                    $("#ts_pane").html(result);
                });
            }
            else{
                alert("updated status must be higher");
            }
        })
    });


</script>
