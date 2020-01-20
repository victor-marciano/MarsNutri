const alertify = require('alertifyjs');

$("form[name='formLogin']").submit(function (e) {
    e.preventDefault();    
    let formData = new FormData(this);       
    doLogin(formData);    
});

$("form[name='formCadastro']").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    doCadastro(formData);  
});

async function doLogin(data)
{
    try {                
        let response = await login(data);    
        alertify.success('Usuário autenticado, Bem Vindo!'); 
        window.location.href = '/home'
    } catch (error) {   
        let errors = error.response.data.errors;
        for (const error in errors) {
            if (errors.hasOwnProperty(error)) {                               
                alertify.error(errors[error][0]);
            }
        }
    }
}

async function doCadastro(data)
{
    try {                
        let response = await cadastro(data);    
        alertify.success(response.data.success); 
    } catch (error) {   
        let errors = error.response.data.errors;
        for (const error in errors) {
            if (errors.hasOwnProperty(error)) {                               
                alertify.error(errors[error][0]);
            }
        }
    }
}

function cadastro(data)
{
    // criando a instância axios para cadastro
   const axiosCadastro = axios.create();   
   let button = "#buttonCadastro";
   // interceptor para a requisição
   axiosCadastro.interceptors.request.use(config => {                       
        enableSpinner(button);
        return config;
   }, error => {
        disableSpinner(button);        
        return Promise.reject(error); 
   });
   
   // interceptor para a resposta
   axiosCadastro.interceptors.response.use(response => {                       
        disableSpinner(button);
        return response;
   }, error => {
        disableSpinner(button);       
        return Promise.reject(error); 
   });

   return axiosCadastro({
       url: 'http://127.0.0.1:8000/api/register',
       method: 'post',
       data: data,
       headers: {
           "Content-type": "multipart/form-data"
       } 
   });
}

function login(data)
{
    // criando a instância axios para cadastro
   const axiosLogin = axios.create();  
   let button = "#buttonLogin";  
   // interceptor para a requisição
   axiosLogin.interceptors.request.use(config => {                       
        enableSpinner(button);
        return config;
   }, error => {
        disableSpinner(button);        
        return Promise.reject(error); 
   });
   
   // interceptor para a resposta
   axiosLogin.interceptors.response.use(response => {                       
        disableSpinner(button);
        return response;
   }, error => {
        disableSpinner(button);       
        return Promise.reject(error); 
   });

   return axiosLogin({
       url: 'http://127.0.0.1:8000/login',
       method: 'post',
       data: data,
       headers: {
           "Content-type": "multipart/form-data"
       } 
   });
}

// ativa o spinner de carregamento
function enableSpinner(button)
{   
    $(button).attr('disabled', true);                
    $(button).html(
        '<div class="spinner-border spinner-border-sm" id="spinnerCadastro" role="status">' +
        '<span class="sr-only">Processando</span></div>&nbsp;Processando'    
    );
}

// desativa o spinner de carregamento
function disableSpinner(button)
{    
    $(button).attr('disabled', false);
    $(button).html('Cadastrar');
}