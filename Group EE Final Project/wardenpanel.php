<?php
include "loggerHeader.php";
require "connection.php";
$landlordId = isset($_SESSION["w"]["warden_id"]) ? $_SESSION["w"]["warden_id"] : null;

if ($landlordId) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Warden</title>

        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="icon" href="resources/logo/thisara.png" />
    </head>

    <body>

        <div class="container-fluid">
            <div class="row">

                <div class="col-12 mt-lg-5 pt-lg-5">
                    <div class="row mt-lg-2">
                        <!-- hostels -->

                        

                        <div class="col-12 mb-3 mt-lg-4">
                            <div class="row border border-primary">

                                <div class="col-12">
                                    <div class="row justify-content-center gap-2 ">

                                        <?php
                                        $hostel_rs = Database::search("SELECT * FROM uploadhostels WHERE wardenApprovel_bookingApprovel_id='1' OR wardenApprovel_bookingApprovel_id IS NULL ORDER BY dateTimeAdded DESC");
                                        $hostel_num = $hostel_rs->num_rows;

                                        if ($hostel_num == 0) {
                                        ?>

                                            <!-- empty view -->
                                            <div class="col-12 col-lg-9 mt-5 mb-5">
                                                <div class="row">
                                                    <div class="col-12 text-center mb-2">
                                                        <label class="form-label fs-3 fw-bold">
                                                            You have no Posts.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- empty view -->

                                            <?php
                                        } else {
                                            for ($z = 0; $z < $hostel_num; $z++) {
                                                $hostel_data = $hostel_rs->fetch_assoc();
                                                $hostelId = $hostel_data["uploadHostels_id"];
                                            ?>

                                                <div class="card col-6 col-lg-2 mt-2 mb-2 animation3" style="width: 18rem;">
                                                    <img src="<?php echo ($hostel_data["imgPath"]) ?>" class="card-img-top img-thumbnail mt-2" style="height: 180px;" onclick="v(<?php echo ($hostelId); ?>);" />
                                                    <div class="card-body ms-0 m-0 text-center">
                                                        <h5 class="card-title fs-6 fw-bold"><?php echo ($hostel_data["description"]) ?><br /> <span class="badge bg-info">New</span></h5>
                                                        <span>Location : <?php echo ($hostel_data["placeName"]) ?></span><br />
                                                        <span class="card-text text-primary">Rs.<?php echo ($hostel_data["price"]) ?>.00</span> <br />

                                                        <?php
                                                       

                                                        if ($hostel_data["wardenApprovel_bookingApprovel_id"] != '1') {
                                                        ?>
                                                            <a href='#' onclick="wardenApproved(<?php echo ($hostelId); ?>);" class="col-12 btn text-white" style="background-color: #009900;background-image: linear-gradient(100deg,#009900 0%,#00CC00);" id="approve">Approve</a>
                                                            <button class="col-12 btn text-white mt-2" style="background-color: #FF0000;background-image: linear-gradient(100deg,#FF0000 0%,#FF0033);" onclick="rejectsPost(<?php echo ($hostelId); ?>);">Reject</button>

                                                        <?php
                                                        } else {
                                                        ?>
                                                            <a href='#' class="col-12 btn text-white disabled" style="background-color: #009900;background-image: linear-gradient(100deg,#009900 0%,#00CC00);" id="approve">Approved</a>

                                                        <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>

                                        <?php
                                            }
                                        }
                                        ?>


                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- hostels -->
                    </div>
                </div>

                <!-- Model -->
                <div class="modal fade" id="viewMap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div id="map" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vertically centered modal -->


                <?php include "footer.php"; ?>
            </div>
        </div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2fEM-wMeEvc-LIAEYLIhqo8IPqZOS8k&callback=initMap" async defer></script>
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
        <script>
            function v(id) {
                var request = new XMLHttpRequest();

                request.onreadystatechange = function() {
                    if (request.readyState == 4 && request.status == 200) {
                        var response = JSON.parse(request.responseText);

                        if (response && response.lat1 && response.lng1) {
                            var lat1 = response.lat1;
                            var lng1 = response.lng1;

                            var viewModel = document.getElementById("viewMap");
                            var landModel9 = new bootstrap.Modal(viewModel);
                            landModel9.show();
                            initMap(lat1, lng1);
                        }
                    }
                }

                request.open("GET", "wardenLocationProcess.php?id=" + id, true);
                request.send();
            }

            function initMap(lat, lng) {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: parseFloat(lat),
                        lng: parseFloat(lng)
                    },
                    zoom: 10
                });

                var marker = new google.maps.Marker({
                    position: {
                        lat: parseFloat(lat),
                        lng: parseFloat(lng)
                    },
                    map: map,
                    title: 'Location'
                });
            }
        </script>
    </body>

    </html>
<?php
} else {
    header("Location:index.php");
}
?>