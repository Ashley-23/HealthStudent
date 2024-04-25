@extends('admin.default')

@section('content')

 

























































  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rendez-vous</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Prenoms</th>
                    <th>Ecole</th>
                    <th>Heure Début</th>
                    <th>Heure Fin</th>
                    <th>Durée</th>
                    <th>type rendez-vous</th>
                    <th>Action</th>
                  </tr>
                  </thead>


                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>oups</td>
                    <td>me
                      oho
                    </td>
                    <td>++++++++</td>
                    <td> 4</td>
                    <td> 4</td>
                    <td> 4</td>
                    <td>X</td>

                    <td>
                         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                              Accepter
                          </button>
                         
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                              Refuser
                        </button>
                        <br>
                        <br>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                            Reprogrammer
                        </button>
                    </td>

                    
                  
                </tr>

                  <tr>
                    <td>2</td>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>C</td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>5.5</td>
                    <td>5.5</td>
                    <td>A</td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>6</td>
                    <td>6</td>
                    <td>A</td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                    <td>A</td>
                  </tr>
                  
                  
                  
                  </tfoot>
                </table>
              </div>

                                    
                      <div class="modal fade" id="modal-success">
                        <div class="modal-dialog">
                          <div class="modal-content bg-success">
                            <div class="modal-header">
                              <h4 class="modal-title"> Acceptation </h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p> Confirmez-vous le rendez-vous avec X à XH le X... ? &hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fermer</button>
                              <button type="button" class="btn btn-outline-light">Confirmer</button>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->

                      <div class="modal fade" id="modal-danger">
                        <div class="modal-dialog">
                          <div class="modal-content bg-danger">
                            <div class="modal-header">
                              <h4 class="modal-title"> Refus </h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p> Confirmez-vous le refus du rendez-vous avec X à XH le X... ?  &hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fermer</button>
                              <button type="button" class="btn btn-outline-light">Confirmer</button>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->


                                      
                      <div class="modal fade" id="modal-info">
                        <div class="modal-dialog">
                          <div class="modal-content bg-info">
                            <div class="modal-header">
                              <h4 class="modal-title"> Reprogrammation </h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p> Heure de reprogrammation &hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fermer</button>
                              <button type="button" class="btn btn-outline-light">Confirmer</button>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->




            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->























































    @endsection