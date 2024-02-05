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
                        <a href="{{ route('hi-secure.create') }}" class="account-top-btn">
                            Add
                        </a>
                        <form action="" id="delete">
                            @csrf
                            @method('DELETE')
                            <button class="account-top-btn" type="button">
                                Delete
                            </button>
                        </form>
                        <button href="" class="account-top-btn" id="modify">
                            Modify
                        </button>
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
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <label for="{{ $user->id }}" class="check-label">
                                        <input type="checkbox" class="check-input" id="{{ $user->id }}">
                                        <div class="check-item col-group">
                                            <i class="xi-check"></i>
                                        </div>
                                    </label>
                                </td>
                                <td>
                                    {{ $user->ids }}
                                </td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    {{ $user->group->name }}
                                </td>
                                <td>
                                    {{ $user->authority->name }}
                                </td>
                                <td>
                                    Active
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>
{{--<script>--}}
{{--    // let domain = "http://localhost:90";--}}
{{--    let domain = "http://hi-secure.ufeed.co.kr";--}}

{{--    function store() {--}}
{{--        let form = {--}}
{{--            ids: $("#ids").val(),--}}
{{--            password: $("#password").val(),--}}
{{--            password_confirmation: $("#password_confirmation").val(),--}}
{{--            authority: 1,--}}
{{--            email: $("#email").val(),--}}
{{--        };--}}

{{--        $(".error").text("");--}}

{{--        axios.post(domain + "/api/users", form)--}}
{{--            .then(response => {--}}
{{--                alert("Processed Successfully");--}}
{{--            }).catch(error => {--}}
{{--            if (error.response.data.errors)--}}
{{--                Object.entries(error.response.data.errors).map(error => {--}}
{{--                    $(`#error-${error[0]}`).text(error[1]);--}}
{{--                })--}}
{{--        })--}}
{{--    }--}}

{{--</script>--}}
<script>
    document.getElementById('modify').addEventListener('click', function () {
        let checkedCheckbox = document.querySelector('.check-input:checked');
        if (checkedCheckbox) {
            window.location.href = `{{ url('hi-secure') }}/${checkedCheckbox.id}/edit`;
        }
    });
</script>
<script>
    let deleteForm = document.getElementById('delete');
    deleteForm.addEventListener('click', function () {
        let checkedCheckbox = document.querySelectorAll('.check-input:checked');
        let deleteId = Array.from(checkedCheckbox).map(checkbox => checkbox.id);

        deleteId.forEach(id => {
            let deleteInput = document.createElement('input');
            deleteInput.setAttribute('type', 'hidden');
            deleteInput.setAttribute('name', 'id[]');
            deleteInput.value = id;
            deleteForm.appendChild(deleteInput);
        })

        let formData = new FormData(deleteForm);
        fetch("{{ route('hi-secure.delete') }}", {
            method: "POST",
            body: formData
        }).then(response => {
            if (response.ok) {
                return response;
            }
            return response.json().then(data => {
                throw new Error(data.message);
            });
        }).then((response) => {
            alert('Hi-Secure Account deleted')
            location.href = response.url;
        }).catch(error => {
            alert(error.message);
        });
    })
</script>
</body>
</html>
