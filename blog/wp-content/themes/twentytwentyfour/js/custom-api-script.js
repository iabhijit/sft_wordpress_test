document.addEventListener('DOMContentLoaded', function() {
    var button = document.getElementById("fetch-api-data"); // ID of the button

    if (button) { 
        button.addEventListener("click", function() {
            fetch(customApiAjax.ajaxurl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "action=fetch_custom_api_data"
            })
            .then(response => response.json()) 
            .then(data => {
                var message = "Unknown result";

                if (data.success) {
                    message = data.data.message;
                } else {
                    message = "Error: " + (data.data.message || "Unknown error"); // On error
                }

                document.getElementById("api-response").innerText = message; 
            })
            .catch(error => {
                document.getElementById("api-response").innerText = "Error: " + error.message; 
            });
        });
    }
});
