//  Validate comment form
jQuery(document).ready(function ($) {

    $.validator.methods.email = function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9][a-zA-Z0-9-]*\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(value);
    };

    $.validator.addMethod('nonEmptyString', function (value, element) {
        return this.optional(element) || /\S/.test(value);
    }, 'Поле не може бути порожнім');

    $('#commentform').validate({
        errorElement: 'span',
        rules: {
            author: {
                nonEmptyString: true,
            },

            email: {
                required: true,
                email: true,
            },
            comment: {
                nonEmptyString: true,
            },
        },

        messages: {
            author: 'Поле не може бути порожнім',
            email: {
                required: 'Поле не може бути порожнім',
                email: 'Введіть правильний email',
            },
            comment: 'Поле не може бути порожнім',
        },
    });
});
