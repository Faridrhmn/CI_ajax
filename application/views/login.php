<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <div id="isi">
      <section>
        <div class="container position-absolute top-50 start-50 translate-middle">
          <div class="row">
            <div class="col-8 col-sm-5 m-auto">
              <div class="card border-0 shadow bg-light">
                <div class="card-body">
                <h5 class="card-title text-center">Masuk Akun</h5>
                  <form action="">
                    <input type="text" name="username" id="username" class="form-control my-4 py-2" placeholder="Username" autocomplete="off"/>
                    <input type="password" name="password" id="password" class="form-control my-4 py-2" placeholder="Password" autocomplete="off"/>
                    <div class="text-center mt-3">
                      <button class="btn btn-primary" id="masuk-akun" type="submit">Masuk</button>
                      <a href="#" class="nav-link" id="keHalamanRegister">Belum punya akun?</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </div>
  </body>
  <script>
    document.querySelector('#keHalamanRegister').addEventListener('click', function(e) {
      e.preventDefault();
      $.ajaxSetup({ cache: false });
      $('#isi').empty().load('index.php/register');
      console.log("pindah ke register");
    });

    document.querySelector('#masuk-akun').addEventListener('click', function(e) {
      e.preventDefault();
      $.ajaxSetup({ cache: false });
      if ($("#username").val() == "" || $("#password").val() == ""){
        alert("Username atau password tidak boleh kosong!");
      }
      else {
        masukAkun();
      }
    });

    // $('#masuk-akun').off('click');

    function masukAkun(){
      let user = $('#username').val();
      let pass = $('#password').val();
      let find = false;
      
      $.ajax({
          url: 'http://localhost/CI_ajax/index.php/api/akun/masukAkun',
          method: 'GET',
          dataType: 'json',
          cache: false,
          success: function(data) {
              let akun = data.akun;
              $.each(akun, function(index, akun) {
                  if(user == akun.Username && pass == akun.Password){
                    find = true;
                  }
              });
              if (find == true){
                $('#isi').empty().load('index.php/perpus');
                alert("Akun ditemukan!");
              } else {
                alert("AKun tidak ada!");
              }
          },
          error: function(error) {
              console.log('Gagal mengambil data:', error);
          }
      });
    }
  </script>
</html>
