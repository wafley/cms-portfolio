<!-- JQuery JS -->
<script src="<?= base_url('templates/admin/libs/jquery/dist/jquery.min.js') ?>"></script>

<!-- Date & Time Picker JS -->
<script src="<?= base_url('templates/admin/libs/moment/moment.js') ?>"></script>

<!-- Date and Time -->
<script>
    let date = moment(new Date());
    $("#year").text(date.format("YYYY"));
</script>

<!-- Logout Mechanism -->
<form id="logout-form" action="<?= base_url('admin/logout') ?>" method="POST" style="display: none;"></form>

<script>
    $(document).on("click", "#logout-btn", function(e) {
        e.preventDefault();
        Swal.fire({
            title: "Apakah Anda yakin ingin keluar?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#dc3545",
            cancelButtonColor: "#adb5bd",
            confirmButtonText: "Ya, Keluar",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                $("#logout-form").submit();
            }
        });
    });
</script>

<!-- Toggle Password -->
<script>
    function togglePassword(passwordId, toggleBtn) {
        const $input = $("#" + passwordId);
        const type = $input.attr("type") === "password" ? "text" : "password";
        $input.attr("type", type);
        $(toggleBtn).find("i").toggleClass("fa-eye fa-eye-slash");
    }
</script>

<!-- Delete Mechanism -->
<script>
    $(document).on("click", "[data-ajax='delete']", function() {
        Swal.fire({
            title: "Yakin ingin menghapus?",
            text: `Data ini akan dihapus permanen.`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Ya, hapus",
            cancelButtonText: "Batal",
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: $(this).data("url"),
                    type: "POST",
                    dataType: "json",
                    success: function(response) {
                        if (response.status === "success") {
                            window.location.reload();
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: "error",
                            title: "Gagal",
                            text: "Terjadi kesalahan saat menghapus data"
                        });
                    }
                });
            }
        });
    });
</script>