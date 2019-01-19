let img;
$("input:file").change(function() {
  img = this.files;
});
$(".sign-in, .sign-up").submit(function (event) {
  event.preventDefault();
  let form = new FormData();
  let dataForm = JSON.stringify($(this).serializeArray());
  form.append("dataForm", dataForm);

  $.ajax({
    url: "php/sign.php",
    type: "POST",
    data: form,
    cache: false,
    processData: false,
    contentType: false,
    // success: function(res) {
    //   let r = JSON.parse(res);
    //   if (r.success == 1) {
    //     $("body").append(`<img src=${r.src} alt=''>`);
    //   } else {
    //     alert(r.error);
    //   }
    // }
  });
});
