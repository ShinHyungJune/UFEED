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
                <div class="subpage-table-btn-wrap col-group">
                    <button class="subpage-table-btn">
                        Add
                    </button>
                    <button class="subpage-table-btn">
                        Delete
                    </button>
                    <button class="subpage-table-btn">
                        Modify
                    </button>
                    <button class="subpage-table-btn">
                        Enable/Disable
                    </button>
                </div>
                <div class="subpage-table-wrap account-table-wrap">
                    <table>
                        <thead>
                        <tr>
                            <th>
                                <label for="check_all" class="check-label">
                                    <input type="checkbox" class="check-input" id="check_all">
                                    <div class="check-item col-group">
                                        <i class="xi-check"></i>
                                    </div>
                                </label>
                            </th>
                            <th>
                                <label for="sort_Enable" class="sort-item">
                                    Enable
                                    {{--                                    <input type="checkbox" id="sort_Enable">--}}
                                    {{--                                    <i class="xi-caret-down-min"></i>--}}
                                </label>
                            </th>
                            <th>
                                <label for="sort_No" class="sort-item">
                                    No.
                                    {{--                                    <input type="checkbox" id="sort_No">--}}
                                    {{--                                    <i class="xi-caret-down-min"></i>--}}
                                </label>
                            </th>
                            <th>
                                <label for="sort_PolicyID" class="sort-item">
                                    Policy ID
                                    {{--                                    <input type="checkbox" id="sort_PolicyID">--}}
                                    {{--                                    <i class="xi-caret-down-min"></i>--}}
                                </label>
                            </th>
                            <th>
                                <label for="sort_SourceIP" class="sort-item">
                                    Source IP
                                    {{--                                    <input type="checkbox" id="sort_SourceIP">--}}
                                    {{--                                    <i class="xi-caret-down-min"></i>--}}
                                </label>
                            </th>
                            <th>
                                <label for="sort_DestinationIP" class="sort-item">
                                    Destination IP
                                    {{--                                    <input type="checkbox" id="sort_DestinationIP">--}}
                                    {{--                                    <i class="xi-caret-down-min"></i>--}}
                                </label>
                            </th>
                            <th>
                                <label for="sort_Service" class="sort-item">
                                    Service
                                    {{--                                    <input type="checkbox" id="sort_Service">--}}
                                    {{--                                    <i class="xi-caret-down-min"></i>--}}
                                </label>
                            </th>
                            <th>
                                <label for="sort_Action" class="sort-item">
                                    Action
                                    {{--                                    <input type="checkbox" id="sort_Action">--}}
                                    {{--                                    <i class="xi-caret-down-min"></i>--}}
                                </label>
                            </th>
                            <th>
                                <label for="sort_Schedule" class="sort-item">
                                    Schedule
                                    {{--                                    <input type="checkbox" id="sort_Schedule">--}}
                                    {{--                                    <i class="xi-caret-down-min"></i>--}}
                                </label>
                            </th>
                            <th>
                                <label for="sort_Hits" class="sort-item">
                                    Hits(1/7/30)
                                    {{--                                    <input type="checkbox" id="sort_Hits">--}}
                                    {{--                                    <i class="xi-caret-down-min"></i>--}}
                                </label>
                            </th>
                            <th>
                                <label for="sort_Time" class="sort-item">
                                    Last Session Time
                                    {{--                                    <input type="checkbox" id="sort_Time">--}}
                                    {{--                                    <i class="xi-caret-down-min"></i>--}}
                                </label>
                            </th>
                            <th>
                                <label for="sort_Description" class="sort-item">
                                    Description
                                    {{--                                    <input type="checkbox" id="sort_Description">--}}
                                    {{--                                    <i class="xi-caret-down-min"></i>--}}
                                </label>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>
                                    <label for="{{ $item['index'] }}" class="check-label">
                                        <input type="checkbox" class="check-input" id="{{ $item['index'] }}">
                                        <div class="check-item col-group">
                                            <i class="xi-check"></i>
                                        </div>
                                    </label>
                                </td>
                                <td>
                                    {{ $item['enable'] == 1 ? 'Enable' : 'Disable' }}
                                </td>
                                <td>
                                    {{ $item['index'] }}
                                </td>
                                <td>
                                    {{ $item['rule_id'] }}
                                </td>
                                <td>
                                    {{ $item['source_ip_object_list'] }}
                                </td>
                                <td>
                                    {{ $item['destination_ip_object_list'] }}
                                </td>
                                <td>
                                    {{ $item['service_object'] }}
                                </td>
                                <td>
                                    {{ $item['action'] == 2 ? 'Allow' : 'Block' }}
                                </td>
                                <td>
                                    {{ $item['schedule_object'] }}
                                </td>
                                <td>
                                    {{ $item['hit_count_1'] }}/{{ $item['hit_count_7'] }}/{{ $item['hit_count_30'] }}
                                </td>
                                <td>
                                    @if($item['last_use_time_past'] != 0)
                                        {{ $item['last_use_time_past'] }}days ago
                                        ({{ \Carbon\Carbon::createFromTimestamp($item['last_use_time']) }})
                                    @endif
                                </td>
                                <td>
                                    {{ $item['description'] }}
                                </td>
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
</body>
</html>
