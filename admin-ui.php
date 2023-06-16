<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="admin-ui.css">
    <title>Admin Ui</title>

</head>
<body>

<div class="list-and-create-user">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="list-user-cus py-2 px-1 rounded-3">
                    <div class="create-user-btn d-flex justify-content-end align-items-center my-3">
                        <div class="bg-success create-btn-width px-3 py-2 rounded-1 text-light d-flex align-items-center justify-content-between">
                            Create New User <span class="material-symbols-outlined mx-2">person_add</span>
                        </div>
                    </div>
                    <div class="list-users">
                        <div class="my-2 py-2 rounded-1 ">
                            <div class="row align-items-center w-100 items-center">
                                <div class="col-lg-1">
                                    <div class="profile-photo">
                                        <img src="pic.jpg" alt="" class="profile-pic rounded-circle">
                                    </div>
                                </div>
                                <div class="col-lg-10 text-center">
                                    <div class="user-name text-dark text-20 f-500">Billy Packer</div>
                                    <div class="user-email text-16 f-500 text-muted">User.email@mail.com</div>
                                </div>
                                <div class="col-lg-1 ">
                                    <div class="action-btn position-relative ">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="action-icon rounded-2 p-3 d-flex align-items-center justify-content-center"><span class="material-symbols-outlined">edit</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="w-75 mx-auto my-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="back-trans list-user-cus py-2 px-2 rounded-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="my-3 f-700 text-23">Backdate A Transaction</div>
                        <div class="create-trans-btn bg-info rounded-1 px-2 py-1 text-white d-flex align-items-center py-2">Create transaction <span class="material-symbols-outlined mx-2">add_circle</span></div>
                    </div>
                    <div class="my-2 text-muted text-17">Select a user to back-date their transaction</div>
                    <select name="back-date-trans" class="my-3 w-100 py-2 px-2 rounded back-date-trans" id="">
                        <option value="1">Username</option>
                    </select>
                </div>
            </div>
        </div>


    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
</body>
</html>