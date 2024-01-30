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
                        Identify
                    </div>
                    <i class="icon xi-angle-right"></i>
                    <div class="dashboard-menu-nav-item active">
                        Software
                    </div>
                </div>
                <div class="subpage-table-btn-wrap col-group">
                    <a href="identify_hardware_add.html" class="subpage-table-btn">
                        Add
                    </a>
                    <a href="identify_hardware_del.html" class="subpage-table-btn">
                        Del
                    </a>
                    <button class="subpage-table-btn">
                        Edit
                    </button>
                    <button class="subpage-table-btn">
                        Save
                    </button>
                    <button class="subpage-table-btn">
                        Export
                    </button>
                </div>
            </div>

            <div class="subpage-table-container">
                <div class="subpage-table-wrap">
                    <table class="subpage-table identify-table">
                        <thead>
                        <tr>
                            <th colspan="4">System Information</th>
                            <th colspan="5">Software components</th>
                        </tr>
                        <tr>
                            <th>System Category</th>
                            <th>System Name</th>
                            <th>Supplier</th>
                            <th>Model</th>
                            <th>OS Name / Ver.</th>
                            <th>Firmware Ver.</th>
                            <th>Application S/W Ver.</th>
                            <th>Patch Level</th>
                            <th>Purpose</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Navigation</td>
                            <td>Automatic Identification System</td>
                            <td>FURUNO</td>
                            <td>FA-170</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Navigation</td>
                            <td>Voyage Data Recorder</td>
                            <td>FURUNO</td>
                            <td>VR-7000</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Navigation</td>
                            <td>Navigation Assistance System</td>
                            <td>O.F.E</td>
                            <td>PENDING</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Navigation</td>
                            <td>Echo Sounder</td>
                            <td>FURUNO</td>
                            <td> FE-800</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Navigation</td>
                            <td>Doppler Speed Log</td>
                            <td>FURUNO</td>
                            <td>DS-85</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Navigation</td>
                            <td>Satellite Speed Log</td>
                            <td>FURUNO</td>
                            <td> GS-100</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Navigation</td>
                            <td>Marine Radar</td>
                            <td>FURUNO</td>
                            <td>FAR-2338S-NXT
                                FAR-2328
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Navigation</td>
                            <td>ECDIS (incl. Conning Display)</td>
                            <td>FURUNO</td>
                            <td>FMD-3300</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Communication</td>
                            <td>MF/HF/DSC Radio</td>
                            <td>FURUNO</td>
                            <td>RC-1800F2-2D</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Communication</td>
                            <td>NO.1 & 2 SATCOM-C (incl. SSAS & LRIT)</td>
                            <td>FURUNO</td>
                            <td>FELCOM 18</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Communication</td>
                            <td>DGPS Navigator</td>
                            <td>FURUNO</td>
                            <td> GP-170</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Communication</td>
                            <td>Auto Telephone Systems</td>
                            <td>MRC</td>
                            <td>MED-100</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Communication</td>
                            <td>Ship's Network System</td>
                            <td>O.F.E</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Communication</td>
                            <td>VSAT (incl. Smart Ship Solution System)</td>
                            <td>O.F.E</td>
                            <td>PENDING</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Control & Instrumentation</td>
                            <td>M/E Control System</td>
                            <td>HHI-EMD</td>
                            <td>MAN B&W 7G95ME-C10.5-LGIM</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Control & Instrumentation</td>
                            <td>Integrated Control and Monitoring System</td>
                            <td>HGS</td>
                            <td>HiCONiS</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Control & Instrumentation</td>
                            <td>DF G/E Control System</td>
                            <td>HHI-EMD</td>
                            <td>9H32DF-LM</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Control & Instrumentation</td>
                            <td>Valve Remote Control System</td>
                            <td>HOPPE</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Control & Instrumentation</td>
                            <td>Anti-Heeling System</td>
                            <td>HOPPE</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Control & Instrumentation</td>
                            <td>Shaft Power Meter</td>
                            <td>VAF</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Power</td>
                            <td>Shaft Generator System</td>
                            <td>ABB</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <tbody>
                        <tr>
                            <td>Power</td>
                            <td>Refeer Container Monitoring System</td>
                            <td>Emerson</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>

                        <!-- <tr>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                            <td>ddddddd</td>
                        </tr> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>
</body>
</html>
