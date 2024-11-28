<!DOCTYPE html>
<html lang="en">

<?php include("index_head.php"); ?>

<style>
    /* .nav-item {
        border-radius: 0.25rem;
        border: solid 1px #DDDDDD;
    } */

    .nav-item:hover {
        border-radius: 0.25rem;
        background-color: #444444;
    }
</style>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
    .google-font {
        font-family: 'Poppins', sans-serif;
    }
</style>

<body class="google-font">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow mb-3">
        <div class="container-fluid">
            <!-- Company Logo -->
            <a class="navbar-brand" href="#">
                <img class="border border-danger-subtle" src="images/alucard_logo.png" alt="">
            </a>
            <!-- Navigation Bar Toggler Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navigation Bar Dropdown -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-1">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Management
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Users</a></li>
                            <li><a class="dropdown-item" href="#">Roles</a></li>
                            <li><a class="dropdown-item" href="#">Permissions</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Departments</a></li>
                            <li><a class="dropdown-item" href="#">Groups</a></li>
                            <li><a class="dropdown-item" href="#">Teams</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Leave And Attendance
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Leave List</a></li>
                            <li><a class="dropdown-item" href="#">Leave Requests</a></li>
                            <li><a class="dropdown-item" href="#">Leave Approvals</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Attendance Search</a></li>
                            <li><a class="dropdown-item" href="#">Attendance Sheets</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Sample Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Sample Disabled</a>
                    </li>
                </ul>
                <form action="" class="d-flex justify-content-end gap-1">
                    <div class="btn-group">
                        <button type="button" class="btn rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bell"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0 mt-2" style="width: 300px;">
                            <a href="#" class="list-group-item list-group-item-dark list-group-item-action active" aria-current="true">
                                The current link item
                            </a>
                            <a href="#" class="list-group-item list-group-item-dark list-group-item-action">A second link item</a>
                            <a href="#" class="list-group-item list-group-item-dark list-group-item-action">A third link item</a>
                            <a href="#" class="list-group-item list-group-item-dark list-group-item-action">A fourth link item</a>
                            <a href="#" class="list-group-item list-group-item-dark list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </form>

            </div>
        </div>
    </nav>

    <div class="container-fluid pb-3 flex-grow-1 d-flex flex-column flex-sm-row overflow-auto">
        <div class="row flex-grow-sm-1 flex-grow-0">
            <aside class="col-sm-3 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top pb-sm-0 pb-3" style="z-index: 0;">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-dark list-group-item-dark list-group-item-action active" aria-current="true">
                        Users
                    </a>

                    <a href="#" class="list-group-item list-group-item-dark list-group-item-action">Department</a>

                    <div>
                        <a class="list-group-item list-group-item-dark list-group-item-action" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Roles and Permissions</a>
                        <div class="collapse" id="collapseExample">
                            <div class="list-group">
                                <a class="list-group-item list-group-item-dark list-group-item-action ps-5" href="#">Roles</a>
                                <a class="list-group-item list-group-item-dark list-group-item-action ps-5" href="#">Permissions</a>
                                <a class="list-group-item list-group-item-dark list-group-item-action ps-5" href="#">Groups</a>
                                <a class="list-group-item list-group-item-dark list-group-item-action ps-5" href="#">Teams</a>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="list-group-item list-group-item-dark list-group-item-action">General Settings</a>
                    <a href="#" class="list-group-item list-group-item-dark list-group-item-action">Leave Management</a>
                    <a href="#" class="list-group-item list-group-item-dark list-group-item-action">Attendances</a>
                    <a href="#" class="list-group-item list-group-item-dark list-group-item-action disabled" tabindex="-1" aria-disabled="true">Payroll</a>
                </div>
            </aside>
            <main class="col overflow-auto h-100">
                <div class="bg-light border rounded-3 p-3">
                    <h2>Main</h2>
                    <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
                    <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
                    <hr />
                    <h4>More content...</h4>
                    <p>Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.</p>
                    <hr />
                    <h4>More content...</h4>
                    <p>Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.</p>
                </div>
            </main>
        </div>
    </div>

</body>

</html>