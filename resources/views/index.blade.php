@extends('layouts.main-layout')
@section('main')
<style>
      body {
            /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
            background-color: #EEF7FF;
      }

</style>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh; max-height: 100vh;">
      <div class="d-flex align-items-center justify-content-center">
            <div class="bg-white login-card d-flex" style="width: 800px; height: 500px; border-radius: 25px;">
                  <div class="h-100 w-100 login-card-left shadow overflow-hidden" style="background-image: linear-gradient(to top, #b224ef 0%, #7579ff 100%); border-radius: 25px;">
                        <div class="p-5 px-3">
                              <div class="fw-bold lh-sm" style="font-size: 36px; color: white;">Simplify management with our dashboard</div>
                              <div class="text-light mt-2" style="font-size: 14px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem veritatis eligendi omnis dignissimos laudantium reprehenderit suscipit quos odit unde laborum!</div>
                              {{-- <div class="d-flex justify-content-center mt-2">
                                    @include('svg.login-illustration2')
                                    <div class="mt-4" style="margin-right: -70px;">
                                          @include('svg.login-illustration')
                                    </div>
                              </div> --}}
                        </div>
                        <div class="d-flex justify-content-end mt-1" style="margin-right: -40px;">
                              @include('svg.login-illustration2')
                              @include('svg.login-illustration')
                        </div>
                  </div>
                  <div class="h-100 login-card-right w-100">
                        <div class="p-3 px-4">
                              <div class="d-flex align-items-center justify-content-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#000000">
                                          <path d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-40-343 237-137-237-137-237 137 237 137ZM160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11L160-252Zm320-228Z" />
                                    </svg>
                                    <div style="font-size: 14px">MyInventory</div>
                              </div>
                              <div class="text-center mt-4">
                                    <div class="fw-semibold" style="font-size: 20px">Welcome Back</div>
                                    <div class="fw-light text-secondary" style="font-size: 12px">Please login to your account</div>
                              </div>
                              <div class="mt-2">
                                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist" style="font-size: 14px;">
                                          <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Admin</button>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Operator</button>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Officer</button>
                                          </li>
                                    </ul>
                                    <div class="tab-content mt-3" id="myTabContent">
                                          {{-- FORM LOGIN ADMIN --}}
                                          <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                <div style="font-size: 14px">
                                                      <form action="{{ route('login-process-admin') }}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                            </div>
                                                            <div class="mb-3">
                                                                  <label for="exampleInputPassword1" class="form-label">Password</label>
                                                                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                                            </div>
                                                            <button href="admin/dashboard" type="submit" class="btn btn-login w-100 mt-3 border-0 text-light fw-semibold" style="background-image: linear-gradient(to right, #b8cbb8 0%, #b8cbb8 0%, #b465da 0%, #cf6cc9 33%, #ee609c 66%, #ee609c 100%);">Login as admin</button>
                                                      </form>
                                                </div>
                                          </div>
                                          {{-- FORM LOGIN OPERATOR --}}
                                          <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                                <div style="font-size: 14px">
                                                      <form action="{{ route('login-process-operator') }}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                            </div>
                                                            <div class="mb-3">
                                                                  <label for="exampleInputPassword1" class="form-label">Password</label>
                                                                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                                            </div>
                                                            <button type="submit" class="btn btn-login w-100 mt-3 border-0 text-light fw-semibold" style="background-image: linear-gradient(to right, #b8cbb8 0%, #b8cbb8 0%, #b465da 0%, #cf6cc9 33%, #ee609c 66%, #ee609c 100%);">Login as operator</button>
                                                      </form>
                                                </div>
                                          </div>
                                          {{-- FORM LOGIN OFFICER --}}
                                          <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                                <div style="font-size: 14px">
                                                      <form action="{{ route('login-process-officer') }}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                            </div>
                                                            <div class="mb-3">
                                                                  <label for="exampleInputPassword1" class="form-label">Password</label>
                                                                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                                            </div>
                                                            <button type="submit" class="btn btn-login w-100 mt-3 border-0 text-light fw-semibold" style="background-image: linear-gradient(to right, #b8cbb8 0%, #b8cbb8 0%, #b465da 0%, #cf6cc9 33%, #ee609c 66%, #ee609c 100%);">Login as officer</button>
                                                      </form>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</body>
@endsection
