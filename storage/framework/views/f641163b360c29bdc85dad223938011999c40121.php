
<?php $__env->startSection('judul', 'CRUD Laravel | Beranda'); ?>
<?php $__env->startSection('konten'); ?>
    <div class="row mx-auto justify-content-between p-3">
        <div class="col-5 mx-auto">          
            <a href="/tambah" class="btn btn-block btn-light">
                Tambahkan Mahasiswa
            </a> 
        </div>               
    </div>    
<?php if($message = Session::get('message')): ?>
    <h1 class="text-center"><?php echo e($message); ?></h1>
<?php else: ?>
<table class="text-white" style="width:100%;">
        <tr>
        <th >No.</th>
        <th >Nama Mahasiswa</th>        
        <th >jenis Kelamin</th>
        <th >NIM</th>
        <th >Nama Dosen</th>
        <th colspan="2">Aksi</th>
    </tr>    
    <?php $i=1;?>    
    <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>          
    <tr >
        <td class="cntr"><?php echo $i;?></td>
        <td ><?php echo e($mhs->nama); ?></td>
        <td class="cntr"><?php echo e($mhs->jk); ?></td>        
        <td class="cntr"><?php echo e($mhs->nim); ?></td>
        <td ><?php echo e($mhs->dosen->nama); ?></td>
        <td class="cntr">
            <a class="edit" href="/edit/id=<?php echo e($mhs->id); ?>">
                <i class="fa fa-pencil-square" aria-hidden="true"></i>                            
            </a>
        </td>
        <td class="cntr">
            <a class="trash" href="/hapus/id=<?php echo e($mhs->id); ?>">
                <i class="fa fa-trash" aria-hidden="true"></i>                            
            </a>
        </td>     
    </tr>   
        <?php ++$i;?>         
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\workhard\finalLab\projek_crud\resources\views/home.blade.php ENDPATH**/ ?>