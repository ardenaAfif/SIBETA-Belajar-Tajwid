document
  .getElementById("sidebar-icon")
  .addEventListener("click", tampilkan_sidebar);

function tampilkan_sidebar() {
  var tombol_side = document.getElementsByClassName("sidebar-belum-muncul");
  for (var i = 0; i < tombol_side.length; i++) {
    tombol_side[i].classList = "sidebar";
  }
}
document
  .getElementById("sembunyikan-sidebar")
  .addEventListener("click", sembunyikan_sidebar);

function sembunyikan_sidebar() {
  var tombol_side = document.getElementsByClassName("sidebar");
  for (var i = 0; i < tombol_side.length; i++) {
    tombol_side[i].classList = "sidebar-belum-muncul";
  }
}

document
  .getElementById("navbar-kanan")
  .addEventListener("click", tampilkan_dropdown);

function tampilkan_dropdown() {
  var dropdown_check = document.getElementsByClassName("dropdown");
  for (var i = 0; i < dropdown_check.length; i++) {
    dropdown_check[i].classList = "dropdown drop-check";
  }
}

// document
//   .getElementById("drop-back")
//   .addEventListener("click", sembunyikan_dropdown);
// function sembunyikan_dropdown() {
//   $(".dropdown").removeClass("drop-check");
//   console.log("berhasil");
// }
var element = document.getElementById("drop-back");
var images = document.querySelectorAll(".dropdown");
element.onclick = function () {
  images[0].classList.remove("drop-check");
};
