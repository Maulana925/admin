<?php
$users = mysqli_query($koneksidb, "SELECT * FROM users");
?>

<div class="container mt-4">
    <a href="create.php" class="btn btn-primary mb-3">Tambah User</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($users)): ?>
            <tr>
                <td><?=$row['id'] ?></td>
                <td><?=htmlspecialchars($row['username'])?></td>
                <td><?=$row['role'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']?>"
                    class="btn btn-sm btn-warning">Edit</a> 

                    <a href="#" class="btn btm-sm btn-danger"
                    onclick="confrimDelete(<?=$row['id'] ?>)">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
        <tfoot>
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        </tfoot>
    </table>
    </div>

    <script>
        function confrimDelete(id){
            var baseUrl ="<?= base_url('dashboard/admin/user/delete.php')?>";

        Swal.fire({
            title: 'Yakin mau Hapus?',
            text: "Data tidak bisa dikembalikan",
            icon: 'warning',
            showCancelButton: true,
            confrimButtonColor: '#d33',
            cancleButtonColor: '#3085d6',
            confrimButtonText: 'Ya, hapus!',
            cancelButtonText:'Batal'
        }).then((result)=>{
            if (result.isConfirmed){
                window.location.href = baseUrl + '?id=' +id;
            }
        })
        }
    </script>