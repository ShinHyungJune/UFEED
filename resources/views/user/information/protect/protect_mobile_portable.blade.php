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
                        Mobile and Portable
                    </div>
                </div>
            </div>

            <div class="subpage-table-container">
                <div class="subpage-table-wrap">
                    <table class="report-table">
                        <thead>
                        <th>NO.</th>
                        <th>유형</th>
                        <th>모델명</th>
                        <th>사용자</th>
                        <th>용도</th>
                        <th>IP</th>
                        <th>MAC</th>
                        <th>비고</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="100">
                                <p class="null-txt">
                                    none
                                </p>
                            </td>
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
