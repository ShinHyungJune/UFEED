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
                        Access Control
                    </div>
                </div>
                <div class="subpage-table-btn-wrap col-group">
                    <button class="subpage-table-btn">
                        Account Manage
                    </button>
                </div>
            </div>
            <div class="subpage-table-container">
                <div class="subpage-table-wrap">
                    <table class="subpage-table">
                        <thead>
                        <th>
                            No.
                        </th>
                        <th>
                            Zone
                        </th>
                        <th>
                            장비명
                        </th>
                        <th>
                            계정
                        </th>
                        <th>
                            계정 사용자
                        </th>
                        <th>
                            권한
                        </th>
                        <th>
                            사용기간
                        </th>
                        <th>
                            사용여부
                        </th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td rowspan="8">
                                Control System Zone
                            </td>
                            <td rowspan="4">
                                FS11
                            </td>
                            <td>admin</td>
                            <td>홍길동</td>
                            <td>admin</td>
                            <td>1년마다 갱신</td>
                            <td><i class="xi-radiobox-blank"></i></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>admin</td>
                            <td>홍길동</td>
                            <td>admin</td>
                            <td>1년마다 갱신</td>
                            <td><i class="xi-radiobox-blank"></i></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>
</body>
</html>
