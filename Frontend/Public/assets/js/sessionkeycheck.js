function checkSessionKey() {
    var sessionKey = getCookie("sessionKey");
    console.log(sessionKey);
    if (sessionKey === "") {
        // session key cookie not found, redirect to login page
        window.location.replace("/index2.php");
        return;
    }
    // get the expiry time of the session key cookie
    var expiryTime = getCookieExpiryTime("sessionKey");
    console.log(expiryTime);
    if (expiryTime === null) {
        // unable to determine expiry time, redirect to login page
        window.location.replace("/index2.php");
        return;
    }
    // check if the expiry time has passed
    console.log(new Date());
    if (new Date() > expiryTime) {
        // session key cookie has expired, redirect to login page
        window.location.replace("/index2.php");
        return;
    }
}

function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
    return "";
}

function getCookieExpiryTime(name) {
    var cookieValue = getCookie(name);
    if (cookieValue === "") return null;
    var parts = cookieValue.split("_");
    if (parts.length != 2) return null;
    var timestamp = parseInt(parts[1], 10);
    if (isNaN(timestamp)) return null;
    return new Date(timestamp);
}

// check if the session key cookie has expired once a minute
setInterval(checkSessionKey, 60000);

$(document).ready(function() {
    var username = getCookie("username");
    if (username !== "") {
        document.getElementById('UserEmail').innerText = username;
    }
    setTimeout(function() { checkSessionKey(); }, 500); // wait for 500 milliseconds (0.5 seconds) before calling checkSessionKey()

    // Get the login button and add a click event listener
    const loginButton = document.getElementById('login-button');
    loginButton.addEventListener('click', function() {
        // Remove the sessionKey cookie
        document.cookie = 'sessionKey=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/';

        // Redirect to a different page
        window.location.href = '/index2.php';
    });

    const SupportButton = document.getElementById('Support-button');
    SupportButton.addEventListener('click', function() {
        // Redirect to a different page
        window.location.href = '/Public/src/support.php#Support';
    });
});

