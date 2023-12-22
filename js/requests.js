
// Function to get a card element and then send 
// the title name to another page to display images

function sendRequest(element) {
    const cardTitle = element.parentElement.querySelector('.card-title').innerText;

    // Send a GET request
    window.location.href = 'gallery-display.php?req=' + cardTitle;

    // Send a POST request
    // const formData = new FormData();
    // formData.append('req', cardTitle);

    // const xhttp = new XMLHttpRequest();
    // xhttp.onreadystatechange = function() {
    //     if (this.readyState === 4 && this.status === 200) {
    //         console.log('POST request sent successfully');
    //         window.location.href = 'gallery-display.php';
    //     }
    // };

    // // Send a POST request
    // xhttp.open('POST', 'gallery-display.php', true);
    // xhttp.send(formData);

}
