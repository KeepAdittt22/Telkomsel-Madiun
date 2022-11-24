//Loading
function showPreload() {
  $(".preload").css("display", "flex");
  $("#loader").css("display", "block");
  $("#logo").css("display", "block");
}

//Custom jS DataTable
$(function () {
  $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});

// sweet Alert
function showMessage(e_title = "Judul", e_text = "Berhasil", e_icon = "success", e_button = "OK") {
  console.log(jQuery.parseHTML(e_text));
  Swal.fire({
    title: e_title,
    html: jQuery.parseHTML(e_text)[0].data,
    icon: e_icon,
    confirmButtonText: e_button,
  });
}

// Edit Cluster
function edit_cluster(id_cluster, nama, kat) {
  $(".modal-title").html("Edit Data Cluster")
  $("#nm_cluster").val(nama);
  $("#kat_cluster").val(kat);
  $("#id_cluster").val(id_cluster);

}

// Clear Cluster
function clear_cluster() {
  $(".modal-title").html("Tambah Data Cluster")
  $("#nm_cluster").val("");
  $("#kat_cluster").val("");
  $("#id_cluster").val("");
}

// Edit Kota
function edit_kota(id_cluster, id_kota, nm_kota) {
  $(".modal-title").html("Edit Data Kota")
  $("#id_kota").val(id_kota);
  $("#nm_kota").val(nm_kota);
  $("#id_cluster").val(id_cluster);
  //$("#id_cluster > option[value=" + id_cluster + "]").prop("selected", true);
}

// Clear Kota 
function clear_kota(id_cluster, id_kota, nm_kota) {
  $(".modal-title").html("Tambah Data Kota")
  $("#id_cluster").val(id_cluster);
  $("#nm_kota").val(nm_kota);
  $("#id_kota").val(id_kota);
}

// Edit Kecamatan
function edit_kecamatan(id_kota, id_kecamatan, nama) {
  $(".modal-title").html("Edit Data Kecamatan")
  $("#nm_kecamatan").val(nama);
  $("#id_kecamatan").val(id_kecamatan);
  $("#id_kota").val(id_kota);
}

// Clear Kecamatan
function clear_kecamatan(id_kota, id_kecamatan, nama) {
  $(".modal-title").html("Tambah Data Kecamatan")
  $("#id_kota").val(id_kota);
  $("#nm_kecamatan").val(nama);
  $("#id_kecamatan").val(id_kecamatan);
}

// Edit Product
function edit_product(id_product, nama) {
  $(".modal-title").html("Edit Data Product")
  $("#nm_product").val(nama);
  $("#id_product").val(id_product);
}

// Clear Product
function clear_product(id_product, nama) {
  $(".modal-title").html("Tambah Data Product")
  $("#nm_product").val(nama);
  $("#id_product").val(id_product);
}

//Edit Revenue
function edit_target(id_revenue, id_product, jml_target, jml_rev_old, jml_rev_new, MoM, YoY, YtD) {
  $(".modal-title").html("Edit Data Revenue Kecamatan")
  $("#id_revenue").val(id_revenue);
  $("#id_product").val(id_product);
  $("#jml_target").val(jml_target);
  $("#jml_revenue_old").val(jml_rev_old);
  $("#jml_revenue_new").val(jml_rev_new);
  $("#MoM").val(MoM);
  $("#YoY").val(YoY);
  $("#YtD").val(YtD);
  $("#list_product").hide();
  $("#form_rev").append('<input id="e_id_product" type="hidden" name="id_product" value="' + id_product + '">');
}

//Clear Revenue
function clear_target() {
  $(".modal-title").html("Tambah Data Revenue Kecamatan")
  $("#id_revenue").val("");
  $("#id_product").val("");
  $("#jml_target").val("");
  $("#jml_revenue_old").val("");
  $("#jml_revenue_new").val("");
  $("#MoM").val("");
  $("#YoY").val("");
  $("#YtD").val("");
  $("#list_product").show();
  $("#e_id_product").remove();
}

//Edit Revenue
function edit_target_clus(id_revenue, id_product, jml_target, jml_rev_old, jml_rev_new, MoM, YoY, YtD) {
  $(".modal-title").html("Edit Data Revenue Cluster")
  $("#id_revenue").val(id_revenue);
  $("#id_product").val(id_product);
  $("#jml_target").val(jml_target);
  $("#jml_revenue_old").val(jml_rev_old);
  $("#jml_revenue_new").val(jml_rev_new);
  $("#MoM").val(MoM);
  $("#YoY").val(YoY);
  $("#YtD").val(YtD);
  $("#list_product").hide();
  $("#form_rev").append('<input id="e_id_product" type="hidden" name="id_product" value="' + id_product + '">');
}

//Clear Revenue
function clear_target_clus() {
  $(".modal-title").html("Tambah Data Revenue Cluster")
  $("#id_revenue").val("");
  $("#id_product").val("");
  $("#jml_target").val("");
  $("#jml_revenue_old").val("");
  $("#jml_revenue_new").val("");
  $("#MoM").val("");
  $("#YoY").val("");
  $("#YtD").val("");
  $("#list_product").show();
  $("#e_id_product").remove();
}

// Edit User
function edit_user(id, nama, email, password, role) {
  $(".modal-title").html("Edit Data User")
  $("#id").val(id);
  $("#name").val(nama);
  $("#email").val(email);
  $("#old_password").val(password);
  $("#role").val(role);
}

// Clear User
function clear_user(id, nama, email, password, role) {
  $(".modal-title").html("Tambah Data User")
  $("#id").val(id);
  $("#name").val(nama);
  $("#email").val(email);
  $("#password").val(password);
  $('#role').val(role);
}

// Format Number .
function number_format(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}


//Konfirmasi delete
function confirmDelete(e) {
  const url = $(e).attr('href');
  Swal.fire({
    title: "Apakah Anda Yakin Menghapus?",
    text: "Data Akan Dihapus !!!",
    icon: "question",
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'IYA',
    cancelButtonText: 'TIDAK',
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = url;
    }
  });
  return false;
}

$(function () {
  //Initialize Select2 Elements
  $('.select2').select2()

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })
})

//Custom Name File
$(function () {
  bsCustomFileInput.init();
});

