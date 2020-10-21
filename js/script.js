$(document).ready(function () {
  $("#navbar ul li a").addClass("nav-link");
  // $('#submit-message').submit(() => {
  //   console.log($("#submit-message input[name='name']").val())
  //   console.log($("#submit-message input[name='mail']").val())
  //   console.log($("#submit-message input[name='tel']").val())
  //   console.log($("#submit-message textarea[name='message']").val())
  //   return false
  // })

  /* Contact Form */
  if ($('#form-message').length != 0) {
    addForm('#form-message');
  }

  if ($('.phuketwebsite').length != 0) {
    $('.phuketwebsite .page .entry-content p')[0].innerText = `${$('.phuketwebsite .page .entry-content p')[0].innerText}`.replace(/{province}/g, 'ภูเก็ต');
  }
  /* Contact Form */
  function addForm(formtype) {

    var formid = $(formtype);
    var emailsend = false;
    formid.find("button#submit-message").click(sendemail);
    formid.find(".errormessage").hide();
    formid.find(".successmessage").hide();
    formid.find(".sendingmessage").hide();
    function resetform() {
      formid.find("input").each(function () {
        $(this).val("");
      })
      formid.find("textarea").val("");
      emailsend = false;
    }
    function sendemail() {
      formid.find(".successmessage").hide();
      var phpfile = "";
      if (formtype == "#form-message") {
        phpfile = formid.attr("attr-data") + "/send.php";
      }
      if (!emailsend) {
        emailsend = true;
        console.log(formid.serialize())
        formid.find(".errormessage").hide();
        formid.find("#submit-message").prop("disabled", true);
        formid.find(".sendingmessage").show();
        $.post(phpfile, formid.serialize(), function () {
          formid.find("#submit-message").prop("disabled", false);
          formid.find(".sendingmessage").hide();
          formid.find(".successmessage").fadeIn();
          resetform();
        });
      }
      return false
    }
  }
})