
// Function to get a card element and then send 
// the title name to another page to display images

function sendRequest(element) {
    const cardTitle = element.parentElement.querySelector('.card-title').innerText;

    document.getElementById('postForm').querySelector('[name="folderName"]').value = cardTitle;
    
    document.getElementById('postForm').submit();
}
