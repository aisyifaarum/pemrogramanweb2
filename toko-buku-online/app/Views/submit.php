<?= $this->extend('layout');?>

<?= $this->section('main')?>
<div class="container p-5">
    <div class="alert alert-success">
        <strong>Success!</strong> Order Anda telah berhasil diproses.
        Silahkan Konfirmasi pembayaran Anda ke WhatsApp Admin
        <a href="https://wa.me/082180304553" class="btn btn-success">Hubungi</a> 
    </div>
</div>
<?= $this->endSection()?>