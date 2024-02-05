<!DOCTYPE html>
<html lang="ko">
@include('user.components.head')
<body>
<div id="wrap">

    <!-- 상단 헤더 -->
    <header id="header">
{{--        @include('user.components.header')--}}
    </header>
    <!-- //상단 헤더 -->

    <!-- 좌측 메뉴 -->
    <div id="gnb">
{{--        @include('user.components.gnb')--}}
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
                    Hi-Secure Account Global Setting
                </h2>
            </div>

            <div class="dashboard-content">
                <div class="account-wrap">
                    <div class="form-wrap">
                        <div class="form-title">

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
    </div>
    <!-- 대시보드 -->

</div>
</body>
</html>
