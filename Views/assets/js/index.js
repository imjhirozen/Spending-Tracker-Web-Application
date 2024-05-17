let uri = new URL(window.location.href);

if(uri['pathname'] == '/Spending-Tracker-Web-Application-main/edit')
{       
    document.querySelector("#form_edit button").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = "/Spending-Tracker-Web-Application-main/";
    });
}

if(uri['pathname'] == '/Spending-Tracker-Web-Application-main/login')
{
    document.querySelector("#login_link_reg").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = "/Spending-Tracker-Web-Application-main/registration";
    });
}

if(uri['pathname'] == '/Spending-Tracker-Web-Application-main/registration')
{
    document.querySelector("#reg_link_login").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = "/Spending-Tracker-Web-Application-main/login";
    });
    
}