<!DOCTYPE html>
<html lang="ko">
@include('user.components.head')
<body>
<div id="wrap">

    <!-- 상단 헤더 -->
    <header id="header">
        @include('user.components.header')
    </header>
    <!-- //상단 헤더 -->

    <!-- 좌측 메뉴 -->
    <div id="gnb">
        @include('user.components.gnb')
    </div>
    <!-- //좌측 메뉴 -->

    <!-- 대시보드 -->
    <div class="dashboard dashboard-detail">
        <div class="dashboard-wrap row-group">

            <div class="dashboard-detail-title-wrap col-group">
                <button onclick="history.back();" class="prev-btn">
                    <i class="xi-arrow-left"></i>
                </button>
                <h2 class="dashboard-detail-title">
                    Hi-Secure Account
                </h2>
            </div>

            <div class="account-table-container">
                <div class="account-table-title-wrap">
                    <h3 class="account-table-title">
                        Users
                    </h3>
                    <div class="account-top-btn-wrap">
                        <a href="{{ route('hi-secure.add') }}" class="account-top-btn">
                            Add
                        </a>
                        <button class="account-top-btn">
                            Delete
                        </button>
                        <a href="{{ route('hi-secure.modify') }}" class="account-top-btn">
                            Modify
                        </a>
                        <button class="account-top-btn">
                            Global Setting
                        </button>
                    </div>
                </div>

                <div class="account-table-wrap">
                    <table>
                        <colgroup>
                            <col width="48px">
                        </colgroup>
                        <thead>
                        <th>
                            <label for="check_all" class="check-label">
                                <input type="checkbox" class="check-input" id="check_all">
                                <div class="check-item col-group">
                                    <i class="xi-check"></i>
                                </div>
                            </label>
                        </th>
                        <th>
                            Object
                        </th>
                        <th>
                            User Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Group
                        </th>
                        <th>
                            Authority
                        </th>
                        <th>
                            Active/Paused
                        </th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="check_1" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_1">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </td>
                            <td>
                                PRTG System Administator
                            </td>
                            <td>
                                PRTG (Administator)
                            </td>
                            <td>
                                abcd1234@gmail.com
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                PRTG Administator
                            </td>
                            <td>
                                Active
                            </td>
                        </tr>
                        </tbody>
                    </table>
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
