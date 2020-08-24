      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary" >Registro De Usuarios</h5>
              <a href="index.php?c=<?=database::encryptor('encrypt', 'user')?>&a=<?=database::encryptor('encrypt', 'edit')?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-user-plus"></i>
                    </span>
                    <span class="text">Crear Usuarios</span>
                  </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Rol</th>
                      <th>Activo</th>
                      <th>Ultima Session</th>
                      <th><i class="fa fa-cogs"></i></th>
                      <th><i class="fa fa-cogs"></i></th>
                      <th><i class="fa fa-cogs"></i></th>
                      <th><i class="fa fa-cogs"></i></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Rol</th>
                      <th>Activo</th>
                      <th>Ultima Session</th>
                      <th><i class="fa fa-cogs"></i></th>
                      <th><i class="fa fa-cogs"></i></th>
                      <th><i class="fa fa-cogs"></i></th>
                      <th><i class="fa fa-cogs"></i></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                  $num = 0;
                 foreach ($this->model->index() as $row):
                    $num++;
                      ?>
                    <tr>
                      <td><?=$row->id?></td>
                      <td><?=$row->name?></td>
                      <td><?=$row->email?></td>
                      <td><?=$row->level?></td>
                      <td><?=$row->active?></td>
                      <td><?=$row->lastAccess?></td>
                      <td>
                          <a href="index.php?c=<?=database::encryptor('encrypt', 'user')?>&a=<?=database::encryptor('encrypt', 'edit')?>&id=<?=$row->id?>" class="btn btn-success btn-circle .btn-sm">
                              <i class="fas fa-user-edit"></i>
                          </a>
                      </td>
                      <td>
                      <a href="index.php?c=<?=database::encryptor('encrypt', 'user')?>&a=<?=database::encryptor('encrypt', 'delete')?>&id=<?=$row->id?>" class="btn btn-danger btn-circle .btn-sm" data-toggle="modal" data-target="#logoutModal<?=$num?>">
                              <i class="fas fa-trash"></i>
                          </a>
                          <!-- Logout Modal-->
                          <div class="modal fade" id="logoutModal<?=$num?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title text-danger text-center" id="exampleModalLabel">
                                          <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;
                                            Eliminar Usuario?</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">Realmente desea eliminar el usuario?.</div>
                                      <div class="modal-footer">
                                          <button class="btn btn-success" type="button" data-dismiss="modal">
                                          <i class="">
                                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.854 4.854a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
                                          </svg>
                                          </i>&nbsp;&nbsp;
                                          Cancelar
                                          </button>
                                          <a class="btn btn-danger" href="index.php?c=<?=database::encryptor('encrypt', 'user')?>&a=<?=database::encryptor('encrypt', 'delete')?>&id=<?=$row->id?>">
                                          <i class="fa fa-trash"></i>&nbsp;&nbsp;
                                          Eliminar
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </td>
                      <td>
                        <a href="index.php?c=<?=database::encryptor('encrypt', 'user')?>>&a=<?=database::encryptor('encrypt', 'upload')?>&id=<?=database::encryptor('encrypt', $row->id)?>" class="btn btn-primary">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-upload" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                          <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                        </svg>
                        </a>        
                      </td>
                      <td>
                      <a href="index.php?c=<?=database::encryptor('encrypt', 'user')?>>&a=<?=database::encryptor('encrypt', 'viewDoc')?>&id=<?=database::encryptor('encrypt', $row->id)?>" class="btn btn-warning">
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                        <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                      </svg>
                      </td>
                    </tr>
                  </tbody>
                  <?php endforeach; ?>
            </table>
              </div>
            </div>
          </div>
          