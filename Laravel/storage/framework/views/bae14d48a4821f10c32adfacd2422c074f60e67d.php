<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Belajar Laravel 9</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<main style="margin-top: 70px">
    <div class="container">
    <?php if(session('success')): ?>
        <div class="alert alert-success">
        <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-4 mb-2">
            <form action="" method="GET" roles="search">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" placeholder="Cari" value="<?php echo e(@$q); ?>">
                </div>
            </form>
        </div> 
        <div class="col-lg-8 text-end mb-2">
            <a href="<?php echo e(url('produk/create')); ?>" class="btn btn-primary">Tambah</a>
        </div>
        <div class="col-lg-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori Produk</th>
                        <th>Nama Produk</th>
                        <th>Stok</th>
                        <th>Harga Produk</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?> </td>
                <td>
                    <img src="<?php echo e($item->foto_produk); ?>" alt="foto" width="100px">
                <td><?php echo e($item->kategori_produk); ?> </td>
                <td><?php echo e($item->nama_produk); ?> </td>
                <td><?php echo e($item->stok); ?> </td>
                <td>Rp<?php echo e($item->harga_produk); ?> </td>
                <td>
                    <a href="<?php echo e(route ('produk.edit', $item->id)); ?>">Edit</a> |
                    <form action="<?php echo e(route ('produk.destroy', $item->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <input type="submit" value="Hapus"/>
                </form>
            </td>
        </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
                   
                </table>
<?php echo $result->withQueryString()->links('pagination::bootstrap-5'); ?>

            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\10519111\resources\views/produk/list.blade.php ENDPATH**/ ?>