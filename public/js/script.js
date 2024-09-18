$(document).ready(function () {
    let currentSlide = 0;
    const slides = [
        "img/bg2.jpg",
        "img/bg3.jpg",
        "img/bg4.jpg",
        "img/bg5.jpg",
    ];

    let liens = [href=
        "detail/8",
        "detail/14",
        "detail/20"
    ];
    let index = 0;

    function changerHref() {
        // Changer le href avec le prochain lien du tableau
        $("#monLien").attr("href", liens[index]);

        // Passer au lien suivant
        index = (index + 1) % liens.length;
    }

    function showNextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        const banniere = $("#banniere");

        // Ajoutez la classe 'fade-out' pour déclencher la transition
        banniere.addClass("fade-out");

        setTimeout(function () {
            // Change l'image après la transition
            banniere.css("background-image", "url('" + slides[currentSlide] + "')");

            // Retire la classe 'fade-out' pour déclencher la transition de fade-in
            banniere.removeClass("fade-out");
        }, 700); // Attend la fin de la transition de fade-out (500 ms)
    }

    // Changez d'image et liens toutes les 3 secondes
    setInterval(showNextSlide, 3000);
    setInterval(changerHref, 3000);

    // Exécutez showNextSlide une fois au chargement de la page pour afficher la première image
    $(window).on("load", showNextSlide);

    function closeFlashMessage(button) {
        // Trouver le parent div du bouton
        var flashMessage = $(button).closest('.flash-message');

        // Masquer le message flash
        flashMessage.css("display", "none");
    }

    
    // Function to validate and highlight the required fields
    function validateField(input) {
        var inputValue = input.val().trim();
        var errorMessage = "";

        // Check if the field is empty
        if (inputValue === "") {
            errorMessage = "Ce champ est obligatoire";
        }

        // Validation for Name
        else if (input.attr("name") === "name") {
            if (!/^[a-zA-Z\s]+$/.test(inputValue)) {
                errorMessage = "Le nom ne doit contenir que des lettres et des espaces";
            }
        }

        // Validation for Email
        else if (input.attr("name") === "email") {
            validateField($('#email_confirmation'))
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(inputValue)) {
                errorMessage = "Veuillez entrer une adresse e-mail valide";
            }
        }
        // Validation for Password Confirmation
        else if (input.attr("name") === "email_confirmation") {
            var EmailInput = $("#email").val().trim();
            if (inputValue !== EmailInput) {
                errorMessage = "Les adresse mail ne correspondent pas";
            }
        }

        // Validation for Password
        else if (input.attr("name") === "password") {
            validateField($('#password_confirmation'))
            if (!/^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/.test(inputValue)) {
                errorMessage = "Le mot de passe doit contenir au moins 8 caractères, y compris au moins un chiffre";
            }
        }

        // Validation for Password Confirmation
        else if (input.attr("name") === "password_confirmation") {
            var passwordInput = $("#password").val().trim();
            if (inputValue !== passwordInput) {
                errorMessage = "Les mots de passe ne correspondent pas";
            }
        }

        // Common validation logic
        if (errorMessage !== "") {
            input.addClass("error-input");
            input.parent().find(".input-error").text(errorMessage).show();
        } else {
            resetField(input);
        }
    }

    function resetField(input) {
        input.removeClass("error-input");
        input.parent().find(".input-error").text("").hide();
    }

    // Handle focus event
    $(".input input").focus(function () {
        resetField($(this));
    });

    // Handle blur event
    $(".input input").blur(function () {
        validateField($(this));
    });


    $('.imagecliquable img').on('click', function () {
        //on  Récupére le chemin de l'image
        var imagePath = $(this).attr('src');

        // on Met à jour l'image principale
        $('#mainImage').attr('src', imagePath);

        // Flouter l'image cliquée
        $('.imagecliquable img').removeClass('image-active');
        $(this).addClass('image-active');
    });

        $('.dropdown-toggle').on('click', function () {
            $(this).next('.dropdown-menu').toggleClass('show');
        });

        var navbar= $('#myHeader');
        $(window).scroll(function () {
            if ($(this).scrollTop() <= 100) {
                navbar.removeClass('scroll');
            } else {
                navbar.addClass('scroll');
            }
        })


});