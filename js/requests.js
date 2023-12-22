
// Function to get a card element and then send 
// the title name to another page to display images

function sendRequest(element) {
    const cardTitle = element.parentElement.querySelector('.card-title').innerText;

    const encodedTitle = cardTitle;

    const url = 'gallery-display.php';
    const data = { request: encodedTitle };

    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if (response.ok) {
            console.log('Request sent successfully');
            window.location.href = url; // Redirect to the specified page
        } else {
            console.log('Failed to send request');
        }
    })
    .catch(error => {
        console.log('Error:', error);
    });
}
