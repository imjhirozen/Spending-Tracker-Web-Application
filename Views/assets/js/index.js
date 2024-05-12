let uri = new URL(window.location.href);

if(uri['pathname'] == '/edit')
{       
    document.querySelector("#form_edit button").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = "/";
    });
}

if(uri['pathname'] == '/login')
{
    document.querySelector("#login_link_reg").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = "/registration";
    });
}

if(uri['pathname'] == '/registration')
{
    document.querySelector("#reg_link_login").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = "/login";
    });
    
}