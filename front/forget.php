<section id="login">
    <div class="container py-5">
        <div class="row contact-border my-5">
            <div class="col-lg-6 px-0 contact-img" style="height: 60vh; background-image: url('./images/login.jpg');"></div>
            <div class="col-lg-6 px-0 contact-card">
                <form id="userForm" class="p-5 contact-form" method="post">
                    <h1 class="login-title">Forgot password</h1><small>
                    <div>
                        <input type="text" name="username" placeholder="Username" required autocomplete="username">
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div>
                        <input id="login" type="submit" value="Next">
                    </div>
                    <div id="error" style="color: #ffffff"></div>

                    <div>
                        <a href="index.php?do=login" style="color:#ffffff; text-decoration: underline;">Return to login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById('userForm');
        const errorId = document.getElementById('error');

        form.addEventListener("submit", function(e){
            e.preventDefault(); // 阻止表單默認提交

             // 取得表單資料
            const formData = new FormData(form);
            const data = {
                username: formData.get("username"),
                email: formData.get("email")
            };

            // 送出 POST 請求
            fetch("./api/checkUser.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            })
            // .then(response => response.text())
            .then(response => response.json()) // 假設 API 回傳 JSON
            .then(result => {
                if (result.success) {
                    // 資料驗證成功
                    window.location.href = result.redirect;
                } else {
                    // 資料驗證錯誤
                    errorId.textContent = result.message || "Data verification failed";
                    formFail();
                }
            })
            .catch(err => {
                errorId.textContent = "Network error. Please try again.";
                formFail();
            });
        })
    })
</script>