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
            <div class="subpage-table-container">
                <div class="dashboard-menu-wrap col-group">
                    <div class="dashboard-menu-nav col-group">
                        <div class="dashboard-menu-nav-item">
                            Main Menu
                        </div>
                        <i class="icon xi-angle-right"></i>
                        <div class="dashboard-menu-nav-item active">
                            Log
                        </div>
                    </div>
                    <!--                        <div class="dashboard-menu-group col-group">
                                                <div class="dashboard-menu-item">
                                                    Overview
                                                </div>
                                                <div class="dashboard-menu-item">
                                                    Daily
                                                </div>
                                                <div class="dashboard-menu-item">
                                                    Weekly
                                                </div>
                                                <div class="dashboard-menu-item">
                                                    Monthly
                                                </div>
                                                <div class="dashboard-menu-item">
                                                    Historic Data
                                                </div>
                                            </div>-->
                </div>

                <!--                    <div class="log-date-input-wrap col-group">
                                        <div class="log-date-input-group">
                                            <input type="text" class="log-date-input datepicker-start" placeholder="Start">
                                            <i class="xi-calendar icon"></i>
                                        </div>
                                        <div class="log-date-input-group">
                                            <input type="text" class="log-date-input datepicker-end" placeholder="End">
                                            <i class="xi-calendar icon"></i>
                                        </div>
                                    </div>-->

                <div class="subpage-table-wrap">
                    <table class="log-table">
                        <colgroup>
                            <col width="24px">
                        </colgroup>
                        <thead>
                        <th></th>
                        <th>
                            Date Time
                        </th>
                        <th>
                            Device
                        </th>
                        <th>
                            Message
                        </th>
                        <!--                                <th>
                                                            Object
                                                        </th>-->
                        <th>
                            Status
                        </th>
                        <!--                                <th>
                                                            message
                                                        </th>-->
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>

<!-- datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.datepicker-start').datepicker();
    $('.datepicker-end').datepicker();
</script>
<script>
    function getHistories() {
        axios.get(window.domain + "/api/histories", {
            params: {
                take: 200
            }
        }).then(response => {
            let realTimeNotifications = response.data.data.realTimeNotifications;

            // # Real-time notofication status ======
            if (realTimeNotifications.length > 0) {
                $(".log-table tbody").html("");

                realTimeNotifications.map(item => {
                    $(".log-table tbody").append(`<tr>
<td><div class="state state-bar ${item.status}"></div></td>
<td>${item.logged_at}</td>
<td>${item.device.title}</td>
<td>${item.device.status}</td>
<td>${item.message}</td>
</tr>`);
                })
            }
        });
    }

    getHistories();
</script>
</body>
</html>
