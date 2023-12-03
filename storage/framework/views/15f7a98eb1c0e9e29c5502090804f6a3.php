<?php $__env->startSection('title','Data Pegawai'); ?>


<?php $__env->startSection('konten'); ?>
    <h3>Data Pegawai</h3>


    <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

    <br/>
    <p>Cari Data Pegawai Berdasarkan Nama:</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control fluid" type="text" name="cari" placeholder="Cari Pegawai .." value="<?php echo e(old("cari", isset($cari) ? $cari : '')); ?>">
		<input class="btn btn-primary " type="submit" value="CARI">
	</form>
    <br/>

    <table class="table table-striped table-hover rounded">
        <tr class="bg-primary text-white row">
            <th class="col-2">Nama</th>
            <th class="col-2">Jabatan</th>
            <th class="col-1">Umur</th>
            <th class="col-4">Alamat</th>
            <th class="col-3">Opsi</th>
        </tr>
        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="row">
                <td class="col-2"><?php echo e($p->pegawai_nama); ?></td>
                <td class="col-2"><?php echo e($p->pegawai_jabatan); ?></td>
                <td class="col-1"><?php echo e($p->pegawai_umur); ?></td>
                <td class="col-4"><?php echo e($p->pegawai_alamat); ?></td>
                <td class="col-3">
                    <a href="/pegawai/view/<?php echo e($p->pegawai_id); ?>" class="btn btn-success">View</a>
                    <a href="/pegawai/edit/<?php echo e($p->pegawai_id); ?>" class="btn btn-warning">Edit</a>
                    |
                    <a href="/pegawai/hapus/<?php echo e($p->pegawai_id); ?> " class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo e($pegawai->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ARAYZI\OneDrive\Documents\Github\B5026221194A\resources\views/master.blade.php ENDPATH**/ ?>