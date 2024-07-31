document.getElementById('form').addEventListener('submit', async function(event) {
    event.preventDefault()
    const formData = new FormData(this);
  


    try {
        const response = await fetch('/user', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        });

        if (!response.ok) {
            const errors = await response.json();
            console.log(errors)
        } else {
            // Handle successful response
            window.location.href = '/';
        }
    } catch (error) {
        console.error('Error:', error);
    }
});
