async function test_signup(username, password, email) {
    try {
        const formData = new FormData();
        formData.append('username', username);
        formData.append('password', password);
        formData.append('email', email);

        const response = await fetch('/includes/signup.inc.php', {
            method: 'POST',
            body: formData
        });

        const data = await response.json();
        
        console.log('Signup response:', data);
        
        if (data.success) {
            console.log('✅ Signup successful!');
            // Redirect or handle success
            // window.location.href = '/';
        } else {
            console.error('❌ Signup failed:', data.error);
            // Handle specific errors
            switch(data.error) {
                case 'INVALID_DATA':
                    alert('Please provide valid username, password, and email');
                    break;
                case 'USER_EXISTS':
                    alert('Username or email already exists');
                    break;
                case 'DATABASE_ERROR':
                case 'REGISTRATION_FAILED':
                    alert('Server error. Please try again later');
                    break;
                default:
                    alert('Signup failed: ' + data.error);
            }
        }
        
        return data;
    } catch (error) {
        console.error('Network error:', error);
        alert('Could not connect to server');
        return { success: false, error: 'NETWORK_ERROR' };
    }
}

// Test the function (uncomment to test)
 test_signup('testuser123', 'password123', 'test@example.com');