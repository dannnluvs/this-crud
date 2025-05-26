<?php

include('php_codes/datatables.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Expense Tracker</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
    <script src="//cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container bg-success rounded">
        <h1>Welcome to Daily Expense Tracker</h1>
        <!-- Table -->
        <table id="tblExpense" class="table table-hover">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>EXPENSE</th>
                    <th>AMOUNT</th>
                    <th>DATE</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fetchData as $data) : ?>
                    
                    <tr>
                        <td> <?php echo $data['id']; ?> </td>
                        <td> <?php echo $data['expense']; ?> </td>
                        <td> <?php echo $data['amount']; ?> </td>
                        <td> <?php echo $data['date']; ?> </td>
                        <td> <?php echo $data['status']; ?> </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>
</html>

<script>
    $(document).ready(function(){
        $('#tblExpense').DataTable();
    })
</script>