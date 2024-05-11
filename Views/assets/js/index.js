let uri = new URL(window.location.href);

if(uri['pathname'] == '/edit')
document.querySelector("#form_edit button").addEventListener('click', e => {
    e.preventDefault();
    window.location.href = "/";
});