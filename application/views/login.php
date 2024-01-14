<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  </head>
  <body>
    <section>
      <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
          <div class="col-8 col-sm-5 m-auto">
            <div class="card border-0 shadow bg-light">
              <div class="card-body">
              <h5 class="card-title text-center">Masuk Akun</h5>
                <form action="">
                  <input type="text" name="username" id="username" class="form-control my-4 py-2" placeholder="Username" />
                  <input type="password" name="password" id="password" class="form-control my-4 py-2" placeholder="Password" />
                  <div class="text-center mt-3">
                    <button class="btn btn-primary" id="masuk-akun">Masuk</button>
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
  </body>
  <script>
      $(document).on('click', '#keHalamanRegister', function(){
        $('body').load('index.php/register');
      });

      $(document).on('click', '#masuk-akun', function(){
        // console.log("masukkah");
        $('body').load('index.php/perpus');
        // masukAkun();
      });

      function masukAkun(){
        let user = $('#username').val();
        let pass = $('#password').val();
        let find = false;
        
        $.ajax({
            url: 'http://localhost/CI_ajax/index.php/api/akun/masukAkun',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                let akun = data.akun;
                $.each(akun, function(index, akun) {
                    if(user == akun.Username && pass == akun.Password){
                      find = true;
                    }
                });
                if (find == true){
                  $('body').load('index.php/perpus');
                  alert("success");
                } else {
                  alert("Fail");
                }
            },
            error: function(error) {
                console.log('Gagal mengambil data:', error);
            }
        });
      }
  </script>
</html>
