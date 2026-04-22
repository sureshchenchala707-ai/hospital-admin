<!DOCTYPE html>
<html>
<head>
    <title>AI Chat</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<h2>AI Chatbot</h2>

<div id="chatbox" style="border:1px solid #ccc; height:300px; overflow:auto; padding:10px;"></div>

<input id="message" placeholder="Type message..." />
<button onclick="sendMessage()">Send</button>

<script>

    
async function sendMessage() {
    let msg = document.getElementById("message").value;

    let res = await fetch("/chat", {
        method: "POST",
        headers: {
    "Content-Type": "application/json",
    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
},
        body: JSON.stringify({ message: msg })
    });

    let data = await res.json();

    document.getElementById("chatbox").innerHTML += 
        `<p><b>You:</b> ${msg}</p>
         <p><b>Bot:</b> ${data.reply}</p>`;
}
</script>

</body>
</html>