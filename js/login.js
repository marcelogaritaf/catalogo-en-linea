//llamar a los botones para que hagan las funciones 
document.getElementById("btn-registro").addEventListener("click", registrar);
document.getElementById("btn-inicio").addEventListener("click", iniciar);

window.addEventListener("resize", ancho);

//variables 
var formulario_login = document.querySelector(".formulario-login");
var formulario_resgitro = document.querySelector(".formulario-registro");
var contenedor_login_registro = document.querySelector(".contenedor-login-registro");
var caja_login = document.querySelector(".caja-login");
var caja_registro = document.querySelector(".caja-registro");

function ancho(){
    if(window.innerWidth > 850){
        caja_login.style.display = "block";
        caja_registro.style.display = "block";
    }else{
        caja_registro.style.display = "block";
        caja_registro.style.opacity = "1";
        caja_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_resgitro.style.display = "none";
        contenedor_login_registro.style.left = "0px";
    }
}
ancho();
function registrar(){
    if(window.innerWidth > 850){
        formulario_resgitro.style.display = "block";
        contenedor_login_registro.style.left = "410px";
        formulario_login.style.display = "none";
        caja_registro.style.opacity = "0";
        caja_login.style.opacity = "1";
    }else{
        formulario_resgitro.style.display = "block";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "none";
        caja_registro.style.display = "none";
        caja_login.style.display = "block";
        caja_login.style.opacity = "1";
    }
}
ancho();
function iniciar(){
    if(window.innerWidth > 850){
        formulario_resgitro.style.display = "none";
        contenedor_login_registro.style.left = "10px";
        formulario_login.style.display = "block";
        caja_registro.style.opacity = "1";
        caja_login.style.opacity = "0";
    }else{
        formulario_resgitro.style.display = "none";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "block";
        caja_registro.style.display = "block";
        caja_login.style.display = "none";
    }
}