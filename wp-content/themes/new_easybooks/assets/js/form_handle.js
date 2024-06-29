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
