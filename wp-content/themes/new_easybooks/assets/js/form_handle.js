$(document).ready(function () {
  // Validation rules
  var validationRules = {
    rules: {
      fullname: "required",
      email: {
        required: true,
        email: true,
      },
      phonenumber: {
        required: true,
        minlength: 9,
        maxlength: 12,
      },
      taxcode: {
        required: true,
        minlength: 6,
      },
    },
    messages: {
      fullname: "Vui lòng nhập tên!",
      email: {
        required: "Vui lòng nhập vào email",
        email: "Email sai định dạng, hãy nhập lại!",
      },
      phonenumber: {
        required: "Vui lòng nhập số điện thoại!",
        minlength: "Độ dài số điện thoại tối thiểu 9 kí tự",
        maxlength: "Độ dài số điện thoại tối đa 12 kí tự",
      },
      taxcode: {
        required: "Vui lòng nhập mã số thuế!",
        minlength: "Độ dài tối thiểu 6 kí tự",
      },
    },
  };

  // Apply validation
  $("#form_index_validate").validate(validationRules);
  $("#form_contact_validate").validate(validationRules);
});

$(document).ready(function () {
  $("#form_popup").validate({
    rules: {
      hoten: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      phonenumber: {
        required: true,
        minlength: 9,
        maxlength: 12,
      },
      taxcode: {
        required: true,
        minlength: 6,
      },
    },
    messages: {
      hoten: "Vui lòng nhập tên!",
      email: {
        required: "Vui lòng nhập vào email",
        email: "Email sai định dạng, hãy nhập lại!",
      },
      phonenumber: {
        required: "Vui lòng nhập số điện thoại!",
        minlength: "Độ dài số điện thoại tối thiểu 9 kí tự",
        maxlength: "Độ dài số điện thoại tối đa 12 kí tự",
      },
      taxcode: {
        required: "Vui lòng nhập mã số thuế!",
        minlength: "Độ dài tối thiểu 6 kí tự",
      },
    },
  });
});

$(document).ready(function () {
  $(".form-button-shortcode").on("click", function (e) {
    e.preventDefault(); // Ngăn chặn việc gửi form mặc định
    var validationRules = {
      rules: {
        hoten: {
          required: true,
        },
        email: {
          required: true,
          email: true,
        },
        phonenumber: {
          required: true,
          minlength: 9,
          maxlength: 12,
        },
        taxcode: {
          required: true,
          minlength: 6,
        },
      },
      messages: {
        hoten: "Vui lòng nhập tên!",
        email: {
          required: "Vui lòng nhập vào email",
          email: "Email sai định dạng, hãy nhập lại!",
        },
        phonenumber: {
          required: "Vui lòng nhập số điện thoại!",
          minlength: "Độ dài số điện thoại tối thiểu 9 kí tự",
          maxlength: "Độ dài số điện thoại tối đa 12 kí tự",
        },
        taxcode: {
          required: "Vui lòng nhập mã số thuế!",
          minlength: "Độ dài tối thiểu 6 kí tự",
        },
      },
    };

    // Áp dụng xác thực
    var isValid = $("#form_validate_shortcode")
      .validate(validationRules)
      .form();

    if (!isValid) {
      return;
    }

    $(".form-button-shortcode").hide();
    $(".spinner-box").show();

    var data = $("#form_validate_shortcode").serialize();
    $.ajax({
      type: "POST",
      url: formHandleUrl,
      data: data,
      success: function (response) {
        console.log(response);
        $("#form_validate_shortcode").html(response); // Cập nhật nội dung form với response từ server
      },
      error: function (xhr, status, error) {
        console.error("Lỗi: " + status + " - " + error);
      },
    });

    return false; // Ngăn chặn form gửi dữ liệu thông thường
  });
});
