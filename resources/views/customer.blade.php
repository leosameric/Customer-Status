<!DOCTYPE html>
<html>
    <head>
        <title>
            Customers
        </title>
        <style>
            .green {
                background-color: #32e213;
            }

            .orange {
                background-color: orange;
            }

            .red {
                background-color: red;
            }

            table, th, td{
                padding:5px;
                border: 1px solid black;
                border-collapse: collapse
            }
        </style>
    </head>
    <body>
        <h1>Customer Report</h1>
        <div class='report'>
            <table id='report-table'>
                <tbody>
                    <tr>
                        <th>Customer Name</th>
                        <th>Total Order</th>
                    </tr>
                    <!-- Loop Customers -->
                    @foreach ($customers as $name => $customer)
                        <tr class='{{$customer["color"]}}'>
                            <td >{{$name}}</td>
                            <td>{{$customer['totalOrder']}}</td>
                        </tr>
                    @endforeach
                    <!-- Loop Customers End -->
                </tbody>
            </table>
        </div>
    </body>
</html>