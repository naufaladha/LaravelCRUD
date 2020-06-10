
<?php $__env->startSection('judul', 'CRUD Laravel | Edit'); ?>
<?php $__env->startSection('konten'); ?>
    <h3>Edit Data Mahasiswa</h3>    
        <form action="/edit/id=<?php echo e($mahasiswa->id); ?>" method="post" class="p-5">    
        <?php echo csrf_field(); ?>    
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="nama" value="<?php echo e($mahasiswa->nama); ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="nim" value="<?php echo e($mahasiswa->nim); ?>" autocomplete="off">
                </div>
            </div>            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>   
                <div class="col-sm-10">         
                    <div class="form-check form-check-inline">       
                        <?php if($mahasiswa->jk == 'Laki-laki'): ?>                 
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="1" checked>
                        <?php else: ?>
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="1">
                        <?php endif; ?>
                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <?php if($mahasiswa->jk == 'Perempuan'): ?>                 
                        <input class="form-check-input"  type="radio" name="jk" id="inlineRadio2" value="2" checked>
                        <?php else: ?>
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="2">
                        <?php endif; ?>
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
            </div>                           
            <div class="form-group row dropdown mb-0">                          
                <label class="col-sm-2 col-form-label">dosen</label>                         
                <div class="col-sm-10">                
                    <?php if($mahasiswa->dosen->id): ?>
                    <a role="button" id="namadosen" class="custom-select col-md-6 text-dark" onclick="drop('selectdosen')"><?php echo e($mahasiswa->dosen->nama); ?></a>                                                               
                    <?php endif; ?>                
                </div>
            </div>
            <div class="form-group row">                
                <div id="selectdosen" class="dropdown-content col-md-5">                        
                    <select class="custom-select plaintext col" name="select" size="5">                            
                        <option class="dosen">--Pilih dosen--</option>
                        <?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($list->id == $mahasiswa->dosen_id): ?>
                                <option selected class="dosen" value="<?php echo e($list->nama); ?>"><?php echo e($list->nama); ?></option> 
                            <?php else: ?>
                            <option class="dosen" value="<?php echo e($list->nama); ?>"><?php echo e($list->nama); ?></option> 
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </select>
                </div> 
            </div>    
            <div class="form-group row">                                           
                <input type="submit" name="Submit" class="btn btn-light" value="Edit Data"></input>            
            </div>
        </form>
    </div>  
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\workhard\finalLab\projek_crud\resources\views/edit.blade.php ENDPATH**/ ?>