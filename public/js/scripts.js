import { ajaxSend } from "/js/functions.js";

document.addEventListener("DOMContentLoaded", function (event) {
    //do work
    document.getElementById("pre-loader").style.display = "none";

    document
        .getElementById("modalcontactBtn")
        .addEventListener("click", function (event) {
            event.preventDefault();

            let name = document.getElementById("contactModalName").value;
            let phone = document.getElementById("contactModalPhone").value;

            ajaxSend(name, phone);
        });

    if (document.getElementById("contactButton")) {
        document
            .getElementById("contactButton")
            .addEventListener("click", function (event) {
                event.preventDefault();

                let name = document.getElementById("contactName").value;
                let phone = document.getElementById("contactPhone").value;

                ajaxSend(name, phone);
            });
    }


    
});
