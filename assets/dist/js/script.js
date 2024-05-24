<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('password');
        const feedback = document.getElementById('passwordFeedback');

        passwordInput.addEventListener('input', function () {
            const value = passwordInput.value;
            let message = '';

            if (value.length < 8) {
                message += 'Password must be at least 8 characters long.<br>';
            }
            if (!/[a-z]/.test(value)) {
                message += 'Password must contain at least one lowercase letter.<br>';
            }
            if (!/[A-Z]/.test(value)) {
                message += 'Password must contain at least one uppercase letter.<br>';
            }
            if (!/\d/.test(value)) {
                message += 'Password must contain at least one numeric digit.<br>';
            }
            if (!/[@#$%^&+=]/.test(value)) {
                message += 'Password must contain at least one special character (@, #, $, %, ^, &, +, =).<br>';
            }

            feedback.innerHTML = message ? `<div class="text-danger">${message}</div>` : '';
        });
    });
</script>
