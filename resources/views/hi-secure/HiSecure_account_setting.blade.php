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
                <a href="{{ route('hi-secure.add') }}" class="account-menu-item">
                    Account Add
                </a>
                <a href="{{ route('hi-secure.delete') }}" class="account-menu-item">
                    Account Delete
                </a>
                <a href="{{ route('hi-secure.modify') }}" class="account-menu-item">
                    Account Modify
                </a>
                <a href="{{ route('hi-secure.global-setting') }}" class="account-menu-item active">
                    Account Global Setting
                </a>
            </div>
            <div class="account-wrap">
                <div class="form-wrap">
                    <div class="form-title">
                        Hi-Secure Account Global Setting
                    </div>

                    <div class="setting-txt-wrap">
                        <div class="setting-txt">
                            If there is no input value when logging in, the session is terminated.
                        </div>
                        <div class="setting-txt col-group">
                            Time setting
                            <input type="number" class="setting-input" value="5">
                            Minute
                        </div>
                        <div class="setting-txt red">
                            If there is no input during that time, you will be automatically logged out.
                        </div>
                    </div>


                    <div class="form-btn-wrap col-group">
                        <button class="form-btn hardware_del_btn">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>
</body>
</html>
