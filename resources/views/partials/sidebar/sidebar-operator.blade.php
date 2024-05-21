<div>
      <div class="sidebar-operator sticky-top d-flex align-items-center justify-content-center" style="width: 150px; height: 100vh;">
            <div class="shadow sub-sidebar-operator d-flex py-3 px-1 align-items-center justify-content-center rounded-pill" style="background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 300px;">
                  <div class="vstack gap-2 d-flex justify-content-center align-items-center">
                        <a href="/operator/dashboard" class="link-underline link-underline-opacity-0">
                              <div class="d-flex gap-2 align-items-center justify-content-center link-sidebar-wrapp">
                                    <div class="overflow-hidden sidebar-link-operator d-flex rounded-circle align-items-center justify-content-center" style="width: 50px; height: 50px; color: white;">
                                          <i class="bi bi-grid-1x2" style="font-size: 18px"></i>
                                    </div>
                                    <div class="text-light d-none text-link-sidebar" style="font-size: 12px">DASHBOARD</div>
                              </div>
                        </a>
                        <a href="/operator/purchase" class="link-underline link-underline-opacity-0">
                              <div class="d-flex gap-2 align-items-center justify-content-center link-sidebar-wrapp">
                                    <div class="overflow-hidden sidebar-link-operator d-flex rounded-circle align-items-center justify-content-center" style="width: 50px; height: 50px; color: white;">
                                          <i class="bi bi-bag" style="font-size: 20px"></i>
                                    </div>
                                    <div class="text-light d-none text-link-sidebar" style="font-size: 12px">Purchase</div>
                              </div>
                        </a>
                        <a href="/operator/usage" class="link-underline link-underline-opacity-0">
                              <div class="d-flex gap-2 align-items-center justify-content-center link-sidebar-wrapp">
                                    <div class="overflow-hidden sidebar-link-operator d-flex rounded-circle align-items-center justify-content-center" style="width: 50px; height: 50px; color: white;">
                                          <i class="bi bi-box-arrow-up" style="font-size: 20px"></i>
                                    </div>
                                    <div class="text-light d-none text-link-sidebar" style="font-size: 12px">Usage</div>
                              </div>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                              @csrf
                              <button type="submit" class="link-underline link-underline-opacity-0 border-0 p-0 m-0 bg-transparent">
                                    <div class="d-flex gap-2 align-items-center justify-content-center link-sidebar-wrapp">
                                          <div class="overflow-hidden sidebar-link-operator d-flex rounded-circle align-items-center justify-content-center" style="width: 50px; height: 50px; color: white;">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#ffffff">
                                                      <path d="M216-144q-29.7 0-50.85-21.15Q144-186.3 144-216v-528q0-29.7 21.15-50.85Q186.3-816 216-816h264v72H216v528h264v72H216Zm432-168-51-51 81-81H384v-72h294l-81-81 51-51 168 168-168 168Z" /></svg>
                                          </div>
                                          <div class="text-light d-none text-link-sidebar" style="font-size: 12px">Logout</div>
                                    </div>
                              </button>
                        </form>
                  </div>
            </div>
      </div>
</div>
