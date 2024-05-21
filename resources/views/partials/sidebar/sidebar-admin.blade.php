<div class="sidebar">
      <div class="sticky-top bg-primary-custom" style="width: 270px; height: 100vh; min-height: 100vh;">
            <div class="p-3">
                  <div class="mb-3 d-flex gap-2 align-items-center" style="color: #e7fffd;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#ffffff">
                              <path d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-40-343 237-137-237-137-237 137 237 137ZM160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11L160-252Zm320-228Z" />
                        </svg>
                        <div>MyInventory</div>
                  </div>
                  <hr>
                  <div class="ps-4">
                        <div>
                              <a href="dashboard" class="">
                                    <div class="sidebar-link py-2 d-flex mb-2 gap-2 align-items-center {{ Request::is('admin/dashboard')? 'active' : '' }}">
                                          <i class="bi bi-grid-1x2-fill" style="font-size: 14px"></i>
                                          <div class="text-link-sidebar-admin">Dashboard</div>
                                    </div>
                              </a>
                        </div>
                  </div>
                  <hr>
                  <div style="font-size: 14px" class="">MENU</div>
                  <div class="ps-4 pt-3">
                        <div>
                              <a href="products" class="">
                                    <div class="sidebar-link py-2 d-flex gap-2 align-items-center mb-2">
                                          <i class="bi bi-circle-fill"></i>
                                          <div class="text-link-sidebar-admin">Products</div>
                                    </div>
                              </a>
                              <a href="purchase" class="">
                                    <div class="sidebar-link py-2 d-flex gap-2 align-items-center mb-2">
                                          <i class="bi bi-circle-fill"></i>
                                          <div class="text-link-sidebar-admin">Purchase</div>
                                    </div>
                              </a>
                              <a href="pemakaian" class="">
                                    <div class="sidebar-link py-2 d-flex gap-2 align-items-center mb-2">
                                          <i class="bi bi-circle-fill"></i>
                                          <div class="text-link-sidebar-admin">Usage</div>
                                    </div>
                              </a>
                        </div>
                  </div>
                  <hr>
                  <div style="font-size: 14px" class="">SETTINGS</div>
                  <div class="ps-4 pt-3">
                        <div>
                              <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="p-0 m-0 border-0 bg-transparent text-light">
                                          <div class="sidebar-link py-2 d-flex gap-2 align-items-center mb-2">
                                                <i class="bi bi-box-arrow-right" style="font-size: 16px"></i>
                                                <div class="text-link-sidebar-admin">Logout</div>
                                          </div>
                                    </button>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</div>