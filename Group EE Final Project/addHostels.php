<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Hostel</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <link rel="icon" href="resources/logo/thisara.png" />

</head>

<body>

    <div class="container-fluid">
        <div class="row gy-3">
            <?php include "loggerHeader.php";

            require "connection.php";

            if (isset($_SESSION["u"])) {

            ?>

                <hr style="border-width: 3px;" />

                <div class="col-12 mt-lg-5">
                    <div class="row mt-lg-5">

                        <div class="col-12 text-center">
                            <h2 class="h2 fw-bold text-primary">Add New Hostel</h2>
                        </div>

                        <div class="col-12">
                            <hr class="border-success mx-5" style="border-width: 2px;" />
                        </div>

                        <div class="col-12">
                            <div class="row">

                                <div class="col-12">
                                    <hr class="border-success" style="border-width: 2px;" />
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label fw-bold" style="font-size: 20px;">
                                                        Add a price
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-group mb-2 mt-2">
                                                        <span class="input-group-text">Rs.</span>
                                                        <input type="text" class="form-control" id="price" />
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label fw-bold" style="font-size: 20px;">
                                                        Add a Location
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary" onclick="locationModel();">Add</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <hr class="border-success" style="border-width: 2px;" />
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label fw-bold" style="font-size: 20px;">
                                                        Description
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <textarea cols="30" rows="10" class="form-control" id="desc"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label fw-bold" style="font-size: 20px;">Add Hostel Image</label>
                                                </div>
                                                <div class="col-12 ps-lg-4">
                                                    <div class="row align-items-end">
                                                        <div class="col-4 border border-primary rounded">
                                                            <img src="resources/Photo_Add-RoundedBlack-512.webp" class="img-fluid" style="height: 250px;" id="i0" />
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="file" class="d-none" id="imageuploader" />
                                                            <label for="imageuploader" class="col-12 btn btn-primary " onclick="changeImage();">Upload Images</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                                <div class="col-12">
                                    <hr class="border-success" style="border-width: 2px;" />
                                </div>

                                <div class="offset-lg-4 col-12 col-lg-4 d-grid mt-3 mb-3">
                                    <button class="btn btn-success" onclick="addHostel();">Add Hostel</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            <?php

            } else {
                header("Location:home.php");
            }

            ?>

            <!-- Location -->
            <!-- Vertically centered modal -->
            <!-- Modal -->
            <div class="modal fade" id="locM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Location</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="overflow-y: auto;">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label">Place Name</label>
                                        <input type="text" class="form-control" id="p" />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Latitude</label>
                                        <input type="text" class="form-control" id="la" />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Longitude</label>
                                        <input type="text" class="form-control" id="lo" />
                                    </div>
                                    <div class="col-12 d-none mt-lg-3" id="msgdiv">

                                        <div class="alert alert-danger" role="alert" id="alertdive">
                                            <i class="bi bi-x-octagon-fill fs-5" id="msg">

                                            </i>

                                        </div>

                                    </div>
                                    <div class="col-12 col-lg-12 d-grid p-4">
                                        <button type="button" class="btn btn-primary" onclick="addLocation();">Add Location</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Location -->

            <?php include "footer.php" ?>
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>