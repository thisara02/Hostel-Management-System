<?php
include "loggerHeader.php";
require "connection.php";
$landlordId = isset($_SESSION["u"]["landloaders_id"]) ? $_SESSION["u"]["landloaders_id"] : null;

if ($landlordId) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landlord</title>

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

                        <div class="col-12 mt-lg-5 p-4 bg-black">
                            <div class="row justify-content-center">
                                <div class="col-4 d-grid">
                                    <button class="text-white header-button1 ps-5 pe-5 pt-2 pb-2" href="#" onclick="addHostels();">Add New Hostel &nbsp;<i class="bi bi-plus-circle text-white"></i></button>
                                </div>
                                <div class="col-4 d-grid">
                                    <button class="text-white header-button1 ps-5 pe-5 pt-2 pb-2" href="#" onclick="viewBookings();">View Bookings &nbsp;<i class="bi bi-eye text-white"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-3 mt-lg-4">
                            <div class="row border border-primary">

                                <div class="col-12">
                                    <div class="row justify-content-center gap-2 ">

                                        <?php
                                        $hostel_rs = Database::search("SELECT * FROM `uploadhostels` WHERE `landloaders_landloaders_id`='" . $landlordId . "' ORDER BY `dateTimeAdded` DESC");
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
                                                        <h5 class="card-title fs-6 fw-bold"><?php echo ($hostel_data["description"]) ?><br /> <span class="badge bg-danger">New</span></h5>
                                                        <span>Location : <?php echo ($hostel_data["placeName"]) ?></span><br />
                                                        <span class="card-text text-primary">Rs.<?php echo ($hostel_data["price"]) ?>.00</span> <br />


                                                        <span class="card-text text-success fw-bold">Available</span>

                                                        <a href='<?php echo ("updateHostels.php?id=" . $hostel_data["uploadHostels_id"]); ?>' class="col-12 btn text-black"
                                                         style="background-color:#efea10; background-image: linear-gradient(100deg,#efea10 0%,#00CC00);">Update</a>
                                                        <button class="col-12 btn text-white mt-2" 
                                                        style="background-color: #ca0404; background-image: linear-gradient(100deg,#281db1 0%,#FF0033);" 
                                                        onclick="deletePost(<?php echo ($hostelId); ?>);">Delete</button>
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
                <!-- Modal -->
                <div class="modal fade" id="viewBooking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Bookings</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="overflow-y: auto;">
                                <div class="col-12">
                                    <div class="row p-3">
                                        <?php
                                        $req_rs = Database::search("SELECT * FROM `stubooking` INNER JOIN `uploadhostels` ON
                                    `stubooking`.`uploadHostels_uploadHostels_id`=`uploadhostels`.`uploadHostels_id` INNER JOIN 
                                    `student` ON `stubooking`.`student_student_id`=`student`.`student_id` 
                                    WHERE `uploadhostels`.`landloaders_landloaders_id`='" . $_SESSION["u"]["landloaders_id"] . "' AND `stubooking`.`landlordApproved` IS NULL");
                                        $req_num = $req_rs->num_rows;
                                        if ($req_num != 0) {
                                            for ($i = 0; $i < $req_num; $i++) {
                                                $req_data = $req_rs->fetch_assoc();
                                        ?>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-6 p-3">
                                                            <input type="email" class="form-control" id="e" disabled value="<?php echo ($req_data["email"]) ?>" />
                                                        </div>
                                                        <div class="col-3 d-grid p-3">
                                                        <button class="btn btn-success" onclick="acceptBooking('<?php echo $req_data['student_student_id']; ?>', '<?php echo $req_data['uploadHostels_uploadHostels_id']; ?>');">Accept</button>
                                                        </div>
                                                        <div class="col-3 d-grid p-3">
                                                            <button class="btn btn-danger" onclick="rejectBooking('<?php echo $req_data['student_student_id']; ?>', '<?php echo $req_data['uploadHostels_uploadHostels_id']; ?>');">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <!-- empty view -->
                                            <div class="col-12 col-lg-9 mt-5 mb-5">
                                                <div class="row">
                                                    <div class="col-12 text-center mb-2">
                                                        <label class="form-label fs-3 fw-bold">
                                                            No Requests.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- empty view -->
                                        <?php
                                        }
                                        ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location -->

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

                request.open("GET", "viewLocationProcess.php?id=" + id, true);
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