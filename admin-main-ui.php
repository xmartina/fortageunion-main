<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="admin-ui.css">
    <title>Admin Main Ui</title>
</head>
<body>
<div class="admin-nav">
    <div class="container">
        <div class="admin-nav-wrapper overflow-x-scroll">
            <table class="table py-5">
                <tr class="tr ">
                    <td class="td text-center admin-nav-hover"> <span class="px-3 py-2 text-14 f-600 text-muted d-flex align-items-center justify-content-center"><span class="material-symbols-outlined pr-2">account_circle</span> All Users</span> </td>
                    <td class="td admin-nav-hover text-14 f-600 text-muted"><span class="px-3 py-2 bg-success rounded-1 text-light d-flex align-items-center justify-content-center"><span class="material-symbols-outlined pr-2">person_add</span> Create New User</span> </td>
                    <td class="td admin-nav-hover text-14 f-600 text-muted"><span class="px-3 py-2 bg-success rounded-1 text-light d-flex align-items-center justify-content-center"><span class="material-symbols-outlined pr-2">published_with_changes</span> Back date a transaction</span> </td>
                    <td class="td admin-nav-hover text-14 f-600 text-muted"><span class="px-3 py-2 bg-success rounded-1 text-light d-flex align-items-center justify-content-center"><span class="material-symbols-outlined pr-2">more_time</span> Add a transaction</span> </td>
                </tr>
            </table>
        </div>
        <div class="admin-list-users">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <img src="pic.jpg" alt="" class="user-avatar rounded-circle">
                </div>
                <div class="col-lg-4">
                    <div class="f-600 text-17">Bank User Name</div>
                </div>
                <div class="col-lg-4">
                    <div class="text-muted">UserEmail@mail.com</div>
                </div>
                <div class="col-lg-1 ">
                    <div class="action-btn position-relative ">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="action-icon rounded-2 p-3 d-flex align-items-center justify-content-center"><span class="material-symbols-outlined">edit</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
</body>
</html>