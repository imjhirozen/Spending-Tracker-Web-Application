let uri = new URL(window.location.href);

let xampp_index = "/index.php";
if(uri['port'] == "8080") xampp_index = "";

let url = "/Spending-Tracker-Web-Application/" + xampp_index;

if(uri['pathname'] == url + 'edit')
{       
    document.querySelector("#form_edit button").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = url + "";
    });
}

if(uri['pathname'] ==  url + 'login')
{
    document.querySelector("#login_link_reg").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = url + "registration";
    });
}

if(uri['pathname'] ==  url + 'registration')
{
    document.querySelector("#reg_link_login").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = url + "login";
    });
    
}