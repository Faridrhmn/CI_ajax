<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
  </head>
  <body>
    <section>
      <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
          <div class="col-8 col-sm-5 m-auto">
            <div class="card border-0 shadow bg-light">
              <div class="card-body">
              <h5 class="card-title text-center">Daftar Akun</h5>
                <form action="">
                  <input type="text" id="Username" class="form-control my-4 py-2" placeholder="Username" />
                  <input type="password" id="Password" class="form-control my-4 py-2" placeholder="Password" />
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
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
  <script>
      $(document).on('click', '#keHalamanLogin', function(){
        $('body').load('index.php/login');
      });

      $(document).on('click', '#daftar-akun', function(){
        tambahAkun();
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
                alert("berhasil!");
                $('body').load('index.php/login');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                console.log("ini error");
            }  
        });
      }
  </script>
</html>
