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
            <div class="subpage-table-container">
                <div class="subpage-table-wrap account-table-wrap">
                    <table class="log-table">
                        <colgroup>
                            <col width="140px">
                            <col width="calc( ( 100% - 304px ) / 2 )">
                            <col width="140px">
                        </colgroup>
                        <thead>
                        <th>
                            Device
                        </th>
                        <th>
                            Message
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Sensor
                        </th>
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
<td>${item.device.title}</td>
<td>${item.message}</td>
<td>${item.status}</td>
<td>${item.sensor}</td>
</tr>`);
                })
            }
        });
    }

    getHistories();
</script>
</body>
</html>
