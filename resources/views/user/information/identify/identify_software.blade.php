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
                    <a href="{{ route('software.create') }}" class="subpage-table-btn">
                        Add
                    </a>
                    <form action="" id="delete">
                        @csrf
                        @method('DELETE')
                        <button class="subpage-table-btn" type="button" onclick="showModal()">
                            Delete
                        </button>
                    </form>
                    <button class="subpage-table-btn" id="modify">
                        Modify
                    </button>
                    <button class="subpage-table-btn">
                        Import
                    </button>
                    <button class="subpage-table-btn">
                        Export
                    </button>
                </div>
                <div class="subpage-table-wrap">
                    <table class="subpage-table identify-table">
                        <colgroup>
                            <col width="10%">
                            <col width="15%">
                            <col width="5%">
                            <col width="6%">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>System Category</th>
                            <th>System Name</th>
                            <th>Supplier</th>
                            <th>Model</th>
                            <th></th>
                            <th>OS Name / Ver.</th>
                            <th>Firmware Ver.</th>
                            <th>Application S/W Ver.</th>
                            <th>Patch Level</th>
                            <th>Purpose</th>
                        </tr>
                        </thead>
                        @foreach($softwares as $key => $software)
                            <tbody>
                            @foreach($software as $index => $value)
                                @if($index == 0)
                                    <tr>
                                        <td rowspan="{{ count($software) }}">{{ $key }}</td>
                                        <td rowspan="{{ count($software) }}">{{ $value->system->name }}</td>
                                        <td rowspan="{{ count($software) }}">{{ $value->system->supplier }}</td>
                                        <td rowspan="{{ count($software) }}">{{ $value->system->model ?: '-' }}</td>
                                        <td>
                                            <label for="{{ $value->id }}" class="check-label">
                                                <input type="checkbox" class="check-input" id="{{ $value->id }}">
                                                <div class="check-item">
                                                    <i class="xi-check"></i>
                                                </div>
                                            </label>
                                        </td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->firmware ?: '-' }}</td>
                                        <td>{{ $value->application ?: '-' }}</td>
                                        <td>{{ $value->patch_level ?: '-' }}</td>
                                        <td>{{ $value->purpose ?: '-' }}</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>
                                            <label for="{{ $value->id }}" class="check-label">
                                                <input type="checkbox" class="check-input" id="{{ $value->id }}">
                                                <div class="check-item">
                                                    <i class="xi-check"></i>
                                                </div>
                                            </label>
                                        </td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->firmware ?: '-' }}</td>
                                        <td>{{ $value->application ?: '-' }}</td>
                                        <td>{{ $value->patch_level ?: '-' }}</td>
                                        <td>{{ $value->purpose ?: '-' }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>
<!-- alert 팝업 -->
<div class="modal-container modal-alert" style="display: none;">
    <div class="modal-wrap modal-alert-wrap warning">

        <div class="modal-alert-txt-wrap">
            <div class="modal-alert-title-wrap row-group">
                <i class="xi-warning icon"></i>
                <p class="modal-alert-title">
                    Warning
                </p>
            </div>

            <p class="modal-alert-txt">
                If deleted, the data cannot be recovered. <br>
                Are you sure you want to delete?
            </p>
        </div>

        <div class="dashboard-form-btn-wrap col-group">
            <button class="dashboard-form-btn submit-btn" onclick="deleteUtility()">
                Delete
            </button>
            <button class="dashboard-form-btn cancel-btn" onclick="hideModal()">
                Cancel
            </button>
        </div>
    </div>
</div>
<script src="{{ asset('js/utility.js') }}"></script>
<script>
    document.getElementById('modify').addEventListener('click', function () {
        let checkedCheckbox = document.querySelector('.check-input:checked');
        if (checkedCheckbox) {
            window.location.href = `{{ route('software.edit', ':id') }}`.replace(':id', checkedCheckbox.id)
        }
    });
</script>
<script>
    function deleteUtility() {
        let deleteForm = document.getElementById('delete');
        let checkedCheckbox = document.querySelectorAll('.check-input:checked');
        let deleteId = Array.from(checkedCheckbox).map(checkbox => checkbox.id);

        deleteId.forEach(id => {
            let deleteInput = document.createElement('input');
            deleteInput.setAttribute('type', 'hidden');
            deleteInput.setAttribute('name', 'id[]');
            deleteInput.value = id;
            deleteForm.appendChild(deleteInput);
        })

        let formData = new FormData(deleteForm);
        fetchUtility("{{ route('software.destroy') }}", formData)
    }
</script>
</body>
</html>
