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
