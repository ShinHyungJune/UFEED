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
                            <col width="10%">
                            <col width="10%">
                            <col width="10%">
                            <col width="50%">
                            <col width="20%">
                        </colgroup>
                        <thead>
                        <th>Entry Type</th>
                        <th>Source</th>
                        <th>Event ID</th>
                        <th>Message</th>
                        <th>Date Time</th>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td>{{ $item->entry_type }}</td>
                            <td>{{ $item->source }}</td>
                            <td>{{ $item->event_id }}</td>
                            <td>{{ $item->message }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                        @endforeach
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
</body>
</html>
