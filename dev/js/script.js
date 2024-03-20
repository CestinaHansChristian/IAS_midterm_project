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
    if(!username || !password) {
        alert('Must not contain null characters')
    } else {
        const xHTTP = new XMLHttpRequest();
        xHTTP.onreadystatechange = function() {
            if(this.responseText) {
                window.location = "../script_pages/message.php";
            } else {
                document.getElementById('status').innerHTML = "Uh oh, it seems like this account is an 👾";
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

// var form_login = document.getElementById('form_login');
// form_login.addEventListener('submit',(event)=>{
//     event.preventDefault();
//     form_login.reset();
// });


// get users list
function contact_list() {
    const xHTTP = new XMLHttpRequest();
    xHTTP.onload = function() {
        document.getElementById("contact_list").innerHTML = this.responseText;
    }
    xHTTP.open("GET","../script_pages/scripts/getUsers.php",false);
    xHTTP.send();
    retrieve_msg();
    display_message();
}

// message logout button
function logout_btn(logout_btn_is_clicked) {
    const xHTTP = new XMLHttpRequest();
    xHTTP.onload = function() {
            if(this.responseText) {
                window.location = "../script_pages/login.php";
            }
    }
    xHTTP.open("POST","../script_pages/scripts/logout_btn.php",false);
    xHTTP.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xHTTP.send("logout_btn_is_clicked="+logout_btn_is_clicked);
}

// send message
function send_message() {
    const xHTTP = new XMLHttpRequest();
    const message_field = document.getElementById('send_message_field').value;
    const reciever_msg = document.querySelector("input[id='userId']:checked")
    document.getElementById('status').innerHTML = '';
    if(!message_field && !reciever_msg) {
        document.getElementById('status').innerHTML = "Please select a recipient"
    } else {
        let reciever_msg_id = reciever_msg.value;
        if(reciever_msg != null) {
            console.log(reciever_msg_id);
            xHTTP.onload = function() {
                document.getElementById('status').innerHTML = this.responseText;
            }
            xHTTP.open('POST',"../script_pages/scripts/sendMsg.php",false);
            xHTTP.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xHTTP.send("message_field="+message_field+ "&sent_to=" +reciever_msg_id);
            // message_field.reset();
            console.log("sent");
        }
    }
}

function display_message() {
    const xHTTP = new XMLHttpRequest;
    xHTTP.onreadystatechange = function() {
        document.getElementById('sent_message').innerHTML = this.responseText;
    }
    xHTTP.open('GET','../script_pages/scripts/displayMsg.php',true);
    xHTTP.send();
}

function retrieve_msg() {
    const xHTTP = new XMLHttpRequest;
    xHTTP.onreadystatechange = function() {
        document.getElementById('message_sent').innerHTML = this.responseText;
    }
    xHTTP.open('GET','../script_pages/scripts/retrieveMsg.php',true);
    xHTTP.send();
}