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

  /* Contact Form */
  function addForm(formtype) {

    var formid = $(formtype);
    var emailsend = false;

    formid.find("button#submit-message").click(sendemail);

    // function validator() {

    //   var emailcheck = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    //   var othercheck = /.{4}/;
    //   var noerror = true;

    //   formid.find(".requiredfield").each(function () {

    //     var fieldname = jQuery(this).attr('name');
    //     var value = jQuery(this).val();

    //     if (fieldname == "email") {
    //       if (!emailcheck.test(value)) {
    //         jQuery(this).addClass("formerror");
    //         noerror = false;
    //       } else {
    //         jQuery(this).removeClass("formerror");
    //       }
    //     } else {
    //       if (!othercheck.test(value)) {
    //         jQuery(this).addClass("formerror");
    //         noerror = false;
    //       } else {
    //         jQuery(this).removeClass("formerror");
    //       }
    //     }
    //   })

    //   if (!noerror) {
    //     formid.find(".errormessage").fadeIn();
    //   }

    //   return noerror;
    // }

    function resetform() {
      formid.find("input").each(function () {
        jQuery(this).val("");
      })
      formid.find("textarea").val("");
      emailsend = false;
    }

    function sendemail() {
      formid.find(".successmessage").hide();
      var phpfile = "";
      if (formtype == "#form-message") {
        phpfile = "./send.php";
      }
      if (!emailsend) {
        emailsend = true;
        console.log(formid.serialize())
        formid.find(".errormessage").hide();
        formid.find(".sendingmessage").show();
        jQuery.post(phpfile, formid.serialize(), function () {
          formid.find(".sendingmessage").hide();
          formid.find(".successmessage").fadeIn();
          resetform();
        });
      }
      return false
    }
  }
})