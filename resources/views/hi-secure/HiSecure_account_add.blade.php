<!DOCTYPE html>
<html lang="ko">
@include('components.head')
<body>
<div id="wrap">

    <!-- 상단 헤더 -->
    <header id="header">
        @include('components.header')
    </header>
    <!-- //상단 헤더 -->

    <!-- 좌측 메뉴 -->
    <div id="gnb">
        @include('components.gnb')
    </div>
    <!-- //좌측 메뉴 -->

    <!-- 대시보드 -->
    <div class="dashboard">
        <div class="subpage gray">

            <div class="account-menu-wrap col-group">
                <a href="{{ route('hi-secure.add') }}" class="account-menu-item active">
                    Hi-Secure Account Add
                </a>
                <a href="{{ route('hi-secure.delete') }}" class="account-menu-item">
                    Hi-Secure Account Delete
                </a>
                <a href="{{ route('hi-secure.modify') }}" class="account-menu-item">
                    Hi-Secure Account Modify
                </a>
                <a href="{{ route('hi-secure.delete') }}" class="account-menu-item">
                    Hi-Secure Account Global Setting
                </a>
            </div>

            <div class="account-wrap">
                <div class="form-wrap">
                    <div class="form-title">
                        Hi-Secure Account Add
                    </div>

                    <form action="">
                        <div class="account-form row-group">
                            <div class="form-item row-group">
                                <p class="item-title">
                                    ID
                                </p>
                                <div class="item-user form-user-btn-wrap col-group">
                                    <input type="text" class="form-input" id="ids">
                                    <button class="form-user-btn">
                                        Duplicate Check
                                    </button>
                                    <p class="error sub-txt" style="color:red;" id="error-ids"></p>
                                </div>
                            </div>
                            <div class="form-item row-group">
                                <p class="item-title">
                                    Password
                                </p>
                                <input type="password" class="form-input" id="password">
                                <p class="sub-txt">
                                    Password must be at least 6 characters long, <br>
                                    must contain letters in mixed case and must contain numbers.
                                </p>
                                <p class="error sub-txt" style="color:red;" id="error-password"></p>
                            </div>
                            <div class="form-item row-group">
                                <p class="item-title">
                                    Confirm Password
                                </p>
                                <input type="password" class="form-input" id="password_confirmation">
                                <p class="error sub-txt" style="color:red;" id="error-password_confirmation"></p>
                            </div>
                            <div class="form-item row-group">
                                <p class="item-title">
                                    Authority
                                </p>
                                <select class="form-select" id="authority">
                                    <option value="1">1</option>
                                </select>
                                <p class="error sub-txt" style="color:red;" id="error-authority"></p>

                            </div>
                            <div class="form-item row-group">
                                <p class="item-title">
                                    E-Mail
                                </p>
                                <input type="email" class="form-input" id="email">

                                <p class="error sub-txt" style="color:red;" id="error-email"></p>
                            </div>

                        </div>
                    </form>

                    <div class="form-btn-wrap col-group">
                        <button class="form-btn" onclick="store()">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>
<script>
    // let domain = "http://localhost:90";
    let domain = "http://hi-secure.ufeed.co.kr";

    function store() {
        let form = {
            ids: $("#ids").val(),
            password: $("#password").val(),
            password_confirmation: $("#password_confirmation").val(),
            authority: 1,
            email: $("#email").val(),
        };

        $(".error").text("");

        axios.post(domain + "/api/users", form)
            .then(response => {
                alert("Processed Successfully");
            }).catch(error => {
            if (error.response.data.errors)
                Object.entries(error.response.data.errors).map(error => {
                    $(`#error-${error[0]}`).text(error[1]);
                })
        })
    }

</script>
</body>
</html>
