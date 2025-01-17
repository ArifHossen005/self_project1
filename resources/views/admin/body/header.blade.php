<nav class="navbar">
  <a href="#" class="sidebar-toggler">
      <i data-feather="menu"></i>
  </a>
  <div class="navbar-content">
      <form class="search-form">
          <div class="input-group">
              <div class="input-group-text">
                  <i data-feather="search"></i>
              </div>
              <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
          </div>
      </form>
      <ul class="navbar-nav">

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i data-feather="grid"></i>
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                  <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                      <p class="mb-0 fw-bold">Web Apps</p>
                      <a href="javascript:;" class="text-muted">Edit</a>
                  </div>
                  <div class="row g-0 p-1">
                      <div class="col-3 text-center">
                          <a href="pages/apps/chat.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70">
                              <i data-feather="message-square" class="icon-lg mb-1"></i>
                              <p class="tx-12">Chat</p>
                          </a>
                      </div>
                      <div class="col-3 text-center">
                          <a href="pages/apps/calendar.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70">
                              <i data-feather="calendar" class="icon-lg mb-1"></i>
                              <p class="tx-12">Calendar</p>
                          </a>
                      </div>
                      <div class="col-3 text-center">
                          <a href="pages/email/inbox.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70">
                              <i data-feather="mail" class="icon-lg mb-1"></i>
                              <p class="tx-12">Email</p>
                          </a>
                      </div>
                      <div class="col-3 text-center">
                          <a href="pages/general/profile.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70">
                              <i data-feather="instagram" class="icon-lg mb-1"></i>
                              <p class="tx-12">Profile</p>
                          </a>
                      </div>
                  </div>
                  <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                      <a href="javascript:;">View all</a>
                  </div>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i data-feather="mail"></i>
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
                  <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                      <p>9 New Messages</p>
                      <a href="javascript:;" class="text-muted">Clear all</a>
                  </div>
                  <div class="p-1">
                      <!-- Individual message -->
                      <!-- Repeated message items go here -->
                  </div>
                  <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                      <a href="javascript:;">View all</a>
                  </div>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i data-feather="bell"></i>
                  <div class="indicator">
                      <div class="circle"></div>
                  </div>
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                  <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                      <p>6 New Notifications</p>
                      <a href="javascript:;" class="text-muted">Clear all</a>
                  </div>
                  <div class="p-1">
                      <!-- Individual notification -->
                      <!-- Repeated notification items go here -->
                  </div>
                  <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                      <a href="javascript:;">View all</a>
                  </div>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                  <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                      <div class="mb-3">
                          <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                      </div>
                      <div class="text-center">
                          <p class="tx-16 fw-bolder">Arif Hossen</p>
                          <p class="tx-12 text-muted">arifsohag2500@gmail.com</p>
                      </div>
                  </div>
                  <ul class="list-unstyled p-1">
                      <li class="dropdown-item py-2">
                          <a href="pages/general/profile.html" class="text-body ms-0">
                              <i class="me-2 icon-md" data-feather="user"></i>
                              <span>Profile</span>
                          </a>
                      </li>
                      <li class="dropdown-item py-2">
                          <a href="javascript:;" class="text-body ms-0">
                              <i class="me-2 icon-md" data-feather="edit"></i>
                              <span>Edit Profile</span>
                          </a>
                      </li>
                      <li class="dropdown-item py-2">
                          <a href="javascript:;" class="text-body ms-0">
                              <i class="me-2 icon-md" data-feather="repeat"></i>
                              <span>Switch User</span>
                          </a>
                      </li>
                      <li class="dropdown-item py-2">
                          <a href="{{ route('admin.logout') }}" class="text-body ms-0">
                              <i class="me-2 icon-md" data-feather="log-out"></i>
                              <span>Log Out</span>
                          </a>
                      </li>
                  </ul>
              </div>
          </li>
      </ul>
  </div>
</nav>
<!-- partial -->
