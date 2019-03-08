function isPassMatching() {
    return $("#passkonfirm").val() === $("#pass").val();
}

$(document).ready(function () {
    $("#alert-password").hide();
    $("#passkonfirm").keyup(function () {
        $("#alert-password").show();
        if (isPassMatching()) {
            $("#alert-password").addClass("text-success");
            $("#alert-password").text("Password cocok!");
            $("#alert-password").removeClass("text-danger");
            $("button[type=submit]").removeAttr("disabled")
        } else {
            $("#alert-password").addClass("text-danger");
            $("#alert-password").text("Password tidak cocok!");
            $("#alert-password").removeClass("text-success");
            $("button[type=submit]").attr("disabled", "disabled");
        }
    });
});