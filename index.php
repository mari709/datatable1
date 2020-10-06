<!doctype html>

<?php include("head.php"); ?>

<body>
    <div class="container text-center">
        <h1><span class="badge badge-success">TABLA PRINCIPAL</span></h1>
        <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>User_Id</th>
                    <th>userName</th>
                    <th>FirstName</th>                                
                    <th>LastName</th>  
                    <th>Gender</th>
                    <th>Password</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    
<!--    
    <script type="text/javascript">
            $(document).ready(function() {
                $('#example').dataTable( {
                    "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                    }
                } );
            } );
        </script> -->

    <script>
      $(document).ready(function() {
          $('#tablaUsuarios').DataTable( {
            "ajax":{
                "url": "baseDeDatos/consulta.php",
                "dataSrc":""
            },
            "columns":[
                {"data": "user_id"},
                {"data": "username"},
                {"data": "first_name"},
                {"data": "last_name"},
                {"data": "gender"},
                {"data": "password"},
                {"data": "status"}
            ]  
          });
      });
    </script>

    
    </body>

</html>