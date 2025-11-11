<section id="login">
    <div class="container py-5">
        <div class="row contact-border my-5">
            <div class="col-lg-6 px-0 contact-img" style="height: 60vh; background-image: url('./images/login.jpg');"></div>
            <div class="col-lg-6 px-0 contact-card">
                <form id="resetForm" class="p-5 contact-form" method="post">
                    <h1 class="login-title">Reset Password</h1><small>
                    <div>
                        <input type="password" name="password" placeholder="Password" required autocomplete="new-password">
                    </div>
                    <div>
                        <input type="password" name="rePassword" placeholder="Confirm Password" required autocomplete="new-password">
                    </div>
                    <div>
                        <input id="login" type="submit" value="Reset">
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
        const form = document.getElementById('resetForm');
        const errorId = document.getElementById('error');

        form.addEventListener("submit", function(e){
            e.preventDefault(); // 阻止表單默認提交

            // 取得網址參數物件
            const params = new URLSearchParams(window.location.search);
            const token = params.get("token");

             // 取得表單資料
            const formData = new FormData(form);
            const data = {
                password: formData.get("password"),
                rePassword: formData.get("rePassword"),
                token: token
            };

            if(data.password === data.rePassword){
                // 送出 POST 請求
                fetch("./api/resetPassword.php", {
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
                        // 登入成功
                        window.location.href = "./index.php?do=login";
                    } else {
                        // 登入失敗
                        errorId.textContent = result.message || "Login failed";
                        formFail();
                    }
                })
                .catch(err => {
                    errorId.textContent = "Network error. Please try again.";
                    formFail();
                });
            } else {
                errorId.textContent = "Passwords do not match";
                formFail();
            }
        })
    })
</script>