<?php
require('includes/essentials.php');
adminLogin();
session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
    <?php require('includes/links.php'); ?>

</head>

<body class="bg-light">
    <?php require('includes/header.php'); ?>

    <div class="col-lg-10 h-100 ms-auto p-4 overflow-hidden">
        <div class="container-fluid h-100">
            <h3 class="mb-4">SETTING</h3>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-3">General Setting</h5>
                        <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal"
                            data-bs-target="#general-s">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                    </div>

                    <h6 class="card-subtitle mb-2 fw-bold">Site title</h6>
                    <p class="card-text" id="site_title"></p>
                    <h6 class="card-subtitle mb-2 fw-bold">About Us</h6>
                    <p class="card-text" id="site_about"></p>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">General Setting</h5>

                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Site Title</label>
                                    <input type="text" name="site_title" class="form-control shadow-none">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea name="site_about" class="form-control shadow-none" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn custom-bg text-white">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>







    <?php require('includes/scripts.php'); ?>
    <script>
        let general_data;
function get_general()
{
    let site_title=document.getElementById('site_title');
    let site_about=document.getElementById('site_about');

    let xhr=new XMLHttpRequest();
    xhr.open("POST","ajax/setting_crud.php",true);
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');

    xhr.onload=function()
    {
        general_data=JSON.parse(this.responseText);

        site_title.innerText=general_data.site_title;
        site_about.innerText=general_data.site_about;

    }

    xhr.send('get_general');

}
window.onload=function(){
    get_general();
}
    </script>

</body>

</html>