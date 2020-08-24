<body class="bg-gradient-primary">

<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->

              <div class="p-4">
                <div class="text-center">
                  <div class="col-lg-6-center">
                  <h1 class="h1"><?=$button?></i></a></h1>
                </div>
                <hr>
                <form class="user"  method="post" action="index.php?c=<?=database::encryptor('encrypt', 'user')?>&a=<?=database::encryptor('encrypt', 'crud')?>">
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Nombre</label>
                    <input type="text" id="name" name="name" class="form-control"  value="<?=$name?>" placeholder="Nombre Del Usuario" > 
                  </div>
                  <div class="form-group col-md-6">
                    <label>Correo</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?=$email?>"  placeholder="Email Del Usuario" >
                  </div>
                <div class="form-group col-md-12">
                  <label>Tipo De Usuarios</label>
                  <select name="level" id="level" class="form-control">
                    <option <?=$select1?> value="1">Super Usuarios</option>
                    <option <?=$select2?> value="2">Administrador</option>        
                  </select>
                </div>
                </div>
                  <hr>
                    <div class="container text-center">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <button type="submit" class="btn btn-primary">
                        <?=$button?>
                    </button>
                    </div>
                </form>
            </div>