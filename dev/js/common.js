jQuery(document).ready(function ($) {

    $('.section-form form').submit(function () {
        const email = $('input[type="email"]')
        const name = $('input[name="c_name"]')
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        let emailVal = email.val()
        let nameVal = name.val()
        const containsNumber = /\d/.test(nameVal);

        if (containsNumber) {
            name.addClass('error')
            name.parent().append('<p class="error-message">Поле не повинно мати число!</p>')
            return false;
        }

        if (emailVal === '') {
            email.addClass('error')
            email.parent().append('<p class="error-message">Це поле є обов`язковим!</p>')
            return false;
        }

        if (!emailRegex.test(emailVal)) {
            email.addClass('error')
            email.parent().append('<p class="error-message">Не вірний формат E-mail!</p>')
            return false;
        }
    })

    $('input').focus(function () {
        $(this).removeClass('error')
        $(this).parent().find('.error-message').remove()
    })

})