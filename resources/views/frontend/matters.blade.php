@extends('layouts.app')

@section('content')
<section class="matieres-container">
  <div class="row justify-content-center">
    <div id="accordion" class="col col-lg-8">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              MATHEMATIQUE
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            <div class="col-md-6 offset-md-4">
              <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#loginModal">
                Commencez dès maintenant !
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              ANGLAIS
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              HISTOIRE
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
<!-- <div class="row">
<div class="col-lg-4 col-sm-12">
    <div class="list-group z-depth-1" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home"
        role="tab" aria-controls="home">Mathématique</a>
    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile"
        role="tab" aria-controls="profile">Anglais</a>
    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages"
        role="tab" aria-controls="messages">Histoire</a>
    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings"
        role="tab" aria-controls="settings">Physique-chimie</a>
    </div>
</div>
<div class="content col-lg-8 col-sm-12 z-depth-1">
    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active " id="list-home" role="tabpanel" aria-labelledby="list-home-list">
    <h1>Mathématique</h1>
        Devenir bon en maths est l'objectif de beaucoup d'élèves.<br> Mais avant de commencer, mettons nous d'accord sur un point : tout le monde n'a pas les mêmes facilités avec les mathématiques. Il est indéniable que certaines personnes sont plus faites pour cette discipline que d'autres. Mais les aptitudes ne font pas tout, la méthode utilisée lorsque l'on fait des maths est très très importante.
        Donc, faute de pouvoir vous donner des facilités en maths, je vais essayer de vous apporter des méthodes, de vous montrer comment travailler les mathématiques.
        <div class="form-group row mb-4">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Inscrivez-vous') }}
                </button>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
    <h1>Anglais</h1>
        Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad
        laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim
        incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi
        culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa
        commodo veniam incididunt veniam ad.
    </div>
    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
    <h1>Histoire</h1>
        Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum
        voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat
        enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id
        Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt.
        Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.
    </div>
    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
    <h1>Phisyque-chimie</h1>
        Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud
        ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est
        cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure
        commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore
        dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.
    </div>
    </div>
</div>
</div>
</section>
@endsection