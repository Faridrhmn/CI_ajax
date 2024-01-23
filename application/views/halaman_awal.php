<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="isi">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid mx-5">
                    <p class="navbar-brand mb-0">Halaman Admin</p>
                    <span class="navbar-text text-end">
                    <button id="logout" class="badge text-bg-warning p-2 mx-2 rounded-pill float-end" style="text-decoration: none;">Keluar</button>
                    </span>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <div class="row mt-4 mx-4">
                <div class="col">
                    <div class="col-10">
                        <table class="table col-9">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Buku</th>
                                </tr>
                            </thead>
                            <tbody id="listBuku">
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-primary float-end" id="button-tambah-buku">Tambah Buku</a>
                    </div>
                </div>
                <div class="col">
                    <div class="col-10">
                        <table class="table col-9">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Penerbit</th>
                                </tr>
                            </thead>
                            <tbody id="listPenerbit">
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-primary float-end" id="button-tambah-penerbit">Tambah Penerbit</a>
                    </div>
                </div>
            </div>
        </div>
        
            <!-- Modal View BUKU -->
            <div class="modal fade" id="modalTambahBuku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Tambah Buku</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formTambahBuku">
                                <input type="hidden" id="edit-id" name="id">
                                <div class="form-group mb-2">
                                    <label for="IDBuku">ID Buku</label>
                                    <input type="text" class="form-control" id="IDBuku" name="IDBuku">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="Kategori">Kategori</label>
                                    <input type="text" class="form-control" id="Kategori" name="Kategori">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="NamaBuku">Nama Buku</label>
                                    <input type="text" class="form-control" id="NamaBuku" name="NamaBuku">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="Harga">Harga</label>
                                    <input type="number" class="form-control" id="Harga" name="Harga">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="Stok">Stok</label>
                                    <input type="number" class="form-control" id="Stok" name="Stok">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="Penerbit">Penerbit</label>
                                    <input type="text" class="form-control" id="Penerbit" name="Penerbit">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id="tambahBuku">Tambahkan!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="modal fade" id="modalUpdateBuku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Update Buku</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formUpdateBuku">
                                <input type="hidden" id="edit-id" name="id">
                                <div class="form-group mb-2">
                                    <label for="edit-IDBuku">ID Buku</label>
                                    <input type="text" class="form-control" id="edit-IDBuku" name="IDBuku" readonly>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="edit-Kategori">Kategori</label>
                                    <input type="text" class="form-control" id="edit-Kategori" name="Kategori">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="edit-NamaBuku">Nama Buku</label>
                                    <input type="text" class="form-control" id="edit-NamaBuku" name="NamaBuku">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="edit-Harga">Harga</label>
                                    <input type="number" class="form-control" id="edit-Harga" name="Harga">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="edit-Stok">Stok</label>
                                    <input type="number" class="form-control" id="edit-Stok" name="Stok">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="edit-Penerbit">Penerbit</label>
                                    <input type="text" class="form-control" id="edit-Penerbit" name="Penerbit">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id="updateBukuNya">Simpan!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
        
            <!-- Modal View PENERBIT -->
            <div class="modal fade" id="modalTambahPenerbit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Tambah Penerbit</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formTambahPenerbit">
                                <input type="hidden" id="edit-id" name="id">
                                <div class="form-group mb-2">
                                    <label for="IDPenerbit">ID Penerbit</label>
                                    <input type="text" class="form-control" id="IDPenerbit" name="IDPenerbit">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="NamaPenerbit">Nama Penerbit</label>
                                    <input type="text" class="form-control" id="NamaPenerbit" name="NamaPenerbit">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" class="form-control" id="Alamat" name="Alamat">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="Kota">Kota</label>
                                    <input type="text" class="form-control" id="Kota" name="Kota">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="Telepon">Telepon</label>
                                    <input type="text" class="form-control" id="Telepon" name="Telepon">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id="tambahPenerbit">Tambahkan!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="modal fade" id="modalUpdatePenerbit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Tambah Penerbit</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formUpdatePenerbit">
                                <input type="hidden" id="edit-id" name="id">
                                <div class="form-group mb-2">
                                    <label for="edit-IDPenerbit">ID Penerbit</label>
                                    <input type="text" class="form-control" id="edit-IDPenerbit" name="edit-IDPenerbit" readonly>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="edit-NamaPenerbit">Nama Penerbit</label>
                                    <input type="text" class="form-control" id="edit-NamaPenerbit" name="edit-NamaPenerbit">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" class="form-control" id="edit-Alamat" name="edit-Alamat">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="Kota">Kota</label>
                                    <input type="text" class="form-control" id="edit-Kota" name="edit-Kota">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="Telepon">Telepon</label>
                                    <input type="text" class="form-control" id="edit-Telepon" name="edit-Telepon">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id="updatePenerbit">Simpan!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script>
    $(document).ready(function() {
        dataSemua();
    });

    // TAMBAH BUKU
    $(document).on('click', '#button-tambah-buku', function(){
        $('#modalTambahBuku').modal('show');
    });

    document.querySelector('#formTambahBuku').addEventListener('submit', function(e) {
        e.preventDefault();
        tambahBuku();
        $('#modalTambahBuku').modal('hide');
    });

    // TAMBAH PENERBIT
    document.querySelector('#button-tambah-penerbit').addEventListener('click', function(e) {
        e.preventDefault();          
        $('#modalTambahPenerbit').modal('show');
    });

    document.querySelector('#formTambahPenerbit').addEventListener('submit', function(e) {
        e.preventDefault();          
        tambahPenerbit();
        $('#modalTambahPenerbit').modal('hide');
    });
    
    // PINDAH HALAMAN
    document.querySelector('#logout').addEventListener('click', function(e) {
        e.preventDefault();          
        $('#isi').empty().load('index.php/login');
        console.log("Keluar!");
    });

    // FUNCTION TAMBAHAN
    function resetAll(){
        $('#listBuku').html("");
        $('#listPenerbit').html("");
        dataSemua();
    }

    // FUNCTION AMBIL DATA
    function dataSemua(){
        $.ajax({
            url: 'http://localhost/CI_ajax/index.php/api/perpus',
            method: 'GET',
            dataType: 'json',
            cache: false,
            success: function(data) {
                let buku = data.semua.buku;
                // console.log(buku);
                $.each(buku, function(index, buku) {
                    $('#listBuku').append(`
                        <tr>
                            <td>${index + 1}</td>
                            <td>${buku.NamaBuku}</td>
                            <td>
                                <button id="hapusBuku" class="badge text-bg-danger p-2 rounded-pill float-end" style="text-decoration: none;" data-id="${buku.IDBuku}">hapus</button>
                                <button id="editBuku" class="badge text-bg-warning p-2 mx-2 rounded-pill float-end" style="text-decoration: none;" data-id="${buku.IDBuku}">edit</button>
                                <!-- <button id="detailBuku" class="badge text-bg-success p-2 rounded-pill float-end" style="text-decoration: none;" data-id="${buku.IDBuku}">detail</button> --!>
                            </td>
                        </tr>
                    `);
                });

                let penerbit = data.semua.penerbit;
                // console.log(penerbit);
                $.each(penerbit, function(index, penerbit) {
                    $('#listPenerbit').append(`
                        <tr>
                            <td>${index + 1}</td>
                            <td>${penerbit.NamaPenerbit}</td>
                            <td>
                                <button id="hapusPenerbit" class="badge text-bg-danger p-2 rounded-pill float-end" style="text-decoration: none;" data-id="${penerbit.IDPenerbit}">hapus</button>
                                <button id="editPenerbit" class="badge text-bg-warning p-2 mx-2 rounded-pill float-end" style="text-decoration: none;" data-id="${penerbit.IDPenerbit}">edit</button>
                                <!-- <button id="detailPenerbit" class="badge text-bg-success p-2 rounded-pill float-end" style="text-decoration: none;" data-id="${penerbit.IDPenerbit}">detail</button> --!>
                            </td>
                        </tr>
                    `);
                });
            },
            error: function(error) {
                console.log('Gagal mengambil data:', error);
            }
        });
    }

    $('#listBuku').on('click', '#hapusBuku', function() {
        var bukuId = $(this).data('id');
        hapusBuku(bukuId);
        console.log('Delete button clicked for ID: ' + bukuId);
    });

    $('#listBuku').on('click', '#editBuku', function() {
        var bukuId = $(this).data('id');
        spesifikBuku(bukuId);
        $('#modalUpdateBuku').modal('show');
        console.log('update button clicked for ID: ' + bukuId);
    });

    document.querySelector('#formUpdateBuku').addEventListener('submit', function(e) {
        e.preventDefault();          
        updateBuku();
        $('#modalUpdateBuku').modal('hide');
    });

    $('#listPenerbit').on('click', '#hapusPenerbit', function() {
        var penerbitId = $(this).data('id');
        hapusPenerbit(penerbitId);
        console.log('Delete button clicked for ID: ' + penerbitId);
    });

    $('#listPenerbit').on('click', '#editPenerbit', function() {
        var penerbitId = $(this).data('id');
        spesifikPenerbit(penerbitId);
        $('#modalUpdatePenerbit').modal('show');
        console.log('update button clicked for ID: ' + penerbitId);
    });

    document.querySelector('#formUpdatePenerbit').addEventListener('submit', function(e) {
        e.preventDefault();          
        updatePenerbit();
        $('#modalUpdatePenerbit').modal('hide');
    });

    // FUNCTION TAMBAH BUKU
    function tambahBuku(){
        let dataBuku = {
            "IDBuku": $("#IDBuku").val(),
            "Kategori" : $("#Kategori").val(),
            "NamaBuku": $("#NamaBuku").val(),
            "Harga":$("#Harga").val(),
            "Stok":$("#Stok").val(),
            "Penerbit":$("#Penerbit").val()
        }
        
        $.ajax({
            method: "POST",
            url: "http://localhost/CI_ajax/index.php/api/perpus/tambahBuku/",
            dataType: "json",
            data: dataBuku,
            success: function (response) {
                console.log(response);
                resetAll();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                console.log("ini error");
            }  
        });
    }

    // FUNCTION HAPUS BUKU
    function hapusBuku(id){
        $.ajax({
            method: 'DELETE',
            url: 'http://localhost/CI_ajax/index.php/api/perpus/hapusBuku/'+ id,
            dataType: 'json',
            success: function (response) {
                console.log(response);
                console.log(id);
                resetAll();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                console.log("ini error");
            }  
        });
    }

    // FUNCTION UPDATE BUKU
    function spesifikBuku(id){
        $.ajax({
            method: 'GET',
            url: 'http://localhost/CI_ajax/index.php/api/perpus/spesifikBuku/'+ id,
            dataType: 'json',
            success: function (response) {
                console.log(response);
                $('#edit-IDBuku').val(id);
                $('#edit-Kategori').val(response.buku[0].Kategori);
                $('#edit-NamaBuku').val(response.buku[0].NamaBuku);
                $('#edit-Harga').val(response.buku[0].Harga);
                $('#edit-Stok').val(response.buku[0].Stok);
                $('#edit-Penerbit').val(response.buku[0].Penerbit);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // resetAll();
                console.log(textStatus, errorThrown);
                console.log("ini error");
            }  
        })
    }

    function updateBuku(){
        let id = $('#edit-IDBuku').val();
        let dataBuku = {
            "IDBuku":$('#edit-IDBuku').val(),
            "Kategori": $('#edit-Kategori').val(),
            "NamaBuku" : $('#edit-NamaBuku').val(),
            "Harga": $('#edit-Harga').val(),
            "Stok":$('#edit-Stok').val(),
            "Penerbit":$('#edit-Penerbit').val()
        }
        
        $.ajax({
            method: 'POST',
            url: 'http://localhost/CI_ajax/index.php/api/perpus/updateBuku/'+ id,
            dataType: "json",
            data: dataBuku,
            success: function (response) {
                console.log(response);
                resetAll();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                console.log("ini error");
            }  
        });
    }

    // TAMBAH PENERBIT
    function tambahPenerbit(){
        let dataPenerbit = {
            "IDPenerbit": $("#IDPenerbit").val(),
            "NamaPenerbit" : $("#NamaPenerbit").val(),
            "Alamat": $("#Alamat").val(),
            "Kota":$("#Kota").val(),
            "Telepon":$("#Telepon").val()
        }
        
        $.ajax({
            method: "POST",
            url: "http://localhost/CI_ajax/index.php/api/perpus/tambahPenerbit/",
            dataType: "json",
            data: dataPenerbit,
            success: function (response) {
                console.log(response);
                resetAll();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                console.log("ini error");
            }  
        });
    }

    // FUNCTION HAPUS PENERBIT
    function hapusPenerbit(id){
        $.ajax({
            method: 'DELETE',
            url: 'http://localhost/CI_ajax/index.php/api/perpus/hapusPenerbit/'+ id,
            dataType: 'json',
            success: function (response) {
                console.log(response);
                console.log(id);
                resetAll();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                console.log("ini error");
            }  
        });
    }

    // FUNCTION UPDATE PENERBIT
    function spesifikPenerbit(id){
        $.ajax({
            method: 'GET',
            url: 'http://localhost/CI_ajax/index.php/api/perpus/spesifikPenerbit/'+ id,
            dataType: 'json',
            success: function (response) {
                console.log(response);
                $('#edit-IDPenerbit').val(id);
                $('#edit-NamaPenerbit').val(response.penerbit[0].NamaPenerbit);
                $('#edit-Alamat').val(response.penerbit[0].Alamat);
                $('#edit-Kota').val(response.penerbit[0].Kota);
                $('#edit-Telepon').val(response.penerbit[0].Telepon);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // resetAll();
                console.log(textStatus, errorThrown);
                console.log("ini error");
            }  
        })
    }

    function updatePenerbit(){
        let id = $('#edit-IDPenerbit').val();
        let dataPenerbit = {
            "IDBuku":$('#edit-IDPenerbit').val(),
            "NamaPenerbit": $('#edit-NamaPenerbit').val(),
            "Alamat" : $('#edit-Alamat').val(),
            "Kota": $('#edit-Kota').val(),
            "Telepon":$('#edit-Telepon').val()
        }
        
        $.ajax({
            method: 'POST',
            url: 'http://localhost/CI_ajax/index.php/api/perpus/updatePenerbit/'+ id,
            dataType: "json",
            data: dataPenerbit,
            success: function (response) {
                console.log(response);
                resetAll();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // resetAll();
                console.log(textStatus, errorThrown);
                console.log("ini error");
            }  
        });
    }

</script>
</html>