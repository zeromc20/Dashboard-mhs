<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="user-details">
        <div class="pull-left">
            <img src="{{asset("/images/users/avatar-1.jpg")}}" alt="" class="thumb-md rounded-circle">
        </div>
        <div class="user-info">
            <a href="/profile">Stanley Jones</a>
            <p class="text-muted m-0">Administrator</p>
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu" id="side-menu">
            <li class="menu-title">M E N U</li>
            <li>
                <a href="/home">
                    <i class="ti-home"></i><span> Dashboard </span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="ti-ticket"></i> <span>Kerja Praktek</span> <span class="menu-arrow"></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="/kerjapraktek">Daftar Kerja Praktek</a></li>
                    <li><a href="/bimbingan">Bimbingan</a></li>
                </ul>
            </li>

            @if(Auth::guard('dosen')->user()->pangkat === "koordinator")
                <li>
                    <a href="/koordinator">
                        <i class="ti-user"></i> <span> Koordinator </span>
                    </a>
                </li>
            @endif

            @if(Auth::guard('dosen')->user()->pangkat === "kajur")
                <li>
                    <a href="/kajur">
                        <i class="ti-user"></i> <span> Ketua Jurusan </span>
                    </a>
                </li>
            @endif

        </ul>

    </div>
    <!-- Sidebar -->
    <div class="clearfix"></div>

</div>