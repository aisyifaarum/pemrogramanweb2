<?= $this->extend('admin/layout');?>

<?= $this->section('content') ?> 

<div class="content d-flex justify-content-center mt-5">
    <div>
        <h1 class="text-center">Data Pelanggan</h1>
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr class="table-info">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Syifa</td>
                    <td>Syifa_Chan</td>
                    <td>aisyifaarum0@gmail.com</td>
                    <td>082180304553</td>
                    <td>Jl. Isekai. 40</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Raja</td>
                    <td>Rajaa_we</td>
                    <td>King@yahoo.com</td>
                    <td>08198765432</td>
                    <td>Jl. Melati No. 45</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Neni</td>
                    <td>Neni_cyu</td>
                    <td>Andri@email.com</td>
                    <td>08134567890</td>
                    <td>Jl. Anggrek No. 67</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Azza</td>
                    <td>Azza_Dhe</td>
                    <td>Dhea@yahoo.com</td>
                    <td>08135569875</td>
                    <td>Jl. Ampera No. 99</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>