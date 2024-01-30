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
        @include('components.sub_gnb')
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
                <div class="subpage-table-wrap">
                    <table class="subpage-table">
                        <thead>
                        <th>NO.</th>
                        <th>Asset name tag</th>
                        <th>OS</th>
                        <th>Port Used</th>
                        <th>Unused default port</th>
                        <th>Check</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>CBS#1</td>
                            <td>Windows 10</td>
                            <td>80, 443, 3389</td>
                            <td>21, 161, 514</td>
                            <td><i class="xi-radiobox-blank"></i></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>CBS#2</td>
                            <td>Windows 10</td>
                            <td>80, 443, 3389</td>
                            <td>21, 161, 514</td>
                            <td><i class="xi-radiobox-blank"></i></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>CBS#3</td>
                            <td>Windows 10</td>
                            <td>80, 443, 3389</td>
                            <td>21, 161, 514</td>
                            <td><i class="xi-radiobox-blank"></i></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>CBS#4</td>
                            <td>Windows 10</td>
                            <td>80, 443, 3389</td>
                            <td>21, 161, 514</td>
                            <td><i class="xi-radiobox-blank"></i></td>
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
