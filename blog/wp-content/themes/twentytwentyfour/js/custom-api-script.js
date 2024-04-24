document.addEventListener('DOMContentLoaded', function() {
    // Ensure the DOM is fully loaded before adding event listeners
    var button = document.getElementById("fetch-api-data"); // ID of the button

    if (button) { // Ensure the button exists
        button.addEventListener("click", function() {
            fetch(customApiAjax.ajaxurl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "action=fetch_custom_api_data"
            })
            .then(response => response.json()) // Convert response to JSON
            .then(data => {
                var message = "Unknown result"; // Default message

                if (data.success) {
                    message = data.data.message; // On success, get the returned message
                } else {
                    message = "Error: " + (data.data.message || "Unknown error"); // On error
                }

                document.getElementById("api-response").innerText = message; // Display the message
            })
            .catch(error => {
                document.getElementById("api-response").innerText = "Error: " + error.message; // Handle errors
            });
        });
    }
});
