<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="<?php echo e(asset('')); ?>logo_um.png" class="logo-icon" alt="logo icon">
        </div>
        <div class="mx-auto pt-2">
            <h4 class="logo-text">Menu</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="<?php echo e(url('dashboard')); ?>">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Pilihan Halaman</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Home</div>
            </a>
            <ul>
                <li> <a href="<?php echo e(route('akreditasi.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Akreditasi</a>
                </li>
                <li> <a href="<?php echo e(route('kapasitas.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Kapasitas</a>
                </li>
                <li> <a href="<?php echo e(route('jalurpendaftaran.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Jalur Pendaftaran</a>
                </li>
                <li> <a href="<?php echo e(route('profillulusan.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Profil Lulusan</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo e(url('slider')); ?>">
                <div class="parent-icon"><i class='lni lni-image'></i>
                </div>
                <div class="menu-title">Slider</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-pencil'></i>
                </div>
                <div class="menu-title">Alur Pendaftaran</div>
            </a>
            <ul>
                <li> <a href="<?php echo e(route('alurpendaftaran.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Sarjana/Pasca Sarjana</a>
                </li>
                
            </ul>
        </li>
        <li>
            <a href="<?php echo e(url('linkdaftar')); ?>">
                <div class="parent-icon"><i class='lni lni-link'></i>
                </div>
                <div class="menu-title">Link Pendaftaran</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('pascasarjana')); ?>">
                <div class="parent-icon"><i class='lni lni-graduation'></i>
                </div>
                <div class="menu-title">Pasca Sarjana</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-info-square'></i>
                </div>
                <div class="menu-title">Informasi</div>
            </a>
            <ul>
                <li> <a href="<?php echo e(route('biayapendaftaran.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Biaya Pendaftaran</a>
                </li>
            </ul>
            <ul>
                <li> <a href="<?php echo e(route('biayaperkuliahan.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Biaya Perkuliahan</a>
                </li>
            </ul>
            <ul>
                <li> <a href="<?php echo e(route('syaratpendaftaran.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Syarat Pendaftaran</a>
                </li>
            </ul>
            <ul>
                <li> <a href="<?php echo e(route('brosur.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Brosur</a>
                </li>
            </ul>
            <ul>
                <li> <a href="<?php echo e(route('panduanpendaftaran.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Panduan Pendaftaran</a>
                </li>
            </ul>
            <ul>
                <li> <a href="<?php echo e(route('hasilcbt.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Hasil CBT</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo e(route('fakultas.index')); ?>">
                <div class="parent-icon"><i class='lni lni-graduation'></i>
                </div>
                <div class="menu-title">Fakultas</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('prodi.index')); ?>">
                <div class="parent-icon"><i class='lni lni-list'></i>
                </div>
                <div class="menu-title">Program Studi</div>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('kontak.index')); ?>">
                <div class="parent-icon"><i class='lni lni-phone'></i>
                </div>
                <div class="menu-title">Kontak</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
<?php /**PATH C:\laragon\www\Folder_project\Laravel_project\homepageum\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>