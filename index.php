<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <title>Php Logic Test 1</title>
</head>

<body>
    <div class="container mt-3">
        <h1>Form Input</h1>
        <form>
            <div class="mb-3">
                <label for="Name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="Name" name="Name">
            </div>
            <div class="mb-3">
                <label for="Age" class="form-label">Usia</label>
                <input type="text" class="form-control" id="Age" name="Age">
            </div>
            <div class="mb-3">
                <label for="City" class="form-label">Kota</label>
                <input type="text" class="form-control" id="City" name="City">
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="mt-5">
            <table id="ShowData" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Kota</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Edi Suprayitno</td>
                        <td>25</td>
                        <td>Malang</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
<script src="js/Table.js"></script>
<script src="js/Input.js"></script>

</html>