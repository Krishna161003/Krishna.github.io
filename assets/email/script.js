function sendEmail() {
    var to = document.getElementById("to").value; // Predefined email address
    var senderName = document.getElementById("senderName").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;

    // Basic validation
    if (!senderName || !subject || !message) {
        document.getElementById("status").innerHTML = "Please fill in all fields.";
        return;
    }

    // Send data to the server using an XMLHttpRequest
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "sendEmail.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("status").innerHTML = xhr.responseText;
        }
    };

    // Include senderName in the data sent to the server
    var data = "to=" + encodeURIComponent(to) + "&senderName=" + encodeURIComponent(senderName) + "&subject=" + encodeURIComponent(subject) + "&message=" + encodeURIComponent(message);
    xhr.send(data);
}
