<!DOCTYPE html>
<html>
<head>
	<title>TUGAS MKPL</title>
</head>
<body>
    <h1>Aplikasi ketersediaan buku perpustakaan</h1>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>Judul buku</th>
        <th>Pengarang</th>
        <th>Tahun terbit</th>
        <th>Penerbit</th>
        <th>Stok tersedia</th>
        <th>Action</th>
    </tr>
    <?php $__currentLoopData = $db_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $db): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
      <td><?php echo e($db->judul); ?></td>
      <td><?php echo e($db->pengarang); ?></td>
      <td><?php echo e($db->tahun); ?></td>
      <td><?php echo e($db->penerbit); ?></td>
      <td><?php echo e($db->stok); ?></td>
      <td><ul>
          <li><a href="/detail/<?php echo e($db->id); ?>"><button>update</button></a></li>
          <li><a href="/delete/<?php echo e($db->id); ?>"><button>delete</button></a></li>
          </ul>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<a href="create"><button>buat baru</button></a>

</body>
</html><?php /**PATH D:\learnLaravel\tugasmkpl\resources\views/welcome.blade.php ENDPATH**/ ?>