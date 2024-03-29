!function(t) {
    "use strict";
    t(function() {
        t('[data-toggle="sweet-alert"]').on("click", function() {
            switch (t(this).data("sweet-alert")) {
            case "basic":
                swal({
                    title: "Here's a message!",
                    text: "A few words about this sweet alert ...",
                    buttonsStyling: !1,
                    confirmButtonClass: "btn btn-primary"
                });
                break;
            case "info":
            case "info":
                swal({
                    title: "Info",
                    text: "A few words about this sweet alert ...",
                    type: "info",
                    buttonsStyling: !1,
                    confirmButtonClass: "btn btn-info"
                });
                break;
            case "success":
                swal({
                    title: "Success",
                    text: "A few words about this sweet alert ...",
                    type: "success",
                    buttonsStyling: !1,
                    confirmButtonClass: "btn btn-success"
                });
                break;
            case "warning":
                swal({
                    title: "Warning",
                    text: "A few words about this sweet alert ...",
                    type: "warning",
                    buttonsStyling: !1,
                    confirmButtonClass: "btn btn-warning"
                });
                break;
            case "question":
                swal({
                    title: "Are you sure?",
                    text: "A few words about this sweet alert ...",
                    type: "question",
                    buttonsStyling: !1,
                    confirmButtonClass: "btn btn-default"
                });
                break;
            case "confirm":
                swal({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    type: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonClass: "btn btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonClass: "btn btn-secondary"
                }).then(t=>{
                    t.value && swal({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        type: "success",
                        buttonsStyling: !1,
                        confirmButtonClass: "btn btn-primary"
                    })
                }
                );
                break;
            case "image":
                swal({
                    title: "Sweet",
                    text: "Modal with a custom image ...",
                    imageUrl: "../../assets/img/ill/ill-1.svg",
                    buttonsStyling: !1,
                    confirmButtonClass: "btn btn-primary",
                    confirmButtonText: "Super!"
                });
                break;
            case "timer":
                swal({
                    title: "Auto close alert!",
                    text: "I will close in 2 seconds.",
                    timer: 2e3,
                    showConfirmButton: !1
                })
            }
        })
    })
}(jQuery);
