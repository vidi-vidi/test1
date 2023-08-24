<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10 Implementing Yajra Datatables</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Laravel 10 Implementing Yajra Datatables </h2>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>Name</th>

                    <th>Email</th>

                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(function() {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('roles.index') }}",
                columns: [{
                    data: 'name',
                    name: 'name'
                }, {
                    data: 'email',
                    name: 'email'
                }, ]
            });

        });
        DBGRID1.deleterow()
    </script>
</body>

</html>
