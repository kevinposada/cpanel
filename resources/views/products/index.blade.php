@extends('layouts.main', ['activePage' => 'products', 'titlePage' => 'Productos'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          @foreach ($products as $product)
              <div class="col-md-3">
                <div class="card card-chart">
                  <div class="card-header card-header-tabs card-header-primary">
                    {{$product->title}}
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">{{$product->title}}</h4>
                    <p class="card-category">
                      {{-- <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> --}}
                      {{Str::limit($product->descripcion, 100)}}
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i> {{$product->price}} €
                    </div>
                  </div>
                </div>
              </div>
          @endforeach
        </div>




        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-tabs card-header-primary">
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <span class="nav-tabs-title">Modo:</span>
                    <ul class="nav nav-tabs" data-tabs="tabs">
                      <li class="nav-item">
                        <a class="nav-link active" href="#profile" data-toggle="tab">
                          <i class="material-icons">bug_report</i> Bugs
                          <div class="ripple-container"></div>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#messages" data-toggle="tab">
                          <i class="material-icons">code</i> Website
                          <div class="ripple-container"></div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="profile">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td>Sign contract for "What are conference organizers afraid of?"</td>
                          <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                          <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                          </td>
                          <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                  <span class="check"></span>
                                </span>
                              </label>
                            </div>
                          </td>
                          <td>Create 4 Invisible User Experiences you Never Knew About</td>
                          <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane" id="messages">
                    <div class="col-md-3">
                      <div class="card card-chart">
                        <div class="card-header card-header-tabs card-header-primary">
                          Titulo
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Titulo</h4>
                          <p class="card-category">
                            {{-- <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> --}}
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi ipsa dolorem perferendis vitae incidunt, doloribus beatae aliquid tempore sapiente quos? A expedita dignissimos quibusdam neque consequuntur, debitis earum repudiandae deserunt?
                          </p>
                        </div>
                        <div class="card-footer">
                          <div class="stats">
                            <i class="material-icons">access_time</i> 100 €
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




        <div class="card-footer mr-auto">
          {{ $products->links() }}
        </div>
      </div>
    </div>
@endsection