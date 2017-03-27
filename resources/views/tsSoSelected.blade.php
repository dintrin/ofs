
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
            <td>{{ $dc['dc_number'] }}</td>
            <td>{{ $dc['created_at'] }}</td>
            <td>{{ $dc['dc_status'] }}</td>
            <td>
                <div class="form-group">

                    <select class="form-control"  id="1">
                        <option value="0">Select updated status</option>
                        @foreach( $dc['possible_statuses'] as $possible_status )
                            <option value="{{ $possible_status['status'] }}">{{ $possible_status['description'] }}</option>
                        @endforeach

                    </select>
                </div>

            </td>
            <td><button type="button" class="btn btn-default btn-sm" id="update_status" value="1">
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

    })


    $('#update_status').click(function () {


//        var a = $('#1').value;
//
//        alert( a );
//
        var element = document.getElementById("updated_status");
        var selectedOp = element.value;

            alert(selectedOp);

    });

</script>
