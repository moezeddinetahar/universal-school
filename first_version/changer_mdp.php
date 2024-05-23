<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email and Password Validation</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
</head>
<style>
/* Google Fonts - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    background-image: url("/universal-school/first_version/images/hero-bg.jpg");
    background-position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
    overflow-y: scroll;

}

html {
    height: 100%;
    overflow: hidden;
}

#change_mdp {
    padding-top: 10%;
    display: flex;
    align-items: center;
    justify-content: center;

}

.container {
    position: relative;
    max-width: 370px;
    width: 100%;
    padding: 25px;
    border-radius: 8px;
    background-color: #fff;
}

.header_mdp {
    font-size: 22px;
    font-weight: 600;
    color: #333;
}

.container form {
    margin-top: 30px;
}

form .field {
    margin-bottom: 20px;
}

form .input-field-mdp {
    position: relative;
    height: 55px;
    width: 100%;
}

.input-field-mdp input {
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    border-radius: 8px;
    padding: 0 15px;
    border: 1px solid #d1d1d1;
}

.invalid input {
    border-color: #d93025;
}

.input-field-mdp .show-hide {
    position: absolute;
    right: 13px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    color: #919191;
    cursor: pointer;
    padding: 3px;
}

.field .error {
    display: flex;
    align-items: center;
    margin-top: 6px;
    color: #d93025;
    font-size: 13px;
    display: none;
}

.invalid .error {
    display: flex;
}

.error .error-icon {
    margin-right: 6px;
    font-size: 15px;
}

.create-password .error {
    align-items: flex-start;
}

.create-password .error-icon {
    margin-top: 4px;
}

.button_mdp {
    margin: 25px 0 6px;
}

.button_mdp input {
    color: #fff;
    font-size: 16px;
    font-weight: 400;
    background-color: #4070f4;
    cursor: pointer;
    transition: all 0.3s ease;
}

.button_mdp input:hover {
    background-color: #0e4bf1;
}
</style>

<body>

    <?php include 'sidebar_home_page.php' ?>
    <div id="change_mdp">
        <div class="container">
            <div class="header_mdp">Signup</div>
            <form action="">
                <div class="field email-field">
                    <div class="input-field-mdp">
                        <input type="email" placeholder="Enter your email" class="email" />
                    </div>
                    <span class="error email-error">
                        <i class="bx bx-error-circle error-icon"></i>
                        <p class="error-text">Please enter a valid email</p>
                    </span>
                </div>
                <div class="field create-password">
                    <div class="input-field-mdp">
                        <input type="password" placeholder="Create password" class="password" />
                        <i class="bx bx-hide show-hide"></i>
                    </div>
                    <span class="error password-error">
                        <i class="bx bx-error-circle error-icon"></i>
                        <p class="error-text">
                            Please enter atleast 8 charatcer with number, symbol, small and
                            capital letter.
                        </p>
                    </span>
                </div>
                <div class="field confirm-password">
                    <div class="input-field-mdp">
                        <input type="password" placeholder="Confirm password" class="cPassword" />
                        <i class="bx bx-hide show-hide"></i>
                    </div>
                    <span class="error cPassword-error">
                        <i class="bx bx-error-circle error-icon"></i>
                        <p class="error-text">Password don't match</p>
                    </span>
                </div>
                <div class="input-field-mdp button_mdp">
                    <input type="submit" value="Submit Now" />
                </div>
            </form>
        </div>
    </div>
    <?php include 'footer.php'?>

    <!-- JavaScript -->
    <script>
    const form = document.querySelector("form"),
        emailField = form.querySelector(".email-field"),
        emailInput = emailField.querySelector(".email"),
        passField = form.querySelector(".create-password"),
        passInput = passField.querySelector(".password"),
        cPassField = form.querySelector(".confirm-password"),
        cPassInput = cPassField.querySelector(".cPassword");

    // Email Validtion
    function checkEmail() {
        const emaiPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!emailInput.value.match(emaiPattern)) {
            return emailField.classList.add(
            "invalid"); //adding invalid class if email value do not mathced with email pattern
        }
        emailField.classList.remove("invalid"); //removing invalid class if email value matched with emaiPattern
    }

    // Hide and show password
    const eyeIcons = document.querySelectorAll(".show-hide");

    eyeIcons.forEach((eyeIcon) => {
        eyeIcon.addEventListener("click", () => {
            const pInput = eyeIcon.parentElement.querySelector(
            "input"); //getting parent element of eye icon and selecting the password input
            if (pInput.type === "password") {
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return (pInput.type = "text");
            }
            eyeIcon.classList.replace("bx-show", "bx-hide");
            pInput.type = "password";
        });
    });

    // Password Validation
    function createPass() {
        const passPattern =
            /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

        if (!passInput.value.match(passPattern)) {
            return passField.classList.add(
            "invalid"); //adding invalid class if password input value do not match with passPattern
        }
        passField.classList.remove("invalid"); //removing invalid class if password input value matched with passPattern
    }

    // Confirm Password Validtion
    function confirmPass() {
        if (passInput.value !== cPassInput.value || cPassInput.value === "") {
            return cPassField.classList.add("invalid");
        }
        cPassField.classList.remove("invalid");
    }

    // Calling Funtion on Form Sumbit
    form.addEventListener("submit", (e) => {
        e.preventDefault(); //preventing form submitting
        checkEmail();
        createPass();
        confirmPass();

        //calling function on key up
        emailInput.addEventListener("keyup", checkEmail);
        passInput.addEventListener("keyup", createPass);
        cPassInput.addEventListener("keyup", confirmPass);

        if (
            !emailField.classList.contains("invalid") &&
            !passField.classList.contains("invalid") &&
            !cPassField.classList.contains("invalid")
        ) {
            location.href = form.getAttribute("action");
        }
    });
    </script>
</body>

</html>