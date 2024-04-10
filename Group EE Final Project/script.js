window.onscroll = function () {
  scrollFunction();
};

window.addEventListener("load", function () {
  document.querySelector(".loder").classList.add("hidden");
});

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.animationName = "headerScrollUp";
    document.getElementById("navbar").style.animationDuration = "2s";
    // document.getElementById("navbar").style.animationFillMode = "forwards";

    document.getElementById("animation3").style.animationName = "animate3";
    document.getElementById("animation3").style.animationDuration = "3s";
    document.getElementById("animation3").style.animationFillMode = "forwards";

    document.getElementById("animation4").style.animationName = "animate4";
    document.getElementById("animation4").style.animationDuration = "6s";
    document.getElementById("animation4").style.animationFillMode = "forwards";

    var projects = setInterval(projectDone, 50);
    var clients = setInterval(happyClients, 1);
    var awards = setInterval(ourAwards, 40);
    var experience = setInterval(ourExperience, 10);

    let count1 = 1;
    let count2 = 1;
    let count3 = 1;
    let count4 = 1;

    function projectDone() {
      count1++;
      document.getElementById("value1").innerHTML =
        count1 + '<i class="bi bi-plus fs-1" style="color: #f35444;"></i>';
      //stop at given condition
      if (count1 == 20) {
        clearInterval(projects);
      }
    }

    function happyClients() {
      count2++;
      document.getElementById("value2").innerHTML =
        count2 + '<i class="bi bi-plus fs-1" style="color: #f35444;"></i>';
      //stop at given condition
      if (count2 == 1000) {
        clearInterval(clients);
      }
    }

    function ourAwards() {
      count3++;
      document.getElementById("value3").innerHTML =
        count3 + '<i class="bi bi-plus fs-1" style="color: #f35444;"></i>';
      //stop at given condition
      if (count3 == 50) {
        clearInterval(awards);
      }
    }

    function ourExperience() {
      count4++;
      document.getElementById("value4").innerHTML =
        count4 + '<i class="bi bi-plus fs-1" style="color: #f35444;"></i>';
      //stop at given condition
      if (count4 == 120) {
        clearInterval(experience);
      }
    }

    document.getElementById("searchScroll1").style.position = "fixed";
    document.getElementById("searchScroll1").style.top = "40px";
  } else {
    document.getElementById("navbar").style.animationName = "";
    // document.getElementById("animation3").style.animationName = "";
    // document.getElementById("navbar").style.animationDuration = "2s";
    // document.getElementById("navbar").style.animationFillMode = "forwards";
  }
}

function dash() {
  // document.getElementById("searchScroll1").className = "d-none"

  var searchScroll1 = document.getElementById("navbarTogglerDemo02");

  searchScroll1.classList.toggle("d-none");
}

var landModel;
function signUpModel() {
  var viewModel = document.getElementById("lm");
  landModel = new bootstrap.Modal(viewModel);
  landModel.show();
}
var landModel2;
function signinModel() {
  var viewModel = document.getElementById("lm2");
  landModel2 = new bootstrap.Modal(viewModel);
  landModel.hide();
  landModel2.show();
}
function signUp() {
  var f = document.getElementById("f");
  var l = document.getElementById("l");
  var e = document.getElementById("e");
  var p = document.getElementById("p");
  var m = document.getElementById("m");
  var g = document.getElementById("g");

  var form = new FormData();

  form.append("f", f.value);
  form.append("l", l.value);
  form.append("e", e.value);
  form.append("p", p.value);
  form.append("m", m.value);
  form.append("g", g.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        signinModel();
      } else {
        document.getElementById("msg").innerHTML = text;
        document.getElementById("msgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "landloadsignupprocess.php", true);
  request.send(form);
}
function signIn() {
  var email = document.getElementById("email2");
  var password = document.getElementById("password2");
  var rememberme = document.getElementById("rememberme");

  var f = new FormData();
  f.append("e", email.value);
  f.append("p", password.value);
  f.append("r", rememberme.checked);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;

      if (text == "Success") {
        window.location = "landlord.php";
      } else {
        document.getElementById("msg2").innerHTML = text;
      }
    }
  };

  request.open("POST", "landlordsignInProcess.php", true);
  request.send(f);
}

var bm;
function forgotPassword() {
  var email = document.getElementById("email2");

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        alert(
          "Verification code has sent to your email. Please check your inbox"
        );
        var m = document.getElementById("forgotPasswordModal");
        bm = new bootstrap.Modal(m);
        bm.show();
      } else {
        alert(text);
      }
    }
  };

  request.open("GET", "forgotPasswordProcess.php?e=" + email.value, true);
  request.send();
}

function showPassword() {
  var i = document.getElementById("npi");
  var eye = document.getElementById("e1");

  if (i.type == "password") {
    i.type = "text";
    eye.className = "bi bi-eye-fill";
  } else {
    i.type = "password";
    eye.className = "bi bi-eye-slash-fill";
  }
}

function reTypePasswordShow() {
  var i = document.getElementById("rtpi");
  var eye = document.getElementById("e2");

  if (i.type == "password") {
    i.type = "text";
    eye.className = "bi bi-eye-fill";
  } else {
    i.type = "password";
    eye.className = "bi bi-eye-slash-fill";
  }
}

function resetpw() {
  var email = document.getElementById("email2");
  var np = document.getElementById("npi");
  var rtp = document.getElementById("rtpi");
  var vcode = document.getElementById("vc");

  var p = document.getElementById("password2");

  var form = new FormData();
  form.append("e", email.value);
  form.append("p", np.value);
  form.append("r", rtp.value);
  form.append("v", vcode.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;

      if (text == "Success") {
        bm.hide();
        alert("Password reset Success.");
        signinModel.show();
      } else {
        alert(text);
      }
    }
  };

  request.open("POST", "resetPassword.php", true);
  request.send(form);
}

function signout() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;

      if ((text = "Success")) {
        window.location = "index.php";
      } else {
        alert(text);
      }
    }
  };

  request.open("GET", "signoutProcess.php", true);
  request.send();
}

var landModel3;
function adminloginmodel() {
  var viewModel = document.getElementById("lm3");
  landModel3 = new bootstrap.Modal(viewModel);
  landModel3.show();
}
function adminsignIn() {
  var email = document.getElementById("email3");
  var password = document.getElementById("password3");
  var rememberme = document.getElementById("rememberme2");

  var f = new FormData();
  f.append("e", email.value);
  f.append("p", password.value);
  f.append("r", rememberme.checked);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;

      if (text == "Success") {
        window.location = "adminpanel.php";
      } else {
        document.getElementById("msg3").innerHTML = text;
      }
    }
  };

  request.open("POST", "adminsignInProcess.php", true);
  request.send(f);
}
var bm;
function adminforgotPassword() {
  var email = document.getElementById("email3");

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        alert(
          "Verification code has sent to your email. Please check your inbox"
        );
        var m = document.getElementById("adminforgotPasswordModal");
        bm = new bootstrap.Modal(m);
        bm.show();
      } else {
        alert(text);
      }
    }
  };

  request.open("GET", "adminforgotPasswordProcess.php?e=" + email.value, true);
  request.send();
}
function adminresetpw() {
  var email = document.getElementById("email3");
  var np = document.getElementById("npi1");
  var rtp = document.getElementById("rtpi1");
  var vcode = document.getElementById("vc1");

  var p = document.getElementById("password3");

  var form = new FormData();
  form.append("e", email.value);
  form.append("p", np.value);
  form.append("r", rtp.value);
  form.append("v", vcode.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;

      if (text == "Success") {
        bm.hide();
        alert("Password reset Success.");
        signinModel.show();
      } else {
        alert(text);
      }
    }
  };

  request.open("POST", "adminforgotPassword.php", true);
  request.send(form);
}
function adminshowPassword() {
  var i = document.getElementById("npi1");
  var eye = document.getElementById("e3");

  if (i.type == "password") {
    i.type = "text";
    eye.className = "bi bi-eye-fill";
  } else {
    i.type = "password";
    eye.className = "bi bi-eye-slash-fill";
  }
}

function adminreTypePasswordShow() {
  var i = document.getElementById("rtpi1");
  var eye = document.getElementById("e4");

  if (i.type == "password") {
    i.type = "text";
    eye.className = "bi bi-eye-fill";
  } else {
    i.type = "password";
    eye.className = "bi bi-eye-slash-fill";
  }
}

var landModel4;
function studentsignupmodel() {
  var viewModel = document.getElementById("lm4");
  landModel4 = new bootstrap.Modal(viewModel);
  landModel4.show();
}
var landModel5;
function studentsigninModel() {
  var viewModel = document.getElementById("stsign");
  landModel5 = new bootstrap.Modal(viewModel);

  landModel5.show();
}
function studentsignUp() {
  var f = document.getElementById("f");
  var l = document.getElementById("l");
  var e = document.getElementById("e");
  var p = document.getElementById("p");
  var m = document.getElementById("m");
  var g = document.getElementById("g");

  var form = new FormData();

  form.append("f", f.value);
  form.append("l", l.value);
  form.append("e", e.value);
  form.append("p", p.value);
  form.append("m", m.value);
  form.append("g", g.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        studentsigninModel();
      } else {
        document.getElementById("msg").innerHTML = text;
        document.getElementById("msgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "studentsignupprocess.php", true);
  request.send(form);
}

var bm;
function studentforgotPassword() {
  var email = document.getElementById("semail");

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        alert(
          "Verification code has sent to your email. Please check your inbox"
        );
        var m = document.getElementById("studentforgotPasswordModal");
        bm = new bootstrap.Modal(m);
        bm.show();
      } else {
        alert(text);
      }
    }
  };

  request.open(
    "GET",
    "studentforgotPasswordProcess.php?e=" + email.value,
    true
  );
  request.send();
}
function studentresetpw() {
  var email = document.getElementById("semail");
  var np = document.getElementById("npi3");
  var rtp = document.getElementById("rtpi3");
  var vcode = document.getElementById("vc3");

  var p = document.getElementById("password");

  var form = new FormData();
  form.append("e", email.value);
  form.append("p", np.value);
  form.append("r", rtp.value);
  form.append("v", vcode.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;

      if (text == "Success") {
        bm.hide();
        alert("Password reset Success.");
        signinModel.show();
      } else {
        alert(text);
      }
    }
  };

  request.open("POST", "studentforgotPassword.php", true);
  request.send(form);
}
function studentshowPassword() {
  var i = document.getElementById("npi3");
  var eye = document.getElementById("e5");

  if (i.type == "password") {
    i.type = "text";
    eye.className = "bi bi-eye-fill";
  } else {
    i.type = "password";
    eye.className = "bi bi-eye-slash-fill";
  }
}

function studentreTypePasswordShow() {
  var i = document.getElementById("rtpi3");
  var eye = document.getElementById("e6");

  if (i.type == "password") {
    i.type = "text";
    eye.className = "bi bi-eye-fill";
  } else {
    i.type = "password";
    eye.className = "bi bi-eye-slash-fill";
  }
}

function studentsignIn() {
  var email = document.getElementById("semail");
  var password = document.getElementById("spassword");
  var rememberme = document.getElementById("srememberme");

  var f = new FormData();
  f.append("e", email.value);
  f.append("p", password.value);
  f.append("r", rememberme.checked);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;

      if (text == "Success") {
        window.location = "studentpanel.php";
      } else {
        document.getElementById("smsg").innerHTML = text;
      }
    }
  };

  request.open("POST", "studentsignInProcess.php", true);
  request.send(f);
}

var landModel6;
function wardensignupmodel() {
  var viewModel = document.getElementById("lm5");
  landModel6 = new bootstrap.Modal(viewModel);
  landModel6.show();
}

var landModel7;
function wardensigninModel() {
  var viewModel = document.getElementById("wardensign");
  landModel7 = new bootstrap.Modal(viewModel);

  landModel7.show();
}

function wardensignUp() {
  var f = document.getElementById("f1");
  var l = document.getElementById("l1");
  var e = document.getElementById("e1");
  var p = document.getElementById("p1");
  var m = document.getElementById("m1");
  var g = document.getElementById("g1");

  var form = new FormData();

  form.append("f1", f.value);
  form.append("l1", l.value);
  form.append("e1", e.value);
  form.append("p1", p.value);
  form.append("m1", m.value);
  form.append("g1", g.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        alert("Registration Successful");
        landModel6.hide();
      } else {
        document.getElementById("msg2").innerHTML = text;
        document.getElementById("msgdiv2").className = "d-block";
      }
    }
  };

  request.open("POST", "wardensignupprocess.php", true);
  request.send(form);
}

var bm;
function wardenforgotPassword() {
  var email = document.getElementById("emailw");

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        alert(
          "Verification code has sent to your email. Please check your inbox"
        );
        var m = document.getElementById("wardenforgotPasswordModal");
        bm = new bootstrap.Modal(m);
        bm.show();
      } else {
        alert(text);
      }
    }
  };

  request.open("GET", "wardenforgotPasswordProcess.php?e=" + email.value, true);
  request.send();
}
function wardenresetpw() {
  var email = document.getElementById("wemail");
  var np = document.getElementById("npi4");
  var rtp = document.getElementById("rtpi4");
  var vcode = document.getElementById("vc4");

  var p = document.getElementById("passwordw");

  var form = new FormData();
  form.append("e", email.value);
  form.append("p", np.value);
  form.append("r", rtp.value);
  form.append("v", vcode.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;

      if (text == "Success") {
        bm.hide();
        alert("Password reset Success.");
        signinModel.show();
      } else {
        alert(text);
      }
    }
  };

  request.open("POST", "wardenforgotPassword.php", true);
  request.send(form);
}
function wardenshowPassword() {
  var i = document.getElementById("npi4");
  var eye = document.getElementById("e7");

  if (i.type == "password") {
    i.type = "text";
    eye.className = "bi bi-eye-fill";
  } else {
    i.type = "password";
    eye.className = "bi bi-eye-slash-fill";
  }
}

function wardenreTypePasswordShow() {
  var i = document.getElementById("rtpi4");
  var eye = document.getElementById("e8");

  if (i.type == "password") {
    i.type = "text";
    eye.className = "bi bi-eye-fill";
  } else {
    i.type = "password";
    eye.className = "bi bi-eye-slash-fill";
  }
}

function wardensignIn() {
  var email = document.getElementById("emailw");
  var password = document.getElementById("passwordw");
  var rememberme = document.getElementById("remembermew");

  var f = new FormData();
  f.append("e", email.value);
  f.append("p", password.value);
  f.append("r", rememberme.checked);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;

      if (text == "Success") {
        window.location = "wardenpanel.php";
      } else {
        document.getElementById("msgw").innerHTML = text;
      }
    }
  };

  request.open("POST", "wardensignInProcess.php", true);
  request.send(f);
}

function addHostels() {
  window.location = "addHostels.php";
}

var landModel8;
function locationModel() {
  var viewModel = document.getElementById("locM");
  landModel8 = new bootstrap.Modal(viewModel);
  landModel8.show();
}

var landModel10;
function viewBookings() {
  var viewModel = document.getElementById("viewBooking");
  landModel10 = new bootstrap.Modal(viewModel);
  landModel10.show();
}

var pName;
var lati;
var longi;
function addLocation() {
  pName = document.getElementById("p").value;
  lati = document.getElementById("la").value;
  longi = document.getElementById("lo").value;

  landModel8.hide();
}

function changeImage() {
  var img = document.getElementById("imageuploader");

  img.onchange = function () {
    var file1 = this.files[0];
    var url = window.URL.createObjectURL(file1);

    document.getElementById("i0").src = url;
  };
}

function addHostel() {
  var price = document.getElementById("price");
  var description = document.getElementById("desc");
  var image = document.getElementById("imageuploader");

  var f = new FormData();
  f.append("pr", price.value);
  f.append("des", description.value);
  f.append("pName", pName);
  f.append("lati", lati);
  f.append("longi", longi);

  f.append("image", image.files[0]);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;

      if (text == "Hostel image saved successfully") {
        pName = null;
        lati = null;
        longi = null;
        alert("Successfully added post.");
        window.location.reload();
      } else {
        alert(text);
      }
    }
  };

  request.open("POST", "addhostelProcess.php", true);
  request.send(f);
}

function updateHostel(id) {
  var price = document.getElementById("price");
  var description = document.getElementById("desc");
  var image = document.getElementById("imageuploader");
  var pName1 = document.getElementById("p").value;
  var lati1 = document.getElementById("la").value;
  var longi1 = document.getElementById("lo").value;

  var f = new FormData();
  f.append("id", id);
  f.append("pr", price.value);
  f.append("des", description.value);
  f.append("pName", pName1);
  f.append("lati", lati1);
  f.append("longi", longi1);

  f.append("image", image.files[0]);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;

      if (text == "Hostel image saved successfully") {
        alert("Updated");
        window.location.reload();
      } else {
        alert(text);
      }
    }
  };

  request.open("POST", "updatehostelProcess.php", true);
  request.send(f);
}

function deletePost(id) {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        window.location.reload();
      } else {
        alert(text);
      }
    }
  };

  request.open("GET", "deletePostProcess.php?id=" + id, true);
  request.send();
}

function wardenApproved(id) {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        window.location.reload();
      } else {
        alert(text);
      }
    }
  };

  request.open("GET", "wardenApproveProcess.php?id=" + id, true);
  request.send();
}

function rejectsPost(id) {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        window.location.reload();
      } else {
        alert(text);
      }
    }
  };

  request.open("GET", "wardenRejectProcess.php?id=" + id, true);
  request.send();
}

function book(id) {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        window.location.reload();
      } else {
        alert(text);
      }
    }
  };

  request.open("GET", "bookedProcess.php?id=" + id, true);
  request.send();
}

function acceptBooking(stId, poID) {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        alert(text);
        window.location.reload();
      } else {
        alert(text);
      }
    }
  };

  request.open("GET", "acceptLandlordProcess.php?id=" + stId + "&poID=" + poID, true);

  request.send();
}

function rejectBooking(stId, poID){
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "Success") {
        alert(text);
        window.location.reload();
      } else {
        alert(text);
      }
    }
  };

  request.open("GET", "rejectLandlordProcess.php?id=" + stId + "&poID=" + poID, true);

  request.send();
}

