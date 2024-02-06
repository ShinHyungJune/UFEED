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
                        SafeGuard
                    </div>
                </div>
            </div>

            <div class="subpage-table-container">
                <div class="subpage-table-wrap account-table-wrap">
                    <div class="subpage-table-title-wrap">
                        <h3 class="subpage-table-title">
                            SafeGuard
                        </h3>
                    </div>
                    <table class="subpage-table disable">
                        <thead>
                        <th style="text-align: center;">NO.</th>
                        <th>Asset name tag</th>
                        <th>OS</th>
                        <th>Port Used</th>
                        <th>Unused default port</th>
                        <th style="text-align: center;">Check</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="text-align: center;">1</td>
                            <td>CBS#1</td>
                            <td>Windows 10</td>
                            <td>80, 443, 3389</td>
                            <td>21, 161, 514</td>
                            <td style="text-align: center;"><i class="xi-radiobox-blank"></i></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">2</td>
                            <td>CBS#2</td>
                            <td>Windows 10</td>
                            <td>80, 443, 3389</td>
                            <td>21, 161, 514</td>
                            <td style="text-align: center;"><i class="xi-radiobox-blank"></i></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">3</td>
                            <td>CBS#3</td>
                            <td>Windows 10</td>
                            <td>80, 443, 3389</td>
                            <td>21, 161, 514</td>
                            <td style="text-align: center;"><i class="xi-radiobox-blank"></i></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">4</td>
                            <td>CBS#4</td>
                            <td>Windows 10</td>
                            <td>80, 443, 3389</td>
                            <td>21, 161, 514</td>
                            <td style="text-align: center;"><i class="xi-radiobox-blank"></i></td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- <img src="images/protect_safeguard.png" alt=""> -->
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>
</body>
</html>
