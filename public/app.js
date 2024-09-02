document.getElementById('donation-form').addEventListener('submit', async function (e) {
    e.preventDefault();

    const title = document.getElementById('title').value;
    const author = document.getElementById('author').value;
    const isbn = document.getElementById('isbn').value;
    const description = document.getElementById('description').value;

    const response = await fetch('/backend/donate.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            title: title,
            author: author,
            isbn: isbn,
            description: description
        })
    });

    const result = await response.json();
    const message = document.getElementById('response-message');
    if (result.success) {
        message.textContent = 'Thank you for donating the book!';
        message.style.color = 'green';
    } else {
        message.textContent = 'There was an error processing your donation.';
        message.style.color = 'red';
    }
});
