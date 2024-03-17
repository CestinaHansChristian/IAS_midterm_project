
const form_login = document.getElementById('form_login');

function create_create_btn() {
    var username = document.getElementById('create_username').value;
    var password = document.getElementById('create_password').value;
    if(!username || !password) {
        alert('Must not contain null characters')
    } else {
        const xHTTP = new XMLHttpRequest();
        xHTTP.onreadystatechange = function() {
            document.getElementById('status').innerHTML = this.responseText
        }
        xHTTP.open("POST","../script_pages/scripts/createAcc.php",false);
        xHTTP.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xHTTP.send("user="+username+"&pass="+password);
        window.location = "../script_pages/login.php";
    }
}

function login_btn() {
    var username = document.getElementById('login_username').value;
    var password = document.getElementById('login_password').value;
    if(!username && !password) {
        alert('Must not contain null characters')
    } else {
        const xHTTP = new XMLHttpRequest();
        xHTTP.onreadystatechange = function() {
            if(this.responseText) {
                window.location = "../script_pages/message.php";
            } else {
                document.getElementById('status').innerHTML = this.responseText;
            }
        }
        xHTTP.open("POST","../script_pages/scripts/loginAcc.php",false);
        xHTTP.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xHTTP.send("user="+username+"&pass="+password);
    }
}

function login_create_btn() {
    window.location = "../script_pages/create.php"
}

form_login.addEventListener('submit',(event)=>{
    event.preventDefault();
    form_login.reset();
});

function send_message() {

}

function contact_list() {
    const xHTTP = new XMLHttpRequest();
    xHTTP.onreadystatechange = function() {
            
    }
    xHTTP.open("GET","../script_pages/scripts/loginAcc.php",false);
    xHTTP.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xHTTP.send("user="+username+"&pass="+password);
}

// message logout button
function logout_btn() {
    const xHTTP = new XMLHttpRequest();

    xHTTP.open("POST","");
    
}