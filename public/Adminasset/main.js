$(document).ready(function () {
    $(".status").click(function () {
        var id = $(this).data("id");
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        var status = $(this).is(":checked") === true ? 1 : 0;

        $.ajax({
            url: $(this).data("url"),
            type: "PATCH",
            headers: {
                "X-CSRF-TOKEN": csrfToken,
            },
            data: {
                status: status,
            },
            success: function (data) {
                var Toast = Swal.mixin({
                    toast: true,
                    type: "success",
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                });
                Toast.fire({
                    icon: "success",
                    title: data.message,
                });
            },
        });
    });

    function message(title, type) {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true, // Show a progress bar to indicate the remaining time
            onOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
            },
        });

        Toast.fire({
            icon: type, // You can use the 'type' argument to set the icon
            title: title,
        });
    }

    $("#delete_all").on("click", function (e) {
        var checked = [];

        $.each($("input[name='id[]']:checked"), function () {
            checked.push($(this).val());
        });
        var joined = checked.join(", ");

        if (joined.length <= 0) {
            return false;
        }

        swal.fire({
            title: "Are you sure?",
            icon: "warning",
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "Cancel",
        }).then((willDelete) => {
            if (willDelete.value) {
                $.ajax({
                    url: $(this).data("url"),
                    type: "DELETE",
                    data: {
                        ids: joined,
                    },
                    success: function (data) {
                        if (data.success === true) {
                            $("input[name='id[]']:checked").each(function () {
                                $(this).parents("tr").remove();
                            });
                            message(data.message, "success");
                        } else if (data.success === false) {
                            message(data.message, "error");
                        } else {
                            message(data.message, "error");
                        }
                    },
                    error: function (data) {
                        message(data.message, "error");
                    },
                });
            }
        });
    });

    setTimeout(function () {
        $(".card-alert").fadeOut("fast");
    }, 20000);

    // Select all checkboxes in the first table
    var $selectAll = $("#selectAll");
    var $table = $(".tablegrid");
    var $tdCheckbox = $table.find("tbody input:checkbox");

    $selectAll.on("click", function () {
        $tdCheckbox.prop("checked", this.checked);
    });

    // Update main checkbox state based on checkboxes in the first table
    $tdCheckbox.on("change", function () {
        $selectAll.prop(
            "checked",
            $tdCheckbox.length === $tdCheckbox.filter(":checked").length
        );
    });

    // Select all checkboxes in the second table
    var $Categorie = $("#Categorie");
    var $tableCategorie = $(".tablegrid-categorie");
    var $tdCheckboxCategorie = $tableCategorie.find("tbody input:checkbox");

    $Categorie.on("click", function () {
        $tdCheckboxCategorie.prop("checked", this.checked);
    });

    // Update main checkbox state based on checkboxes in the second table
    $tdCheckboxCategorie.on("change", function () {
        $Categorie.prop(
            "checked",
            $tdCheckboxCategorie.length ===
            $tdCheckboxCategorie.filter(":checked").length
        );
    });

    // Shift-click functionality
    var $chkboxes = $(".sub_chk");
    var lastChecked = null;

    $chkboxes.click(function (e) {
        if (!lastChecked) {
            lastChecked = this;
            return;
        }

        if (e.shiftKey) {
            var start = $chkboxes.index(this);
            var end = $chkboxes.index(lastChecked);

            $chkboxes
                .slice(Math.min(start, end), Math.max(start, end) + 1)
                .prop("checked", lastChecked.checked);
        }

        lastChecked = this;
    });
});

// Delete


// Delete
function confirmDelete(element) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel',
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
    }).then((result) => {
        if (result.isConfirmed) {
            // Find the nearest form and submit it
            let form = element.closest('form');
            if (form) {
                form.submit();
            }
        }
    });
}






$("#Sessionselect").change(function () {
    // $("#CurrentSession").submit();
});







// Export button click event
$(".export-button").on("click", function (e) {
    e.preventDefault(); // Prevent the default anchor behavior
    var exportUrl = $(this).attr("href");
    // Show a confirmation dialog using SweetAlert2
    Swal.fire({
        title: "Are you sure?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, Export it!",
        cancelButtonText: "Cancel",
    }).then(function (result) {
        // If the user clicks "Yes" in the confirmation dialog
        if (result.isConfirmed) {
            // Redirect to the export URL
            window.location.href = exportUrl;

        }
    });
});


