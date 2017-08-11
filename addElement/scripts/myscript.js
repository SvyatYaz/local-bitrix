$(document).ready(function () {
    $("#valid").validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 20
            }
        },
        // massages: {
        //     name: {
        //         required: "Поле обязательно для ввода",
        //         minlength: "Минимальная длина 2",
        //         maxlength: "Максимальная длина 20"
        //     }
        //
        // },
        invalidHandler: function(event, validator) {
            $(".error-box").text("Исправьте пожалуйста все ошибки.");
        }
    });
});
