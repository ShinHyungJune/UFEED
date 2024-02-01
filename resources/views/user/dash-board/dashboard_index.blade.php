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
        <div id="gnb">
            @include('user.components.gnb')
        </div>
        <!-- //좌측 메뉴 -->
    </div>

    <!-- 대시보드 -->
    <div class="dashboard">
        <div class="dashboard-wrap row-group">
            <div class="dashboard-top col-group">
                <div class="dashboard-gnb-wrap">
                    <p class="dashboard-gnb-title">
                        CBS Protection
                    </p>

                    <div class="protection-wrap col-group">
                        <div class="protection-item">
                            <div class="num">
                                0
                            </div>
                            <div class="txt">
                                Anti-DDoS
                            </div>
                        </div>
                        <div class="protection-item">
                            <div class="num">
                                0
                            </div>
                            <div class="txt">
                                Anti-Malware
                            </div>
                        </div>
                        <div class="protection-item">
                            <div class="num">
                                0
                            </div>
                            <div class="txt">
                                Anti-IPS
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-gnb-wrap">
                    <div class="dashboard-gnb-title-wrap">
                        <div class="dashboard-gnb-title">
                            Real-Time Notification Status
                            <button class="down-btn">
                                <i class="xi-arrow-down"></i>
                            </button>
                        </div>
                        <a href="{{ route('security-monitoring') }}" class="security-btn">
                            <div class="txt-group">
                                <i class="xi-desktop"></i>
                                <p class="txt">Security Monitoring</p>
                            </div>
                            <i class="xi-arrow-right icon"></i>
                        </a>
                    </div>
                    <div class="real-time-status-wrap">
                        <div class="real-time-status-list">
                            <div class="real-time-status-item Down">
                                <div class="title-wrap">
                                    <div class="state">
                                        Down
                                    </div>
                                    <p class="title">
                                        L3 Switch
                                    </p>
                                </div>
                                <p class="txt">
                                    1 day interval average of 0.03 Mbit/s (Traffic In) is unusually low for this...
                                </p>
                            </div>
                            <div class="real-time-status-item Up">
                                <div class="title-wrap">
                                    <div class="state">
                                        Up
                                    </div>
                                    <p class="title">
                                        NMS
                                    </p>
                                </div>
                                <p class="txt">
                                    OK
                                </p>
                            </div>
                            <div class="real-time-status-item Critical">
                                <div class="title-wrap">
                                    <div class="state">
                                        Critical
                                    </div>
                                    <p class="title">
                                        L3 Switch
                                    </p>
                                </div>
                                <p class="txt">
                                    1 day interval average of 0.03 Mbit/s (Traffic In) is unusually low for this...
                                </p>
                            </div>
                            <div class="real-time-status-item Warning">
                                <div class="title-wrap">
                                    <div class="state">
                                        Warning
                                    </div>
                                    <p class="title">
                                        NMS
                                    </p>
                                </div>
                                <p class="txt">
                                    OK
                                </p>
                            </div>
                            <div class="real-time-status-item Down">
                                <div class="title-wrap">
                                    <div class="state">
                                        Down
                                    </div>
                                    <p class="title">
                                        L3 Switch
                                    </p>
                                </div>
                                <p class="txt">
                                    1 day interval average of 0.03 Mbit/s (Traffic In) is unusually low for this...
                                </p>
                            </div>
                            <div class="real-time-status-item Up">
                                <div class="title-wrap">
                                    <div class="state">
                                        Up
                                    </div>
                                    <p class="title">
                                        NMS
                                    </p>
                                </div>
                                <p class="txt">
                                    OK
                                </p>
                            </div>
                            <div class="real-time-status-item Critical">
                                <div class="title-wrap">
                                    <div class="state">
                                        Critical
                                    </div>
                                    <p class="title">
                                        L3 Switch
                                    </p>
                                </div>
                                <p class="txt">
                                    1 day interval average of 0.03 Mbit/s (Traffic In) is unusually low for this...
                                </p>
                            </div>
                            <div class="real-time-status-item Warning">
                                <div class="title-wrap">
                                    <div class="state">
                                        Warning
                                    </div>
                                    <p class="title">
                                        NMS
                                    </p>
                                </div>
                                <p class="txt">
                                    OK
                                </p>
                            </div>
                            <div class="real-time-status-item Down">
                                <div class="title-wrap">
                                    <div class="state">
                                        Down
                                    </div>
                                    <p class="title">
                                        L3 Switch
                                    </p>
                                </div>
                                <p class="txt">
                                    1 day interval average of 0.03 Mbit/s (Traffic In) is unusually low for this...
                                </p>
                            </div>
                            <div class="real-time-status-item Up">
                                <div class="title-wrap">
                                    <div class="state">
                                        Up
                                    </div>
                                    <p class="title">
                                        NMS
                                    </p>
                                </div>
                                <p class="txt">
                                    OK
                                </p>
                            </div>
                            <div class="real-time-status-item Critical">
                                <div class="title-wrap">
                                    <div class="state">
                                        Critical
                                    </div>
                                    <p class="title">
                                        L3 Switch
                                    </p>
                                </div>
                                <p class="txt">
                                    1 day interval average of 0.03 Mbit/s (Traffic In) is unusually low for this...
                                </p>
                            </div>
                            <div class="real-time-status-item Warning">
                                <div class="title-wrap">
                                    <div class="state">
                                        Warning
                                    </div>
                                    <p class="title">
                                        NMS
                                    </p>
                                </div>
                                <p class="txt">
                                    OK
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-content">

                <div class="legend-wrap">
                    <div class="legend-list col-group">
                        <div class="legend-item col-group">
                            <div class="color-box green"></div>
                            Up
                        </div>
                        <div class="legend-item col-group">
                            <div class="color-box yellow"></div>
                            Warning
                        </div>
                        <div class="legend-item col-group">
                            <div class="color-box red"></div>
                            Down
                        </div>
                    </div>
                </div>

                <div class="dashboard-content-wrap">
                    <div class="device-wrap"
                         style="width: 970px; height: 770px; margin: 40px auto;">
                        <video class="bg-video" autoplay muted loop>
                            <source src="/images/main_dashboard_bg.mp4" type="video/mp4"/>
                        </video>
                        <a href="{{ route('navigation') }}" class="device-item down" style="top: 200px; left: 0;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_firewall_nz.png" alt="">
                        </a>
                        <a href="{{ route('communication') }}" class="device-item up" style="top: 400px; left: 0;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_firewall_cz.png" alt="">
                        </a>
                        <div class="device-item up" style="top: 200px; left: 400px;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_firewall_rz.png" alt="">
                        </div>
                        <div class="device-item up" style="top: 0; left: 400px;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_satellite.png" alt="">
                        </div>
                        <div class="device-item up" style="top: 400px; left: 400px;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_network.png" alt="">
                        </div>
                        <div class="device-item up" style="top: 600px; left: 0;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_pc.png" alt="">
                        </div>
                        <div class="device-item up" style="top: 600px; left: 200px">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_tms.png" alt="">
                        </div>
                        <div class="device-item up" style="top: 600px; left: 400px;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_nms.png" alt="">
                        </div>
                        <a href="{{ route('crew-lan') }}" class="device-item up" style="top: 0; left: 800px;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_firewall_clz.png" alt="">
                        </a>
                        <a href="{{ route('power') }}" class="device-item up" style="top: 200px; left: 800px;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_firewall_pz.png" alt="">
                        </a>
                        <a href="{{ route('control-instrumentation') }}" class="device-item up"
                           style="top: 400px; left: 800px;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_firewall_ciz.png" alt="">
                        </a>
                        <div class="device-item up" style="top: 600px; left: 600px;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_nac_server.png" alt="">
                        </div>
                        <div class="device-item up" style="top: 600px; left: 800px;">
                            <div class="state"></div>
                            <img src="/images/dashboard_icon_nac_sensor.png" alt="">
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

    <!-- Devices UP-->
    <div class="modal-container modal-devices-up" style="display:none;">
        <div class="modal-wrap">
            <div class="modal-title">
                Devices
                <i class="xi-close close-btn m-script-pop" data-target=".modal-devices-up"></i>
            </div>

            <div class="modal-table-container">
                <div class="modal-table-wrap dashboard-table-wrap">
                    <table>
                        <thead>
                        <tr>
                            <th>
                                Device
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="dashboard-form-btn-wrap col-group">
                <button class="dashboard-form-btn m-script-pop" data-target=".modal-devices-up">
                    CLOSE
                </button>
            </div>
        </div>
    </div>

    <!-- Devices DOWN-->
    <div class="modal-container modal-devices-down" style="display:none;">
        <div class="modal-wrap">
            <div class="modal-title">
                Devices
                <i class="xi-close close-btn m-script-pop" data-target=".modal-devices-down"></i>
            </div>

            <div class="modal-table-container">
                <div class="modal-table-wrap dashboard-table-wrap">
                    <table>
                        <thead>
                        <tr>
                            <th>
                                Device
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="dashboard-form-btn-wrap col-group">
                <button class="dashboard-form-btn m-script-pop" data-target=".modal-devices-down">
                    CLOSE
                </button>
            </div>
        </div>
    </div>

    <!-- Devices CRITICAL-->
    <div class="modal-container modal-devices-critical" style="display:none;">
        <div class="modal-wrap">
            <div class="modal-title">
                Devices
                <i class="xi-close close-btn m-script-pop" data-target=".modal-devices-critical"></i>
            </div>

            <div class="modal-table-container">
                <div class="modal-table-wrap dashboard-table-wrap">
                    <table>
                        <thead>
                        <tr>
                            <th>
                                Device
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="dashboard-form-btn-wrap col-group">
                <button class="dashboard-form-btn m-script-pop" data-target=".modal-devices-critical">
                    CLOSE
                </button>
            </div>
        </div>
    </div>

    <!-- Devices WARNING-->
    <div class="modal-container modal-devices-warning" style="display:none;">
        <div class="modal-wrap">
            <div class="modal-title">
                Devices
                <i class="xi-close close-btn m-script-pop" data-target=".modal-devices-warning"></i>
            </div>

            <div class="modal-table-container">
                <div class="modal-table-wrap dashboard-table-wrap">
                    <table>
                        <thead>
                        <tr>
                            <th>
                                Device
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="dashboard-form-btn-wrap col-group">
                <button class="dashboard-form-btn m-script-pop" data-target=".modal-devices-warning">
                    CLOSE
                </button>
            </div>
        </div>
    </div>

    <!-- 방화벽 클릭시 나타나는 팝업 -->

    <!-- 방화벽-1 -->
    <div class="modal-container firewall" id="firewall01" style="display: none;">
        <div class="modal-wrap">
            <div class="modal-title">
                Firewall No.1
                <i class="xi-close close-btn"></i>
            </div>

            <div class="firewall-wrap">
                <div class="firewall-title">
                    Remote Zone
                </div>
                <div class="firewall-structure-wrap">
                    <div class="structure-group group1 col-group">
                        <div class="structure-item firewall__01"></div>
                        <div class="structure-item firewall__02"></div>
                        <div class="structure-item firewall__03"></div>
                    </div>
                </div>
                <div class="firewall-state-wrap col-group">
                    <div class="firewall-state-group flex2 row-group">
                        <div class="firewall-state-group col-group">
                            <div class="firewall-state-item down">
                                <p class="item-default">
                                    Down
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item warning">
                                <p class="item-default">
                                    Warning
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item up">
                                <p class="item-default">
                                    Up
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item unusual">
                                <p class="item-default">
                                    Unusual
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="firewall-state-group col-group">
                            <div class="firewall-chart-wrap">
                                <canvas id="firewall_chart01"></canvas>
                            </div>
                            <div class="firewall-chart-wrap">
                                <canvas id="firewall_chart02"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="firewall-state-group flex1 col-group">
                        <div class="firewall-amount-wrap">
                            <div class="firewall-amount-list">
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Firewall
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Switch
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Satellite
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="firewall-devices-status-wrap">
                            <p class="firewall-devices-status-title">
                                Devices Status
                            </p>
                            <div class="firewall-devices-status-list">
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Warning</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Up</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Warning</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Up</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 방화벽-2 -->
    <div class="modal-container firewall" id="firewall02" style="display: none;">
        <div class="modal-wrap">
            <div class="modal-title">
                Firewall No.2
                <i class="xi-close close-btn"></i>
            </div>

            <div class="firewall-wrap">
                <div class="firewall-title">
                    Crew Zone
                </div>
                <div class="firewall-structure-wrap">
                    <div class="structure-group group1 col-group">
                        <div class="structure-item firewall__01"></div>
                        <div class="structure-item firewall__02"></div>
                        <div class="structure-group just-group col-group none-bg">
                            <div class="structure-group row-group none-bg">
                                <div class="structure-item firewall__04"></div>
                                <div class="structure-item firewall__04"></div>
                            </div>
                            <div class="structure-group row-group none-bg">
                                <div class="structure-item firewall__04"></div>
                                <div class="structure-item firewall__04"></div>
                            </div>
                            <div class="structure-group row-group none-bg">
                                <div class="structure-item firewall__04"></div>
                                <div class="structure-item firewall__04"></div>
                            </div>
                            <div class="structure-group row-group none-bg">
                                <div class="structure-item firewall__04"></div>
                                <div class="structure-item firewall__04"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="firewall-state-wrap col-group">
                    <div class="firewall-state-group flex2 row-group">
                        <div class="firewall-state-group col-group">
                            <div class="firewall-state-item down">
                                <p class="item-default">
                                    Down
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item warning">
                                <p class="item-default">
                                    Warning
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item up">
                                <p class="item-default">
                                    Up
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item unusual">
                                <p class="item-default">
                                    Unusual
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="firewall-state-group col-group">
                            <div class="firewall-chart-wrap">
                                <canvas id="firewall_chart01"></canvas>
                            </div>
                            <div class="firewall-chart-wrap">
                                <canvas id="firewall_chart02"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="firewall-state-group flex1 col-group">
                        <div class="firewall-amount-wrap">
                            <div class="firewall-amount-list">
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Firewall
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Switch
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">5</p>
                                    <p class="title">
                                        PC
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">3</p>
                                    <p class="title">
                                        Notebook
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="firewall-devices-status-wrap">
                            <p class="firewall-devices-status-title">
                                Devices Status
                            </p>
                            <div class="firewall-devices-status-list">
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Warning</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Up</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Warning</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Up</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 방화벽-3 -->
    <div class="modal-container firewall" id="firewall03" style="display: none;">
        <div class="modal-wrap">
            <div class="modal-title">
                Firewall No.3
                <i class="xi-close close-btn"></i>
            </div>

            <div class="firewall-wrap">
                <div class="firewall-title">
                    Crew Zone
                </div>
                <div class="firewall-structure-wrap">
                    <div class="structure-group group1 col-group">
                        <div class="structure-item firewall__01"></div>
                        <div class="structure-item firewall__02"></div>
                        <div class="structure-group col-group">
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                        </div>
                    </div>
                </div>
                <div class="firewall-state-wrap col-group">
                    <div class="firewall-state-group flex2 row-group">
                        <div class="firewall-state-group col-group">
                            <div class="firewall-state-item down">
                                <p class="item-default">
                                    Down
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item warning">
                                <p class="item-default">
                                    Warning
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item up">
                                <p class="item-default">
                                    Up
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item unusual">
                                <p class="item-default">
                                    Unusual
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="firewall-state-group col-group">
                            <div class="firewall-chart-wrap">
                                <canvas id="firewall_chart01"></canvas>
                            </div>
                            <div class="firewall-chart-wrap">
                                <canvas id="firewall_chart02"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="firewall-state-group flex1 col-group">
                        <div class="firewall-amount-wrap">
                            <div class="firewall-amount-list">
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Firewall
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Switch
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        VDR
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">7</p>
                                    <p class="title">
                                        OT
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="firewall-devices-status-wrap">
                            <p class="firewall-devices-status-title">
                                Devices Status
                            </p>
                            <div class="firewall-devices-status-list">
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Warning</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Up</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Warning</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Up</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 방화벽-4 -->
    <div class="modal-container firewall" id="firewall04" style="display: none;">
        <div class="modal-wrap">
            <div class="modal-title">
                Firewall No.4
                <i class="xi-close close-btn"></i>
            </div>

            <div class="firewall-wrap">
                <div class="firewall-title">
                    Maintenance Zone
                </div>
                <div class="firewall-structure-wrap">
                    <div class="structure-group group1 col-group">
                        <div class="structure-item firewall__01"></div>
                        <div class="structure-item firewall__02"></div>
                        <div class="structure-group col-group">
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                            <div class="structure-item firewall__05"></div>
                        </div>
                    </div>
                </div>
                <div class="firewall-state-wrap col-group">
                    <div class="firewall-state-group flex2 row-group">
                        <div class="firewall-state-group col-group">
                            <div class="firewall-state-item down">
                                <p class="item-default">
                                    Down
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item warning">
                                <p class="item-default">
                                    Warning
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item up">
                                <p class="item-default">
                                    Up
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item unusual">
                                <p class="item-default">
                                    Unusual
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="firewall-state-group col-group">
                            <div class="firewall-chart-wrap">
                                <canvas id="firewall_chart01"></canvas>
                            </div>
                            <div class="firewall-chart-wrap">
                                <canvas id="firewall_chart02"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="firewall-state-group flex1 col-group">
                        <div class="firewall-amount-wrap">
                            <div class="firewall-amount-list">
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Firewall
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Switch
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">2</p>
                                    <p class="title">
                                        VDR RMS
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        ISS
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">2</p>
                                    <p class="title">
                                        ICMS RMS
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        M/E RMS
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        OT
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="firewall-devices-status-wrap">
                            <p class="firewall-devices-status-title">
                                Devices Status
                            </p>
                            <div class="firewall-devices-status-list">
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Warning</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Up</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Warning</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Up</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 방화벽-5 -->
    <div class="modal-container firewall" id="firewall05" style="display: none;">
        <div class="modal-wrap">
            <div class="modal-title">
                Firewall No.5
                <i class="xi-close close-btn"></i>
            </div>

            <div class="firewall-wrap">
                <div class="firewall-title">
                    Control System Zone
                </div>
                <div class="firewall-structure-wrap">
                    <div class="structure-group group1 col-group">
                        <div class="structure-item firewall__01"></div>
                        <div class="structure-group row-group just-group group-border-wrap flex-start">
                            <span class="group-border"></span>
                            <div class="structure-group col-group just-group flex-start">
                                <div class="structure-group col-group">
                                    <div class="structure-item firewall__02"></div>
                                    <div class="structure-item firewall__05"></div>
                                    <div class="structure-item firewall__05"></div>
                                    <div class="structure-item firewall__05"></div>
                                    <div class="structure-item firewall__05"></div>
                                    <div class="structure-item firewall__05"></div>
                                    <span class="inside-border position-right"></span>
                                </div>
                                <div class="structure-group row-group just-group group-border-wrap">
                                    <span class="group-border half"></span>
                                    <div class="structure-group col-group flex-end">
                                        <span class="inside-border position-left"></span>
                                        <div class="structure-item firewall__05">
                                            <span class="diagonal-border position-left"></span>
                                        </div>
                                        <div class="structure-group row-group">
                                            <div class="structure-group row-group">
                                                <div class="structure-item firewall__06"></div>
                                                <div class="structure-item firewall__07">
                                                    <span class="diagonal-border position-right"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="structure-group col-group">
                                        <div class="structure-item firewall__06"></div>
                                        <div class="structure-item firewall__07"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="structure-group col-group">
                                <div class="structure-item firewall__02"></div>
                                <div class="structure-item firewall__05"></div>
                                <div class="structure-item firewall__05"></div>
                                <div class="structure-item firewall__05"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="firewall-state-wrap col-group">
                    <div class="firewall-state-group flex2 row-group">
                        <div class="firewall-state-group col-group">
                            <div class="firewall-state-item down">
                                <p class="item-default">
                                    Down
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item warning">
                                <p class="item-default">
                                    Warning
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item up">
                                <p class="item-default">
                                    Up
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item unusual">
                                <p class="item-default">
                                    Unusual
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="firewall-state-group col-group">
                            <div class="firewall-chart-wrap">
                                <canvas id="firewall_chart01"></canvas>
                            </div>
                            <div class="firewall-chart-wrap">
                                <canvas id="firewall_chart02"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="firewall-state-group flex1 col-group">
                        <div class="firewall-amount-wrap">
                            <div class="firewall-amount-list">
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Firewall
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Switch
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">2</p>
                                    <p class="title">
                                        VDR RMS
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        ISS
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">2</p>
                                    <p class="title">
                                        ICMS RMS
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        M/E RMS
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        OT
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="firewall-devices-status-wrap">
                            <p class="firewall-devices-status-title">
                                Devices Status
                            </p>
                            <div class="firewall-devices-status-list">
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Warning</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Up</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Warning</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Up</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 방화벽-6 -->
    <div class="modal-container firewall" id="firewall06" style="display: none;">
        <div class="modal-wrap">
            <div class="modal-title">
                Firewall No.6
                <i class="xi-close close-btn"></i>
            </div>

            <div class="firewall-wrap">
                <div class="firewall-title">
                    Control System Zone
                </div>
                <div class="firewall-structure-wrap">
                    <div class="structure-group group1 col-group">
                        <div class="structure-item firewall__01"></div>
                        <div class="structure-item firewall__02"></div>
                        <div class="structure-group just-group col-group none-bg flex-start">
                            <div class="structure-group row-group none-bg">
                                <div class="structure-item firewall__08"></div>
                                <div class="structure-item firewall__08"></div>
                            </div>
                            <div class="structure-group row-group none-bg">
                                <div class="structure-item firewall__08"></div>
                                <div class="structure-item firewall__08"></div>
                            </div>
                            <div class="structure-group row-group none-bg">
                                <div class="structure-item firewall__08"></div>
                                <div class="structure-item firewall__08"></div>
                            </div>
                            <div class="structure-group row-group none-bg">
                                <div class="structure-item firewall__08"></div>
                                <div class="structure-item firewall__08"></div>
                            </div>
                        </div>
                        <div class="structure-group just-group col-group none-bg">
                            <div class="structure-group row-group none-bg">
                                <div class="structure-item firewall__04"></div>
                                <div class="structure-item firewall__04"></div>
                            </div>
                            <div class="structure-group row-group none-bg">
                                <div class="structure-item firewall__04"></div>
                                <div class="structure-item firewall__04"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="firewall-state-wrap col-group">
                    <div class="firewall-state-group flex2 row-group">
                        <div class="firewall-state-group col-group">
                            <div class="firewall-state-item down">
                                <p class="item-default">
                                    Down
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item warning">
                                <p class="item-default">
                                    Warning
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item up">
                                <p class="item-default">
                                    Up
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                            <div class="firewall-state-item unusual">
                                <p class="item-default">
                                    Unusual
                                </p>
                                <div class="item-user">
                                    <i class="xi-check"></i>
                                    <p class="num">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="firewall-state-group col-group">
                            <div class="firewall-chart-wrap">
                                <canvas id="firewall_chart01"></canvas>
                            </div>
                            <div class="firewall-chart-wrap">
                                <canvas id="firewall_chart02"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="firewall-state-group flex1 col-group">
                        <div class="firewall-amount-wrap">
                            <div class="firewall-amount-list">
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Firewall
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">1</p>
                                    <p class="title">
                                        Switch
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">4</p>
                                    <p class="title">
                                        Wifi
                                    </p>
                                </div>
                                <div class="firewall-amount-item col-group">
                                    <p class="num">7</p>
                                    <p class="title">
                                        LAPTOP
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="firewall-devices-status-wrap">
                            <p class="firewall-devices-status-title">
                                Devices Status
                            </p>
                            <div class="firewall-devices-status-list">
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Warning</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Up</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Warning</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Up</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                                <div class="firewall-devices-status-item">
                                    <div class="state state-bar"></div>
                                    <div class="txt-wrap row-group">
                                        <div class="title-group col-group">
                                            <div class="type">Down</div>
                                            <p class="title">
                                                <strong>214.120.150.415</strong>
                                            </p>
                                        </div>
                                        <p class="date">
                                            2023-12-20 17:53:10
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- //방화벽 클릭시 나타나는 팝업 -->

</div>

<!-- 알람 -->
<div class="m-swiper type01" style="display: none;">
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

    //Real-Time Notification Status 열고닫기
    $('.down-btn').click(function () {
        $(this).closest('.dashboard-gnb-wrap').toggleClass('active');
    });

    // 탭
    const tabs = document.querySelectorAll('.dashboard-section-tab');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            const parent = this.parentElement;
            const tabContents = parent.querySelectorAll('.dashboard-section-tab');

            tabContents.forEach(content => {
                content.classList.remove('active');
            });

            this.classList.add('active');
        });
    });

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


    function clearTime(timeString) {
        // 주어진 시간 문자열을 Date 객체로 변환
        var timeArray = timeString.split(':');
        var dateObject = new Date();
        dateObject.setHours(parseInt(timeArray[0], 10));
        dateObject.setMinutes(parseInt(timeArray[1], 10));
        dateObject.setSeconds(parseInt(timeArray[2], 10));

        // 분을 5분 단위로 반올림
        var minutes = dateObject.getMinutes();
        var roundedMinutes = Math.ceil(minutes / 5) * 5;

        // 60분이 되면 시간을 1 늘리고 분은 0으로 설정
        if (roundedMinutes === 60) {
            dateObject.setHours(dateObject.getHours() + 1);
            roundedMinutes = 0;
        }

        dateObject.setMinutes(roundedMinutes);
        dateObject.setSeconds(0);

        // 시, 분, 초를 문자열로 변환하여 리턴
        var formattedTime = dateObject.getHours().toString().padStart(2, '0') + ':' +
            dateObject.getMinutes().toString().padStart(2, '0') + ':' +
            dateObject.getSeconds().toString().padStart(2, '0');

        return formattedTime;
    }

    /* function storeHistories(){
        axios.post(window.domain + "/api/histories");
    } */

    let first = true;

    function getHistories() {
        axios.get(window.domain + "/api/histories")
            .then(response => {
                let devices = response.data.data.devices;
                let realTimeNotifications = response.data.data.realTimeNotifications;
                let realTimeTraffics = response.data.data.realTimeTraffics;
                let rankingTraffics = response.data.data.rankingTraffics;

                // # STANDARD ==========
                let counts = {
                    up: 0,
                    down: 0,
                    warning: 0,
                    unusual: 0,
                };

                $(".device-wrap").find(".device").remove();

                $(".modal-devices-up tbody").html("");
                $(".modal-devices-down tbody").html("");
                $(".modal-devices-critical tbody").html("");
                $(".modal-devices-warning tbody").html("");

                devices.map(device => {
                    // $(".device-wrap").append(`<div class="device ${device.status} device-${device.title} ${device.title.includes('OT') ? 'device-OT' : ''}" style="left:${device.left}%;top:${device.top}%"></div>`);

                    if (device.status === "Up") {
                        counts.up += 1;
                        $(".modal-devices-up tbody").append(`<tr><td>${device.title}</td><td>${device.status}</td></tr>`);
                    }

                    if (device.status === "Down") {
                        counts.down += 1;
                        $(".modal-devices-down tbody").append(`<tr><td>${device.title}</td><td>${device.status}</td></tr>`);
                    }

                    if (device.status === "Unusual") {
                        counts.unusual += 1;
                        $(".modal-devices-critical tbody").append(`<tr><td>${device.title}</td><td>${device.status}</td></tr>`);
                    }

                    if (device.status === "Warning") {
                        counts.warning += 1;
                        $(".modal-devices-warning tbody").append(`<tr><td>${device.title}</td><td>${device.status}</td></tr>`);
                    }
                });

                $(".dashboard-standard-item.up").find(".num").text(counts.up);
                $(".dashboard-standard-item.down").find(".num").text(counts.down);
                $(".dashboard-standard-item.warning").find(".num").text(counts.warning);
                $(".dashboard-standard-item.critical").find(".num").text(counts.unusual);

                drawChart(realTimeTraffics);

                if(first) {
                    first = false;

                    // # Real-time traffic ========
                    drawChart(realTimeTraffics);
                }

                // # Traffic Top 10 ========
                $(".traffic-top-wrap").html("");
                let topNum = 0;
                rankingTraffics.map(rankingTraffic => {
                    topNum++;
                    let html = `<div class="traffic-top-item">
                        <div class="num">${topNum}</div>
                        <div class="txt-wrap">
                            <div class="txt-group">
                                <p class="name">
                                    ${rankingTraffic.title}
                                </p>
<!--                                <p class="ip">-->
<!--                                    192.168.0.176-->
<!--                                </p>-->
                            </div>
                            <p class="byte">
                                ${parseInt(((parseInt(rankingTraffic.byte) * 8) / 1000000).toFixed(1)).toLocaleString()} Mbps
                            </p>
                        </div>
                    </div>`;

                    $(".traffic-top-wrap").append(html);
                });


                // # Real-time notofication status ======
                if (realTimeNotifications.length > 0) {

                    $(".real-time-status-list").html("");

                    realTimeNotifications.map(item => {

                        /*if(item.status == "Unusual") {

                            item.status = "Warning";

                        }*/

                        $(".real-time-status-list").append(`<div class="real-time-status-item ${item.status}">
                                                                <div class="title-wrap">
                                                                    <div class="state">
                                                                        ${item.status}
                                                                    </div>
                                                                    <p class="title">
                                                                        ${item.device.title}
                                                                    </p>
                                                                </div>
                                                                <p class="txt">
                                                                    ${item.message}
                                                                </p>
                                                            </div>`
                        );

                    });

                }
            });
    }

    function getDashboard() {

        axios.get(window.domain + "/api/firewalls/dashboard")
            .then(response => {
                let traffics = response.data.data.traffics;

                $(".dashboard-table-traffic tbody").html("");
                traffics.map(traffic => {
                    $(".dashboard-table-traffic tbody").append(`
                        <tr>
                            <td><div class="state state-bar"></div></td>
                            <td>${traffic.key}</td>
                            <td>${traffic.avg} KB</td>
                        <tr/>
                    `);
                });

                let counts = response.data.data;

                let countsWrapArr = document.querySelectorAll('.protection-item'); // 24-02-01 추가

                countsWrapArr[0].querySelector('.num').innerText = counts.count_ddos;
                countsWrapArr[1].querySelector('.num').innerText = counts.count_malware;
                countsWrapArr[2].querySelector('.num').innerText = counts.count_ips;

                $(".dashboard-table-cnc tbody").html("");

                let cncs = response.data.data.cncs;

                cncs.map(cnc => {
                    $(".dashboard-table-cnc tbody").append(`<tr><td>${cnc.sip}</td><td>${cnc.dip}</td><td>${cnc.count}</td><tr/>`);
                });

                let ipses = response.data.data.ipses;

                $(".dashboard-table-ips tbody").html("");
                ipses.map(ips => {
                    $(".dashboard-table-ips tbody").append(`
                        <tr>
                            <td><div class="state state-bar"></div></td>
                            <td>${ips.key}</td>
                            <td>${ips.count}</td>
                        <tr/>
                    `);
                });

                let malwares = response.data.data.malwares;

                $(".dashboard-table-malwares tbody").html("");
                malwares.map(malware => {
                    $(".dashboard-table-malwares tbody").append(`
                        <tr>
                            <td>${malware.data.virusname}</td>
                            <td>${malware.address}</td>
                        <tr/>
                    `);
                });
            })
    }

    let chart = null;

    function drawChart(deviceTraffics) {
        let colors = [
            "#502ecf",
            "#359832",
            "#84818F",
            "#CFC786",
            "#7A7763",
            "#39334F",
            "#68637A",
            "#967AFA",
            "#23FA84",
        ]

        //차트
        const main_ctx = document.getElementById('chart');

        let firstDeviceTraffic = deviceTraffics[0];

        let datasets = deviceTraffics.map((deviceTraffic, index) => {
            return {
                label: deviceTraffic.device.title,
                data: deviceTraffic.traffics.map(traffic => Math.floor(parseInt(traffic.byte) / 1024)),
                borderWidth: 1,
                borderColor: colors[index],
                tension: 0.4 //곡선그래프
            };
        });

        if (chart) {
            chart.destroy();

            chart = null;
        }

        chart = new Chart(main_ctx, {
            type: 'line',
            data: {
                // labels: firstDeviceTraffic.traffics.map((traffic) => clearTime(traffic.date)),
                labels: firstDeviceTraffic.traffics.map((traffic) => traffic.date),
                datasets: datasets
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        ticks: {
                            // forces step size to be 50 units
                            stepSize: 20,
                            font: function () {
                                return {
                                    size: 10,
                                    family: 'Pretendard'
                                }
                            },
                        }
                    },
                    x: {
                        ticks: {
                            font: function () {
                                return {
                                    size: 10,
                                    family: 'Pretendard'
                                }
                            },
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            font: function () {
                                return {
                                    size: 10,
                                    family: 'Pretendard'
                                }
                            },
                            boxWidth: 6,
                            boxHeight: 6,
                        },
                        position: 'top',
                        fullWidth: false,
                    },
                }
            },
            elements: {
                point: {
                    radius: 0, //선형 그래프 포인트 삭제
                },
            },
        });
    }

    getHistories();
    getDashboard();

    setInterval(() => {
        getHistories();
        getDashboard();
    }, 10000);

    let firstSwiper = true;
    let swiper = null;

    function getAlarms() {
        axios.get(window.domain + "/api/alarms")
            .then(response => {
                let items = response.data.data;

                if (firstSwiper && items.length === 0) {
                    $(".m-swiper.type01").hide();

                    firstSwiper = false;
                }

                if (items.length > 0) {
                    if (swiper)
                        swiper.destroy();

                    $(".m-swiper.type01").show();

                    items.map(item => {
                        $(".m-swiper.type01 .swiper-wrapper").append(`
                    <div class="swiper-slide">
                        <div class="m-swiper-title">${item.device} <button class="btn-close"><i class="xi-close"></i></button></div>
                        <div class="m-swiper-bodies">

                                  <div class="swiper-body">
                            <div class="swiper-body-head">Name :</div>
                            <div class="swiper-body-content">${item.name}</div>
                        </div>
                        <div class="swiper-body">
                            <div class="swiper-body-head">IP :</div>
                            <div class="swiper-body-content">${item.host}</div>
                        </div>
                        <div class="swiper-body">
                            <div class="swiper-body-head">Status :</div>
                            <div class="swiper-body-content">${item.status}</div>
                        </div>

                        <div class="swiper-body">
                            <div class="swiper-body-head">Value :</div>
                            <div class="swiper-body-content">${item.value}</div>
                        </div>
                        </div>
                    </div>
                    `)
                    });

                    $(".m-swiper.type01 .btn-close").unbind("click").bind("click", function () {
                        $(".m-swiper.type01 .swiper-wrapper").html("");
                        $(".m-swiper").hide();
                    });

                    swiper = new Swiper('.m-swiper.type01 .swiper-container', {
                        slidesPerView: 1,
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true, // Allow clicking on pagination bullets
                        },
                        navigation: {
                            nextEl: '.swiper-btn-next',
                            prevEl: '.swiper-btn-prev',
                        },
                    });
                }

            });
    }

    setInterval(function () {
        // getAlarms();
    }, 5000);

    // getAlarms();
</script>
</body>
</html>
