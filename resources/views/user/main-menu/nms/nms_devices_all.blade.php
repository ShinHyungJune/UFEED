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
        @include('user.components.sub_gnb')
    </div>
    <!-- //좌측 메뉴 -->

    <!-- 대시보드 -->
    <div class="dashboard">
        <div class="subpage">

            <div class="dashboard-menu-wrap col-group">
                <div class="dashboard-menu-nav col-group">
                    <div class="dashboard-menu-nav-item">
                        NMS
                    </div>
                    <i class="icon xi-angle-right"></i>
                    <div class="dashboard-menu-nav-item">
                        Alarms
                    </div>
                    <i class="icon xi-angle-right"></i>
                    <div class="dashboard-menu-nav-item active">
                        All
                    </div>
                </div>
            </div>

            <!-- <div class="subpage-table-container">
                <iframe src="http://118.130.110.156:8080/alarms.htm?filter_status=5&filter_status=4&filter_status=10&filter_status=13&filter_status=14" frameborder="0" class="dashboard_iframe" width="100%" height="100%"></iframe>
            </div> -->

            <div class="directory-container">
                <ul class="directory-group">
                    <li class="directory-item active">
                        <div class="directory-title">
                            <div class="border"></div>
                            Ship System
                        </div>
                        <ul class="directory-group directory-sub-group">
                            <li class="directory-item active">
                                <div class="directory-title">
                                    <div class="border"></div>
                                    Hi-Secure
                                </div>
                                <ul class="directory-group directory-sub-group">
                                    <li class="directory-item active">
                                        <div class="directory-title">
                                            <div class="border"></div>
                                            Network Infrastructure
                                        </div>
                                        <ul class="directory-group directory-sub-group">
                                            <li class="directory-item active">
                                                <div class="directory-title">
                                                    <div class="border"></div>
                                                    Security
                                                </div>
                                                <ul class="directory-group directory-sub-group">
                                                    {{--FW1--}}
                                                    <li class="directory-item active">
                                                        <div class="directory-title">
                                                            <div class="border"></div>
                                                            FW#1
                                                        </div>
                                                        <ul class="directory-group directory-detail-group">
                                                            <li class="directory-detail-item">
                                                                <div class="state"></div>
                                                                <p class="directory-detail-item-title">
                                                                    Ping
                                                                </p>
                                                                <p class="directory-detail-item-txt">
                                                                    {{ $devicesFW1->ping_value }} mses
                                                                </p>
                                                            </li>
                                                            <li class="directory-detail-item">
                                                                <div class="state"></div>
                                                                <p class="directory-detail-item-title">
                                                                    CPU Load
                                                                </p>
                                                                <p class="directory-detail-item-txt">
                                                                    {{ $devicesFW1->cpu_load_value }}%
                                                                </p>
                                                            </li>
                                                            <li class="directory-detail-item">
                                                                <div class="state"></div>
                                                                <p class="directory-detail-item-title">
                                                                    Memory Load
                                                                </p>
                                                                <p class="directory-detail-item-txt">
                                                                    30%
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    {{--FW#--}}
                                                    @foreach($devicesFW as $device)
                                                        <li class="directory-item active">
                                                            <div class="directory-title">
                                                                <div class="border"></div>
                                                                {{ $device->title }}
                                                            </div>
                                                            <ul class="directory-group directory-detail-group">
                                                                <li class="directory-detail-item">
                                                                    <div class="state"></div>
                                                                    <p class="directory-detail-item-title">
                                                                        Ping
                                                                    </p>
                                                                    <p class="directory-detail-item-txt">
                                                                        {{ $device->ping_value }} mses
                                                                    </p>
                                                                </li>
                                                                <li class="directory-detail-item">
                                                                    <div class="state"></div>
                                                                    <p class="directory-detail-item-title">
                                                                        CPU Load
                                                                    </p>
                                                                    <p class="directory-detail-item-txt">
                                                                        {{ $device->cpu_load_value }}%
                                                                    </p>
                                                                </li>
                                                                <li class="directory-detail-item">
                                                                    <div class="state"></div>
                                                                    <p class="directory-detail-item-title">
                                                                        Memory Load
                                                                    </p>
                                                                    <p class="directory-detail-item-txt">
                                                                        30%
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="directory-item active">
                                                <div class="directory-title">
                                                    <div class="border"></div>
                                                    Switch
                                                </div>
                                                <ul class="directory-group directory-sub-group">
                                                    <li class="directory-item active">
                                                        <div class="directory-title">
                                                            <div class="border"></div>
                                                            L3 Switch
                                                        </div>
                                                        <ul class="directory-group directory-detail-group">
                                                            <li class="directory-detail-item">
                                                                <div class="state"></div>
                                                                <p class="directory-detail-item-title">
                                                                    Ping
                                                                </p>
                                                                <p class="directory-detail-item-txt">
                                                                    {{ $devicesL3->ping_value }} mses
                                                                </p>
                                                            </li>
                                                            <li class="directory-detail-item">
                                                                <div class="state"></div>
                                                                <p class="directory-detail-item-title">
                                                                    CPU Load
                                                                </p>
                                                                <p class="directory-detail-item-txt">
                                                                    {{ $devicesL3->cpu_load_value }}%
                                                                </p>
                                                            </li>
                                                            <li class="directory-detail-item">
                                                                <div class="state"></div>
                                                                <p class="directory-detail-item-title">
                                                                    Memory Load
                                                                </p>
                                                                <p class="directory-detail-item-txt">
                                                                    30%
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="directory-item active">
                                                <div class="directory-title">
                                                    <div class="border"></div>
                                                    Server
                                                </div>
                                                <ul class="directory-group directory-sub-group">
                                                    <li class="directory-item active">
                                                        <div class="directory-title">
                                                            <div class="border"></div>
                                                            Hi-Secure
                                                        </div>
                                                        <ul class="directory-group directory-detail-group">
                                                            <li class="directory-detail-item">
                                                                <div class="state"></div>
                                                                <p class="directory-detail-item-title">
                                                                    Ping
                                                                </p>
                                                                <p class="directory-detail-item-txt">
                                                                    0 mses
                                                                </p>
                                                            </li>
                                                            <li class="directory-detail-item">
                                                                <div class="state"></div>
                                                                <p class="directory-detail-item-title">
                                                                    CPU Load
                                                                </p>
                                                                <p class="directory-detail-item-txt">
                                                                    1%
                                                                </p>
                                                            </li>
                                                            <li class="directory-detail-item">
                                                                <div class="state"></div>
                                                                <p class="directory-detail-item-title">
                                                                    Memory Load
                                                                </p>
                                                                <p class="directory-detail-item-txt">
                                                                    30%
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="directory-item active">
                                <div class="directory-title">
                                    <div class="border"></div>
                                    Navigation Zone
                                </div>
                                <ul class="directory-group directory-sub-group">
                                    <li class="directory-item active">
                                        <div class="directory-title">
                                            <div class="border"></div>
                                            Automatic Identification System
                                        </div>
                                        <ul class="directory-group directory-detail-group">
                                            <li class="directory-detail-item">
                                                <div class="state"></div>
                                                <p class="directory-detail-item-title">
                                                    Ping
                                                </p>
                                                <p class="directory-detail-item-txt">
                                                    0 mses
                                                </p>
                                            </li>
                                            <li class="directory-detail-item">
                                                <div class="state"></div>
                                                <p class="directory-detail-item-title">
                                                    CPU Load
                                                </p>
                                                <p class="directory-detail-item-txt">
                                                    1%
                                                </p>
                                            </li>
                                            <li class="directory-detail-item">
                                                <div class="state"></div>
                                                <p class="directory-detail-item-title">
                                                    Memory Load
                                                </p>
                                                <p class="directory-detail-item-txt">
                                                    30%
                                                </p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>
</body>
<script>
    $('.directory-title').click(function () {
        $(this).parent('.directory-item').toggleClass('active');

        $('.directory-group').each(function () {
            var heightValue = $(this).outerHeight(true) - $(this).children('.directory-item').last().outerHeight(true);
            $(this).siblings('.directory-title').find('.border').css('height', heightValue + 26 + 'px');
        });
    });
</script>
</html>
