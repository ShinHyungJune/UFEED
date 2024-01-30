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
    <div class="dashboard">
        <div class="subpage gray">
            <div class="account-menu-wrap col-group">
                <a href="{{ route('hi-secure.add') }}" class="account-menu-item">
                    Account Add
                </a>
                <a href="{{ route('hi-secure.delete') }}" class="account-menu-item active">
                    Account Delete
                </a>
                <a href="{{ route('hi-secure.modify') }}" class="account-menu-item">
                    Account Modify
                </a>
                <a href="{{ route('hi-secure.global-setting') }}" class="account-menu-item">
                    Account Global Setting
                </a>
            </div>

            <div class="account-wrap">
                <div class="form-title col-group">
                    Hi-Secure Account Delete

                    <button class="del_btn">
                        Delete
                    </button>
                </div>

                <div class="account-table-wrap">
                    <table>
                        <colgroup>
                            <col style="width:30%">
                            <col>
                            <col>
                            <col style="width:10%;">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Authority
                            </th>
                            <th>
                                E-Mail
                            </th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

    <!-- delete 팝업 -->
    <div class="modal-container modal-alert" style="display: none;">
        <div class="modal-wrap modal-alert-wrap warning">
            <div class="modal-title">
                <i class="xi-close close-btn"></i>
            </div>

            <div class="modal-alert-txt-wrap">
                <div class="modal-alert-title-wrap row-group">
                    <i class="xi-warning icon"></i>
                    <p class="modal-alert-title">
                        Warning
                    </p>
                </div>

                <p class="modal-alert-txt">
                    If deleted, the data cannot be recovered. <br>
                    Are you sure you want to delete?
                </p>
            </div>

            <div class="form-btn-wrap col-group">
                <button class="form-btn submit-btn" onclick="remove()">
                    Delete
                </button>
                <button class="form-btn cancel-btn">
                    Cancel
                </button>
            </div>
        </div>
    </div>

</div>
<script>

    //모달
    $('.modal-container .close-btn, .cancel-btn').click(function () {
        $(this).closest('.modal-container').fadeOut();
    });

    $('.del_btn').click(function () {
        $('.modal-alert').fadeIn();
    });


    // let domain = "http://localhost:90";
    let domain = "http://hi-secure.ufeed.co.kr";

    function remove() {
        let form = {
            ids: []
        };

        let checkboxes = $(".check-input:checked");

        checkboxes.each((index, item) => {
            form.ids.push($(item).attr("value"));
        });

        axios.delete(domain + "/api/users", {
            params: form
        }).then(response => {
            getItems();
            alert("Processed Successfully");
            $('.modal-container').fadeOut();
        }).catch(error => {

        })
    }

    function getItems() {
        $(".modal-table-wrap tbody").html("");

        axios.get(domain + "/api/users")
            .then(response => {
                response.data.data.map(item => {
                    $(".modal-table-wrap tbody").append(`<tr>
<td>${item.ids}</td>
<td>${item.authority}</td>
<td>${item.email}</td>
<td>
<label for="${item.id}" class="check-label">
   <input type="checkbox" class="check-input" id="${item.id}" value="${item.id}">
       <div class="check-item">
           <i class="xi-check"></i>
       </div>
   </label>
</td>
</tr>`)
                })
            }).catch(error => {

        })
    }

    getItems();

</script>
</body>
</html>
