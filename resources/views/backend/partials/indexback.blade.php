@extends('backend.app-master')

@section('content')
    @include('backend.partials.nav')


    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            @include('backend.partials.side')
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Main Content untuk menaruh konten yang di buat -->
                    <div class="main-panel">
                        <div class="content-wrapper">
                          <div class="row">
                            <div class="col-lg-6 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Basic Table</h4>
                                  <p class="card-description">
                                    Add class <code>.table</code>
                                  </p>
                                  <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>Profile</th>
                                          <th>VatNo.</th>
                                          <th>Created</th>
                                          <th>Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Jacob</td>
                                          <td>53275531</td>
                                          <td>12 May 2017</td>
                                          <td><label class="badge badge-danger">Pending</label></td>
                                        </tr>
                                        <tr>
                                          <td>Messsy</td>
                                          <td>53275532</td>
                                          <td>15 May 2017</td>
                                          <td><label class="badge badge-warning">In progress</label></td>
                                        </tr>
                                        <tr>
                                          <td>John</td>
                                          <td>53275533</td>
                                          <td>14 May 2017</td>
                                          <td><label class="badge badge-info">Fixed</label></td>
                                        </tr>
                                        <tr>
                                          <td>Peter</td>
                                          <td>53275534</td>
                                          <td>16 May 2017</td>
                                          <td><label class="badge badge-success">Completed</label></td>
                                        </tr>
                                        <tr>
                                          <td>Dave</td>
                                          <td>53275535</td>
                                          <td>20 May 2017</td>
                                          <td><label class="badge badge-warning">In progress</label></td>
                                        </tr>
                                      </tbody>

                                      <tfoot>

                                      </tfoot>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                    @include('backend.partials.footer')
            </div>
        </div>
    </div>
@endsection
