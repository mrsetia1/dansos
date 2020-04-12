<?php $__env->startSection('content'); ?>
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(site_url()); ?>">Home</a></li>
            <li class="breadcrumb-item active"><?php echo e($title); ?></li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <header>
            <h1 class="h3 display"><?php echo e($title); ?></h1>
        </header>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <h4>Data <?php echo e($title); ?></h4>
                            <?php if(get_flashdata('success')): ?>
                            <div class="success" data-message="<?=get_flashdata('success')?>"></div>
                            <?php else: ?> 
                            <div class="error" data-message="<?=get_flashdata('error')?>"></div>
                            <?php endif; ?>
                        </div>
                        <div class="pull-right">
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Keterangan</th>
                                        <th>Deskirpsi</th>
                                        <th>Nominal</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th><i class="fa fa-cogs"></i></th>
                                    </tr>
                                    <tbody>
                                        <?php $__currentLoopData = $catatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->index+1); ?></td>
                                                <td><?php echo e($title); ?></td>
                                                <td><?php echo e($data->deskripsi); ?></td>
                                                <td><?php echo e(rupiah($data->nominal)); ?></td>
                                                <td><div class="badge badge-info"><?php echo e($data->status); ?></td>
                                                <td><?php echo e(tglInd($data->created_at)); ?></td>
                                                <td>
                                                    <?php if($data->deskripsi != "Sisa saldo bulan lalu"): ?> 
                                                    <a  href="<?php echo e(site_url('catatan/edit/'.$data->catatan_id)); ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="<?php echo e(site_url('catatan/hapus/'.$data->catatan_id.'/'.$data->keterangan_id)); ?>" name="<?php echo e($title); ?>" class="btn btn-danger btn-xs btn-hapus"><i class="fa fa-trash-o"></i> Hapus</a>
                                                    <?php endif; ?>
                                                </td>
                                             </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Tambah <?php echo e($title); ?></h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <form action="<?php echo e(site_url('catatan/proses')); ?>" method="post" class="text-left form-validate">
                <div class="modal-body">
                    <div class="form-group-material">
                        <input id="desc" type="text" name="desc" required class="input-material">
                        <label for="desc" class="label-material">Deskirpsi</label>
                    </div>        
                    <div class="form-group-material">
                        <input id="nominal" type="number" name="nominal" required  class="input-material">
                        <label for="nominal" class="label-material">Nominal</label>
                    </div>                
                    <div class="form-group">
                        <label for="" class="">Status</label>
                        <div class="i-checks">
                            <input id="Ok" type="radio" value="Ok" name="status" class="form-control-custom radio-custom">
                            <label for="Ok">OK</label>
                            <input id="pending" type="radio" value="Pending" name="status" class="form-control-custom radio-custom">
                            <label for="pending">PENDING</label>
                            <input id="bad" type="radio" value="BAD" name="status" class="form-control-custom radio-custom">
                            <label for="bad">BAD</label>
                        </div>
                    </div>        
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                    <button type="submit" name="<?php echo e($title); ?>" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\ci_keuangan\application\views/catatan/index.blade.php */ ?>