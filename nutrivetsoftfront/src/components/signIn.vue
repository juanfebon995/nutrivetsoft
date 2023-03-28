<template>
    <div id="signIn_container">
        <nav id="config">
            <button>Languaje</button>
        </nav>
        <img id="img_IconVeterinarian" src="../../Media/Icons/veterinarianIcon/icons8-veterinarian-female-skin-type-1-96.png" alt="IconVeterinarian">
        <div id="cabecera">
            <h4 id="lbl_signIn">{{ lbl_signI }}</h4>
            <label id="lbl_msgWelcome">{{ lbl_msgWelcome }}</label>
        </div>
        <div id="signIn_options">
            <button id="btn_signIn_google">
                <img id="icon_google" src="../../Media/Icons/icon_google/icons8-logo-de-google-48.png" alt="iconGoogle" width="30">
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
    </div>
</template>
  
<script>
export default {
    data: () => ({
        lbl_signI: "Inicio de Sesión",
        lbl_msgWelcome: "Bienvenid@ a nuestro portal.",
        lbl_signIn_google: "Continuar con Google",
        lbl_legend: "O usa otra cuenta",
        lbl_email_address: "Correo electrónico",
        lbl_password: "Contraseña"
    })
};
</script>
  
<style>

* {
    margin: 0px;
    padding: 0px;
}

#btn_signIn_google{
    background-color: transparent;
    border: 1px solid lightgray;
    border-radius: 5px;
    display: flex;
    align-items: center;
    width: 100%;
    height: 40px;
    line-height: 60px;
}

#btn_signIn_google:hover{
    background-color: rgb(198, 194, 194);
}

#btn_signIn_google label{
    margin: 0 auto;
    margin-left: -25%;
}

#cabecera {
    margin-top: 10px;
}

#config{
    text-align: right;
    padding-right: 40px;
}

#icon_google{
    padding: 0px;
    margin: 0 auto;
    margin-top: 3px;
}

#img_IconVeterinarian{
    margin-top: 30px;
}

#lbl_signIn{
    margin: 0px;
    padding: 0px;
}

#signIn_container{
    text-align: center;
}

#signIn_options{
    margin: 0 auto;
    margin-top: 60px;
    width: 30%;
}

#lbl_legend{
    margin: 0 auto;
    margin-top: 20px;
    text-align: center;
    height: 30px;
    padding: 0;
    width: 30%;
}

#lbl_legend_child{
    margin: 0 auto;
    margin-left: 30px;
}

.form_email{
    font-size: 11px;
    font-weight: bold;
    padding-left: 1rem;
    line-height: 1.2;
    text-transform: uppercase;
    margin-bottom: 0;
}

.form_icon_container{
    text-align: left !important;
    margin-bottom: 1rem !important;
    width: 30%;
    margin: 0 auto;
    margin-top: 10px;
}

.form_container{
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
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0);
    box-shadow: inset 0 1px 2px rgba(0,0,0,0);
    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
}

.form-icon-container .form-icon-input, .form-icon-container .form-icon-label {
    padding-left: 2.5rem;
}

.linea {
  margin:0 auto;
  width:26%;    
  border-top:1px solid #999;
  position: relative;
  top:10px;
  float:left;
  }

.legend {
  margin: 0px 20px;
  font-weight:bold;
  float:left;
 }

</style>