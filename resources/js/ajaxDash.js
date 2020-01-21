const axiosContact = axios.create();

axiosContact.interceptors.request.use(config => {                       
    enableSpinner("#buttonContact");
    return config;
}, error => {
    disableSpinner("#buttonContact");        
    return Promise.reject(error); 
});

// interceptor para a resposta
axiosContact.interceptors.response.use(response => {                       
    disableSpinner("#buttonContact");
    return response;
}, error => {
    disableSpinner("#buttonContact");       
    return Promise.reject(error); 
});

$("form[name='formContact']").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);    
    sendContactMail(formData);  
});

async function sendContactMail(data)
{
    try {
        let response = await axiosContact.post('http://127.0.0.1:8000/api/mail/contact', data)
        $.notify({message: response.data.success},{type: 'success'});
        console.log(response);
    } catch (error) {
        let errors = error.response.data.errors;
        for (const error in errors) {
            if (errors.hasOwnProperty(error)) {
                const element = errors[error][0];          
                $.notify({message: element},{type: 'danger'});
            }
        }
    }
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

