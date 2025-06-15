

document.addEventListener("DOMContentLoaded", () => {
    const loginBtn = document.getElementById('loginBtn');
    
    if (loginBtn) {
        loginBtn.addEventListener('click', function (e) {
            e.preventDefault();

            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();

            if (!email || !password) {
                alert("Please fill in both fields.");
                return;
            }

            fetch('controllers/UserController.php?action=login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    email: email,
                    password: password
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("✅ Login successful! Welcome " + data.user.name + " 💖");
                    console.log("User data:", data.user);
                } else {
                    alert("❌ Login failed: " + (data.message || "Unknown error"));
                }
            })
            .catch(error => {
                console.error("🚨 Error during login:", error);
                alert("Something went wrong. Please try again.");
            });
        });
    }
});
