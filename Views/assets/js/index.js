let uri = new URL(window.location.href);

if(uri['pathname'] == '/Spending-Tracker-Web-Application/index.php/edit')
{       
    document.querySelector("#form_edit button").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = "/Spending-Tracker-Web-Application/index.php/";
    });
}

if(uri['pathname'] == '/Spending-Tracker-Web-Application/index.php/login')
{
    document.querySelector("#login_link_reg").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = "/Spending-Tracker-Web-Application/index.php/registration";
    });
}

if(uri['pathname'] == '/Spending-Tracker-Web-Application/index.php/registration')
{
    document.querySelector("#reg_link_login").addEventListener('click', e => {
        e.preventDefault();
        window.location.href = "/Spending-Tracker-Web-Application/index.php/login";
    });
    
}