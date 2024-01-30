<!DOCTYPE html>
<html lang="ko">
@include('components.head')
<body>
<div id="wrap">

    <div class="header dashboard_index">
        <!-- 상단 헤더 -->
        <header id="header">
            @include('components.header')
        </header>
        <!-- //상단 헤더 -->

        <!-- 좌측 메뉴 -->
        <div id="gnb">
{{--            @include('components.gnb')--}}
        </div>
        <div id="dashboard_gnb">
            @include('components.dashboard_detail_gnb')
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
                        <div class="device-item up" style="top: 0; left: 0;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_network.png" alt="">
                        </div>
                        <div class="device-item up" style="top: 0; left: 200px;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_firewall_clz.png" alt="">
                        </div>
                        <div class="device-item up" style="top: 200px; left: 200px;">
                            <div class="state state-num">8</div>
                            <img src="/images/dashboard_icon_controlsystem_icms_a1.png" alt="">
                        </div>
                        <div class="device-item up" style="top: 200px; left: 400px;">
                            <div class="state state-num">8</div>
                            <img src="/images/dashboard_icon_controlsystem_icms_b1.png" alt="">
                        </div>
                        <div class="device-item warning" style="top: 200px; left: 600px;">
                            <div class="state state-num">3</div>
                            <img src="/images/dashboard_icon_controlsystem_iss.png" alt="">
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

<!-- 알람 -->
<div class="m-swiper type01">
    <div class="swiper-container">
        <div class="swiper-wrapper">

        </div>

        <div class="swiper-pagination"></div>

        <div class="btns">
            <div class="swiper-btn swiper-btn-prev">
                <i class="xi-angle-left"></i>
            </div>
            <div class="swiper-btn swiper-btn-next">
                <i class="xi-angle-right"></i>
            </div>

        </div>
    </div>
</div>

<script>
    //대시보드 확대축소버튼
    const scalingBox = $('.device-wrap');
    let currentScale = 1.0;
    let minScale = 1.0;

    $('.renew-btn').on('click', function () {
        currentScale = minScale;
        scalingBox.css('transform', 'scale(' + currentScale + ')');
    });

    $('.plus-btn').on('click', function () {
        if (currentScale < 1.9) {
            currentScale += 0.3;
            scalingBox.css('transform', 'scale(' + currentScale + ')');
        }
    });

    $('.minus-btn').on('click', function () {
        if (currentScale > 1.0) {
            currentScale -= 0.3;

            if (currentScale < minScale)
                currentScale = minScale;

            scalingBox.css('transform', 'scale(' + currentScale + ')');
        }
    });

</script>
</body>
</html>
