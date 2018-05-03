
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
      <h4>  </h4>
      
    <section class="content-header">
      <h1>
       Liste des hebergements
        <small>MBOAHOST</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li><a href="#">Liste des hebergements </a></li>
        <li class="active">liste</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Liste des hebergements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a class="btn btn-app bg-olive" href="<?= base_url()?>hebergement_web_pour_developpeur/add_host_view">
                <i class="fa fa-plus"></i> Ajouter
              </a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom</th>
                  <th>Capacité Disque</th>
                  <th>Prix</th>
                  <th>Stockage Email</th>
                  <th>Sous domaine</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php if ($liste != Null): $i = 0 ?>
                  <?php foreach ($liste as $agent => $value): ?>
                <tr>
                  <td><?php echo $liste[$i]->nom ;?></td>
                  <td><?php echo $liste[$i]->disque ;?></td>
                  <td><?php echo $liste[$i]->prix ;?></td>
                  <td><?php echo $liste[$i]->stockage_email ;?></td>
                  <td><?php echo $liste[$i]->sous_domaines ;?></td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" style="margin-right: 7px;"></i></button>
                  <button type="button" class="btn btn-default btn-sm "><i class="fa fa-edit" style="margin-right: 7px;"></i></button>
                  <button type="button" class="btn btn-default btn-sm "><i class="fa fa-eye" style="margin-right: 7px;"></i></button>
                  <button type="button" class="btn btn-success btn-sm "><i class="fa  fa-check-square" style="margin-right: 7px;"></i></button>
                </div>
              </td>
                </tr>
                <?php $i = $i +1 ?>
               <?php endforeach; ?>
             <?php endif; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nom(s)</th>
                  <th>Capacité Disque</th>
                  <th>Prix</th>
                  <th>Stockage Email</th>
                  <th>Sous domaine</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->