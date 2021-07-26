<!-- Header -->
<?= $this->include('/flipbook-layout/flipbook-header'); ?>
<!-- End of Header -->

<!-- Navbar -->
<?= $this->include('/flipbook-layout/flipbook-navbar'); ?>
<!-- End of Navbar -->

<!-- Begin Page Content -->
<?= $this->renderSection('content'); ?>
<!-- End of Main Content -->
<!-- Pagination -->
<nav>
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
<!-- End Of Pagination -->
<!-- Footer -->
<?= $this->include('/flipbook-layout/flipbook-footer'); ?>
<!-- End of Footer -->