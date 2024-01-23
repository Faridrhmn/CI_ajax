<!DOCTYPE html>
<html lang="en">
  <body>
    <div id="isi">
      <section>
        <div class="container position-absolute top-50 start-50 translate-middle">
          <div class="row">
            <div class="col-8 col-sm-5 m-auto">
              <div class="card border-0 shadow bg-light">
                <div class="card-body">
                <h5 class="card-title text-center">Daftar Akun</h5>
                  <form action="">
                    <input type="text" id="Username" class="form-control my-4 py-2" placeholder="Username" autocomplete="off"/>
                    <input type="password" id="Password" class="form-control my-4 py-2" placeholder="Password" autocomplete="off"/>
                    <div class="text-center mt-3">
                      <button class="btn btn-primary" id="daftar-akun">Daftar</button>
                      <a href="#" class="nav-link" id="keHalamanLogin">Sudah Punya Akun?</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
  <script>
    document.querySelector('#keHalamanLogin').addEventListener('click', function(e) {
      e.preventDefault();
      $.ajaxSetup({ cache: false });
      $('#isi').empty().load('index.php/login');
      console.log("pindah ke login");
    });

    document.querySelector('#daftar-akun').addEventListener('click', function(e) {
      e.preventDefault();
      if ($("#Username").val() == "" || $("#Password").val() == ""){
        alert("Username atau password tidak boleh kosong!");
      } else {
        tambahAkun();
      }
    });

    function tambahAkun(){
      let dataAkun = {
          "Username": $("#Username").val(),
          "Password" : $("#Password").val()
      }
      $.ajax({
          method: "POST",
          url: "http://localhost/CI_ajax/index.php/api/akun/tambahAkun/",
          dataType: "json",
          data: dataAkun,
          success: function (response) {
              console.log(response);
              alert("Akun berhasil dibuat!");
              $.ajaxSetup({ cache: false });
              $('body').empty().load('index.php/login');
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.log(textStatus, errorThrown);
              alert("Akun gagal dibuat!");
          }  
      });
    }
  </script>
</html>
