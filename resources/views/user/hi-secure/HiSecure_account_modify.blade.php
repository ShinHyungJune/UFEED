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
                    Hi-Secure Account Modify
                </h2>
            </div>

            <div class="dashboard-content">
                <div class="account-wrap">
                    <form action="" method="post" id="form">
                        @csrf
                        <div class="modify-group col-group">
                            <div>
                                <div class="account-form row-group">
                                    <div class="form-item row-group">
                                        <p class="item-title">
                                            ID
                                        </p>
                                        <div class="item-user form-user-btn-wrap col-group">
                                            <input type="text" class="form-input" name="ids" value="{{ $user->ids }}">
                                            <button class="form-user-btn" type="button">
                                                Duplicate Check
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-item row-group">
                                        <p class="item-title">
                                            User Name
                                        </p>
                                        <div class="item-user col-group">
                                            <input type="text" class="form-input" name="name" value="{{ $user->name }}">
                                        </div>
                                    </div>
                                    <div class="form-item row-group">
                                        <p class="item-title">
                                            Password
                                        </p>
                                        <input type="password" class="form-input" id="password" name="password">
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
                                        <input type="password" class="form-input" id="password_confirmation" name="password_confirmation">
                                        <p class="error sub-txt" style="color:red;"
                                           id="error-password_confirmation"></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="account-form row-group">
                                    <div class="form-item row-group">
                                        <p class="item-title">
                                            Group
                                        </p>
                                        <select class="form-select" id="group" name="group_id">
                                            @foreach($groups as $group)
                                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="error sub-txt" style="color:red;" id="error-group"></p>
                                    </div>
                                    <div class="form-item row-group">
                                        <p class="item-title">
                                            Authority
                                        </p>
                                        <select class="form-select" id="authority" name="authority_id">
                                            @foreach($authorities as $authority)
                                                <option value="{{ $authority->id }}">{{ $authority->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="error sub-txt" style="color:red;" id="error-authority"></p>
                                    </div>
                                    <div class="form-item row-group">
                                        <p class="item-title">
                                            E-Mail
                                        </p>
                                        <input type="email" class="form-input" id="email" name="email" value="{{ $user->email }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="form-btn-wrap col-group">
                        {{--                        <button class="form-btn" onclick="update()">--}}
                        <button class="form-btn" id="submit">
                            Modify
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#group').val('{{ $user->group_id ?: 1 }}');
    $('#authority').val('{{ $user->authority_id  ?: 1 }}');
</script>
{{--<script>--}}
{{--    document.getElementById('submit').addEventListener('click', function () {--}}
{{--        let form = document.getElementById('form');--}}
{{--        let formData = new FormData(form);--}}
{{--        fetch("{{ route('hi-secure.store') }}", {--}}
{{--            method: "POST",--}}
{{--            body: formData--}}
{{--        }).then(response => {--}}
{{--            if (response.ok) {--}}
{{--                return response;--}}
{{--            }--}}
{{--            return response.json().then(data => {--}}
{{--                throw new Error(data.message);--}}
{{--            });--}}
{{--        }).then((response) => {--}}
{{--            alert('Hi-Secure Account registered')--}}
{{--            location.href = response.url;--}}
{{--        }).catch(error => {--}}
{{--            alert(error.message);--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
</body>
</html>
