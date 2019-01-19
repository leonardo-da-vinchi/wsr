let sign_up_checked = $('#sign_up_checked');
let sign_in_checked = $('#sign_in_checked');

sign_up_checked.click(() => {
    $(".sign-in").css("display", "none");
    $(".sign-up").css("display", "block");
    setSingUpRequeried();
})

sign_in_checked.click(() => {
    $(".sign-up").css("display", "none");
    $(".sign-in").css("display", "block");
    setSingInRequeried();
})

function setSingUpRequeried() {
    $(".sign-in .email, .sign-in .password").attr("required", false);
    $(".sign-up .email, .sign-up .login, .sign-up .password").attr("required", true);
}

function setSingInRequeried() {
    $(".sign-in .email, .sign-in .password").attr("required", true);
    $(".sign-up .email, .sign-up .login, .sign-up .password").attr("required", false);
}