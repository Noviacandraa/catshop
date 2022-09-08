<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories Entry</title>
 

     
        <div class="content">
          <h3>Form Pendaftaran Praktikum</h3>
          <div class="form-login">
            <form action="/transaction-proses" method="post">
              <label for="nama">nama</label>
              <input
                class="input"
                type="text"
                name="nama"
                id="nama"
                placeholder="nama"
              />

              <label for="Nim">nim</label>
              <input
                class="input"
                type="text"
                name="nim"
                id="nim"
                placeholder="nim"
              />
              <label for="tgl">Jenis kelamin</label>
              <input name="sex" type="radio" value="male"><br>
              <input name="sex" type="radio" value="female">

          

              <button type="submit" class="btn btn-simpan" name="simpan">
                Simpan
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
