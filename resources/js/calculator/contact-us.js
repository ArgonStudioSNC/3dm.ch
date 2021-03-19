import validate from 'jquery-validation';

// form validation
if ($("#offer-form").length > 0) {
    $("#offer-form").validate({
        rules: {
            name: {
                required: true,
                maxlength: 64,
            },
            company: {
                required: true,
                maxlength: 64,
            },
            email: {
                required: true,
                maxlength: 64,
                email: true,
            },
            competition_name: {
                required: true,
                maxlength: 64,
            },
            due_date: {
                required: true,
                date: true,
            },
            style: {
                required: true,
            },
            nb_renders: {
                required: true,
                digits: true,
                range: [1, 50],
            },
        },
        messages: {
            name: "<i class='fas fa-times-circle'></i>",
            company: "<i class='fas fa-times-circle'></i>",
            email: "<i class='fas fa-times-circle'></i>",
            competition_name: "<i class='fas fa-times-circle'></i>",
            due_date: "<i class='fas fa-times-circle'></i>",
            style: "<i class='fas fa-times-circle'></i>",
            nb_renders: "<i class='fas fa-times-circle'></i>",
        },
        submitHandler: function(form) {
            $("#submit").html('un instant...');
            $("#submit"). attr("disabled", true);
            var formData = new FormData(form);
            formData.append('contact_type', 'calculator-offer')

            axios.post("/contact-us", formData)
            .then((response)=>{
                $("#submit").html('Succès&nbsp!');
                $("#submit"). attr("disabled", false);
                fullpage_api.moveSectionDown();
            })
        }
    })
}
