<template>
    <div id="signIn_container">
        <nav id="config">
            <button id="btn_languaje" v-on:click="change_languaje(this.lang)">
                <img src="../../Media/Icons/icon_google/icons8-spain-48.png" alt="Spanish" width="30" id="btn_spanish" hidden>
                <img src="../../Media/Icons/icon_google/icons8-great-britain-48.png" alt="English" width="30" id="btn_english">
                <p>{{ icon_text }}</p>
            </button>
        </nav>
        <img id="img_IconVeterinarian" src="../../Media/Icons/icon_google/icons8-firebase-96.png" alt="IconVeterinarian">
        <div id="cabecera">
            <h4 id="lbl_signIn">{{ lbl_signI }}</h4>
            <label id="lbl_msgWelcome">{{ lbl_msgWelcome }}</label>
        </div>
        <div id="signIn_options">
            <button id="btn_signIn_google">
                <img id="icon_google" src="../../Media/Icons/icon_google/icons8-logo-de-google-48.png" alt="iconGoogle"
                    width="30">
                <label>{{ lbl_signIn_google }}</label>
            </button>
        </div>
        <div id="lbl_legend">
            <div id="lbl_legend_child">
                <div class="linea">&nbsp;</div>
                <div class="legend">{{ lbl_legend }}</div>
                <div class="linea">&nbsp;</div>
            </div>
        </div>
        <div class="form_icon_container">
            <label class="form_email" for="email">{{ lbl_email_address }}</label>
            <div class="form_container">
                <input class="form-control form-icon-input" id="email" type="email" placeholder="name@example.com">
            </div>
        </div>

        <div class="form_icon_container">
            <label class="form_email" for="email">{{ lbl_password }}</label>
            <div class="form_container">
                <input class="form-control form-icon-input" id="email" type="password" placeholder="Password">
            </div>
        </div>
        <div id="password_config">
            <div id="password_config_left">
                <input type="checkbox" id="chk_remember_password"><label id="txt_remember_password">{{ lbl_remember_password
                }}</label>
            </div>
            <div id="password_config_right">
                <a href="" id="btn_forgot_password">{{ lbl_forgot_your_password }}</a>
            </div>
        </div>
        <button id="btn_login">{{ lbl_login }}</button>
    </div>
</template>
  
<script>
export default {
    data: () => ({
        icon_text: "Inglés",
        lang: "es",
        lbl_signI: "Inicio de Sesión",
        lbl_msgWelcome: "Bienvenid@ a nuestro portal.",
        lbl_signIn_google: "Continuar con Google",
        lbl_legend: "O usa otra cuenta",
        lbl_email_address: "Correo electrónico",
        lbl_password: "Contraseña",
        lbl_remember_password: "Recordar contraseña",
        lbl_forgot_your_password: "¿Olvidaste tu contraseña?",
        lbl_login: "Iniciar Sesión"
    }),
    methods: {
        change_languaje(lang) {

            if (lang == "en") {
                document.getElementById("btn_spanish").hidden = false;
                document.getElementById("btn_english").hidden = true;
                this.icon_text = "Spanish";
                this.lang = "es";
                this.lbl_signI = "Login";
                this.lbl_msgWelcome = "Welcome to our portal.";
                this.lbl_signIn_google = "Continue with Google";
                this.lbl_legend = "Or use other account";
                this.lbl_email_address = "Email";
                this.lbl_password = "Password";
                this.lbl_remember_password = "Remember password";
                this.lbl_forgot_your_password = "¿Forgot your password?";
                this.lbl_login = "Login"

            }else if (lang == "es") {
                document.getElementById("btn_spanish").hidden = true;
                document.getElementById("btn_english").hidden = false;
                this.icon_text = "Inglés";
                this.lang = "en";
                this.lbl_signI = "Inicio de Sesión";
                this.lbl_msgWelcome = "Bienvenid@ a nuestro portal.";
                this.lbl_signIn_google = "Continuar con Google";
                this.lbl_legend = "O usa otra cuenta";
                this.lbl_email_address = "Correo electrónico";
                this.lbl_password = "Contraseña";
                this.lbl_remember_password = "Recordar contraseña";
                this.lbl_forgot_your_password = "¿Olvidaste tu contraseña?";
                this.lbl_login = "Iniciar Sesión";
            }
        }
    }
};
</script>
  
<style>
* {
    margin: 0px;
    padding: 0px;
}

#btn_signIn_google {
    background-color: transparent;
    border: 1px solid lightgray;
    border-radius: 5px;
    display: flex;
    align-items: center;
    width: 100%;
    height: 40px;
    line-height: 60px;
}

#btn_signIn_google:hover {
    background-color: rgb(198, 194, 194);
}

#btn_signIn_google label {
    margin: 0 auto;
    margin-left: -25%;
}

#btn_login {
    background-color: rgb(4, 100, 195);
    border: none;
    border-radius: 8px;
    color: whitesmoke;
    font-size: 16px;
    margin-top: 20px;
    padding: 10px 0;
    width: 20%;
}

#btn_login:hover {
    background-color: rgb(59, 71, 113);
}

#btn_languaje{
    border: none;
    border-radius: 60px;
    background-color: transparent;
}

#cabecera {
    margin-top: 10px;
}

#config {
    text-align: right;
    padding-right: 40px;
}

#icon_google {
    padding: 0px;
    margin: 0 auto;
    margin-top: 3px;
}

#img_IconVeterinarian {
    margin-top: 30px;
}

#lbl_signIn {
    margin: 0px;
    padding: 0px;
}

#signIn_container {
    text-align: center;
}

#signIn_options {
    margin: 0 auto;
    margin-top: 60px;
    width: 30%;
}

#lbl_legend {
    margin: 0 auto;
    margin-top: 20px;
    text-align: center;
    height: 30px;
    padding: 0;
    width: 30%;
}

#lbl_legend_child {
    margin: 0 auto;
    margin-left: 30px;
}

#password_config {
    display: grid;
    grid-template-columns: auto auto auto;
    margin: 0 auto;
    width: 30%;
}

#password_config_left {
    font-size: 14px;
    text-align: left;
    height: 30px;
    line-height: 20px;
    padding-left: 5px;
}

#password_config_right {
    font-size: 14px;
    text-align: right;
    width: 108%;
}

#txt_remember_password {
    margin-left: 24px;
}

.form_email {
    font-size: 11px;
    font-weight: bold;
    padding-left: 1rem;
    line-height: 1.2;
    text-transform: uppercase;
    margin-bottom: 0;
}

.form_icon_container {
    text-align: left !important;
    margin-bottom: 1rem !important;
    width: 30%;
    margin: 0 auto;
    margin-top: 10px;
}

.form_container {
    position: relative;
    border: 1px solid lightgray;
    border-radius: 5px;
    margin-top: 5px;
}

.form-control {
    display: block;
    width: 100%;
    padding: .5rem 1rem;
    font-size: 0.8rem;
    font-weight: 600;
    line-height: 1.49;
    color: var(--phoenix-gray-900);
    background-color: var(--phoenix-input-bg);
    background-clip: padding-box;
    border: 1px solid var(--phoenix-input-border-color);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: .375rem;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0);
    -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    -o-transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
}

.form-icon-container .form-icon-input,
.form-icon-container .form-icon-label {
    padding-left: 2.5rem;
}

.linea {
    margin: 0 auto;
    width: 26%;
    border-top: 1px solid #999;
    position: relative;
    top: 10px;
    float: left;
}

.legend {
    margin: 0px 10px;
    font-weight: bold;
    float: left;
}

input[type=checkbox] {
    position: absolute;
    cursor: pointer;
}

input[type=checkbox]:before {
    content: "";
    display: block;
    position: absolute;
    width: 12px;
    height: 12px;
    top: 0;
    left: 0;
    border: 2px solid #555555;
    border-radius: 3px;
    background-color: white;
}

input[type=checkbox]:checked:after {
    content: "";
    display: block;
    width: 3px;
    height: 6px;
    border: solid black;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    position: absolute;
    top: 2px;
    left: 6px;
}

/** Display configuration (Mobile) */
@media only screen and (max-width: 400px) {
    body {
        background-color: whitesmoke;
    }

    #btn_signIn_google:hover {
        background-color: rgb(198, 194, 194);
    }

    #btn_signIn_google label {
        margin: 0 auto;
        margin-left: -10%;
    }

    #btn_login {
        background-color: rgb(4, 100, 195);
        border: none;
        border-radius: 8px;
        color: whitesmoke;
        font-size: 13px;
        margin-top: 15px;
        padding: 7px 0;
        width: 40%;
    }

    #btn_login:hover {
        background-color: rgb(59, 71, 113);
    }

    #signIn_container {
        text-align: center;
    }

    #signIn_options {
        margin: 0 auto;
        margin-top: 60px;
        width: 60%;
    }

    #lbl_legend {
        margin: 0 auto;
        margin-top: 20px;
        text-align: center;
        height: 30px;
        padding: 0;
        width: 80%;
    }

    #lbl_legend_child {
        margin: 0 auto;
        margin-left: 30px;
    }

    #password_config {
        margin: 0 auto;
        width: 70%;
    }

    #password_config_left {
        font-size: 10px;
        text-align: left;
        height: 30px;
        line-height: 20px;
        padding-left: 5px;
    }

    #password_config_right {
        font-size: 10px;
        text-align: right;
        width: 108%;
    }

    .linea {
        margin: 0 auto;
        width: 21%;
        border-top: 1px solid #999;
        position: relative;
        top: 10px;
        float: left;
    }

    .legend {
        margin: 0px 3px;
        font-weight: bold;
        float: left;
    }

    .form_email {
        font-size: 11px;
        font-weight: bold;
        padding-left: 1rem;
        line-height: 1.2;
        text-transform: uppercase;
        margin-bottom: 0;
    }

    .form_icon_container {
        text-align: left !important;
        margin-bottom: 1rem !important;
        width: 60%;
        margin: 0 auto;
        margin-top: 10px;
    }

    .form_container {
        position: relative;
        border: 1px solid lightgray;
        border-radius: 5px;
        margin-top: 5px;
    }

    .form-control {
        display: block;
        width: 85%;
        padding: .5rem 1rem;
        font-size: 0.8rem;
        font-weight: 600;
        line-height: 1.49;
        color: var(--phoenix-gray-900);
        background-color: var(--phoenix-input-bg);
        background-clip: padding-box;
        border: 1px solid var(--phoenix-input-border-color);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: .375rem;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0);
        -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        -o-transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    }

    .form-icon-container .form-icon-input,
    .form-icon-container .form-icon-label {
        padding-left: 2.5rem;
    }
}
</style>