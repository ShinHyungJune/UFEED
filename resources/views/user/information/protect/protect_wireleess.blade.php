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
                        Cyber Resilience of ship
                    </div>
                    <i class="icon xi-angle-right"></i>
                    <div class="dashboard-menu-nav-item">
                        Protect
                    </div>
                    <i class="icon xi-angle-right"></i>
                    <div class="dashboard-menu-nav-item active">
                        Wireleess
                    </div>
                </div>
            </div>

            <div class="subpage-table-container">
                <div class="subpage-table-wrap account-table-wrap">
                    <table class="subpage-table">
                        <thead>
                        <th>No.</th>
                        <th>AP</th>
                        <th>Client Name</th>
                        <th>IP</th>
                        <th>MAC</th>
                        <th>On/Off</th>
                        <th>Active/Inactive</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td rowspan="3">AP#1</td>
                            <td>Notebook#1</td>
                            <td>192.168.0.100</td>
                            <td>aa:bb:cc:dd:ee:f1</td>
                            <td>On</td>
                            <td>Employee#1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Notebook#2</td>
                            <td>192.168.0.100</td>
                            <td>aa:bb:cc:dd:ee:f2</td>
                            <td>On</td>
                            <td>Employee#2</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Notebook#3</td>
                            <td>192.168.0.100</td>
                            <td>aa:bb:cc:dd:ee:f3</td>
                            <td>On</td>
                            <td>Employee#3</td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- <img src="images/protect_wireleess.png" alt=""> -->
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>
</body>
</html>
