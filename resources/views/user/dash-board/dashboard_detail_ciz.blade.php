<!DOCTYPE html>
<html lang="ko">
@include('user.components.head')
<body>
<div id="wrap">

    <div class="header dashboard_index">
        <!-- 상단 헤더 -->
        <header id="header">
            @include('user.components.header')
        </header>
        <!-- //상단 헤더 -->

        <!-- 좌측 메뉴 -->
        <div id="dashboard_gnb">
            @include('user.components.dashboard_detail_gnb')
        </div>
        <!-- //좌측 메뉴 -->
    </div>

    <!-- 대시보드 -->
    <div class="dashboard dashboard-detail">
        <div class="dashboard-wrap row-group">

            <div class="dashboard-detail-title-wrap col-group">
                <a href="{{ route('dash-board.index') }}" class="prev-btn">
                    <i class="xi-arrow-left"></i>
                </a>
                <h2 class="dashboard-detail-title">
                    Control & Instrumentation Zone
                </h2>
            </div>

            <div class="dashboard-content">
                <div class="dashboard-content-wrap">
                    <div class="device-wrap" style="width: 770px; height: 370px; margin: 80px;">
                        <div class="device-item-group" style="top: 0; left: 0;"> <!-- 일렬 정렬 시 device-item-group -->
                            <div class="device-item up">
                                <div class="state"></div>
                                <img src="/images/dashboard_icon_network.png" alt="">
                            </div>
                            <div class="device-item up">
                                <div class="state"></div>
                                <img src="/images/dashboard_icon_firewall_ciz.png" alt="">
                            </div>
                        </div>

                        <div class="device-item-group device-item-sub-group" style="top: 200px; left: 400px;">
                            <!-- 하위 그룹 및 일렬 정렬 시 device-item-sub-group -->
                            <div class="device-item device-btn up m-script-pop" data-target="#pop1" data-title="M/E Control System">
                                <div class="state state-num">3</div>
                                <img src="/images/dashboard_icon_system.png" alt="">
                                <p class="device-item-title">
                                    M/E Control System
                                </p>
                            </div>
                            <div class="device-item device-btn up m-script-pop" data-target="#pop2"
                                 data-title="Integrated Control and Monitoring System">
                                <div class="state state-num">6</div>
                                <img src="/images/dashboard_icon_system.png" alt="">
                                <p class="device-item-title">
                                    Integrated Control and Monitoring System
                                </p>
                            </div>
                            <div class="device-item device-btn up m-script-pop" data-target="#pop3" data-title="Emergency Shutdown System">
                                <div class="state state-num">4</div>
                                <img src="/images/dashboard_icon_system.png" alt="">
                                <p class="device-item-title">
                                    Emergency Shutdown System
                                </p>
                            </div>
                            <div class="device-item device-btn up m-script-pop" data-target="#pop4" data-title="DF G/E Control System">
                                <div class="state state-num">6</div>
                                <img src="/images/dashboard_icon_system.png" alt="">
                                <p class="device-item-title">
                                    DF G/E Control System
                                </p>
                            </div>
                            <div class="device-item device-btn up m-script-pop" data-target="#pop5" data-title="Valve Remote Control System">
                                <div class="state state-num">4</div>
                                <img src="/images/dashboard_icon_system.png" alt="">
                                <p class="device-item-title">
                                    Valve Remote Control System
                                </p>
                            </div>
                        </div>
                        <div class="device-item-group device-item-sub-group" style="top: 400px; left: 400px;">
                            <!-- 하위 그룹 및 일렬 정렬 시 device-item-sub-group -->
                            <div class="device-item device-btn up m-script-pop" data-target="#pop6" data-title="Anti-Heeling System">
                                <div class="state state-num">6</div>
                                <img src="/images/dashboard_icon_system.png" alt="">
                                <p class="device-item-title">
                                    Anti-Heeling System
                                </p>
                            </div>
                            <div class="device-item device-btn up m-script-pop" data-target="#pop7" data-title="Shaft Power Meter">
                                <div class="state state-num">6</div>
                                <img src="/images/dashboard_icon_system.png" alt="">
                                <p class="device-item-title">
                                    Shaft Power Meter
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- 확대/축소버튼 -->
                <div class="dashboard-btn-wrap col-group">
                    <button type="button" class="dashboard-btn renew-btn">
                        <i class="xi-renew"></i>
                    </button>

                    <div class="dashboard-btn-list col-group">
                        <button type="button" class="dashboard-btn plus-btn">
                            <i class="xi-plus-circle-o"></i>
                        </button>
                        <button type="button" class="dashboard-btn minus-btn">
                            <i class="xi-minus-circle-o"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 디바이스 상세 팝업 -->
<div class="device-detail" style="display: none;" id="pop1">
    <div class="device-detail-wrap">
        <button class="close-btn">
            <i class="xi-close"></i>
        </button>
        <div class="device-detail-title-wrap">
            <p class="before">
                Control & Instrumentation Zone
            </p>
            <i class="xi-angle-right"></i>
            <p class="now"></p>
        </div>

        <div class="device-detail-group">
            <div class="device-detail-item device-item up" data-id="OT#3">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="device-detail" style="display: none;" id="pop2">
    <div class="device-detail-wrap">
        <button class="close-btn">
            <i class="xi-close"></i>
        </button>
        <div class="device-detail-title-wrap">
            <p class="before">
                Control & Instrumentation Zone
            </p>
            <i class="xi-angle-right"></i>
            <p class="now"></p>
        </div>

        <div class="device-detail-group">
            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="device-detail" style="display: none;" id="pop3">
    <div class="device-detail-wrap">
        <button class="close-btn">
            <i class="xi-close"></i>
        </button>
        <div class="device-detail-title-wrap">
            <p class="before">
                Control & Instrumentation Zone
            </p>
            <i class="xi-angle-right"></i>
            <p class="now"></p>
        </div>

        <div class="device-detail-group">

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="device-detail" style="display: none;" id="pop4">
    <div class="device-detail-wrap">
        <button class="close-btn">
            <i class="xi-close"></i>
        </button>
        <div class="device-detail-title-wrap">
            <p class="before">
                Control & Instrumentation Zone
            </p>
            <i class="xi-angle-right"></i>
            <p class="now"></p>
        </div>

        <div class="device-detail-group">
            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="device-detail" style="display: none;" id="pop5">
    <div class="device-detail-wrap">
        <button class="close-btn">
            <i class="xi-close"></i>
        </button>
        <div class="device-detail-title-wrap">
            <p class="before">
                Control & Instrumentation Zone
            </p>
            <i class="xi-angle-right"></i>
            <p class="now"></p>
        </div>

        <div class="device-detail-group">

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="device-detail" style="display: none;" id="pop6">
    <div class="device-detail-wrap">
        <button class="close-btn">
            <i class="xi-close"></i>
        </button>
        <div class="device-detail-title-wrap">
            <p class="before">
                Control & Instrumentation Zone
            </p>
            <i class="xi-angle-right"></i>
            <p class="now"></p>
        </div>

        <div class="device-detail-group">
            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="device-detail" style="display: none;" id="pop7">
    <div class="device-detail-wrap">
        <button class="close-btn">
            <i class="xi-close"></i>
        </button>
        <div class="device-detail-title-wrap">
            <p class="before">
                Control & Instrumentation Zone
            </p>
            <i class="xi-angle-right"></i>
            <p class="now"></p>
        </div>

        <div class="device-detail-group">
            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>

            <div class="device-detail-item device-item down">
                <div class="state"></div>
                <img src="/images/dashboard_icon_server.png" alt="">
            </div>
        </div>
    </div>
</div>
<script>

    $('.device-detail .close-btn').click(function () {
        $('.device-detail').fadeOut();
    });

</script>
</body>
</html>
