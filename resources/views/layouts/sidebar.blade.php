<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="/beranda" class="brand-link"> <!--begin::Brand Image--> <img src="../../dist/assets/img/gaiatera-logo-nocap.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">GaiaTera</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
            <nav class="mt-2"> <!--begin::Sidebar Menu-->
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                            <p>
                                Dashboard 
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('/pengguna')}}" class="nav-link active">
                                    <p>pengguna</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/kebun')}}" class="nav-link">
                                    <p>Kebun</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/petugas')}}" class="nav-link">
                                    <p>Petugas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/produksi')}}" class="nav-link">
                                    <p>Produksi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/distribusi')}}" class="nav-link">
                                    <p>Distribusi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/laporan')}}" class="nav-link">
                                    <p>Laporan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/pembayaran')}}" class="nav-link">
                                    <p>Pembayaran</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/kategori-panen')}}" class="nav-link">
                                    <p>Kategori Panen</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-arrow-in-right"></i>
                            <p>
                                Auth
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('/login')}}" class="nav-link">
                                    <p>Login</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('pengguna.create') }}" class="nav-link">
                                    <p>Register</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/logout')}}" class="nav-link">
                                    <p>logout</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a href="./docs/browser-support.html" class="nav-link"> <i class="nav-icon bi bi-browser-edge"></i>
                                <p>Browser Support</p>
                            </a> </li>
                        <li class="nav-item"> <a href="./docs/how-to-contribute.html" class="nav-link"> <i class="nav-icon bi bi-hand-thumbs-up-fill"></i>
                                <p>How To Contribute</p>
                            </a> </li>
                        <li class="nav-item"> <a href="./docs/faq.html" class="nav-link"> <i class="nav-icon bi bi-question-circle-fill"></i>
                                <p>FAQ</p>
                            </a> </li>
                        <li class="nav-item"> <a href="./docs/license.html" class="nav-link"> <i class="nav-icon bi bi-patch-check-fill"></i>
                                <p>License</p>
                            </a> </li>
                    </ul> <!--end::Sidebar Menu-->
            </nav>
        </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar--> <!--begin::App Main-->
