<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel="stylesheet" href="assets/css/styles.css">

<div class="layout has-sidebar fixed-sidebar fixed-header">
  <aside id="sidebar" class="sidebar break-point-sm has-bg-image">
    <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
    <div class="image-wrapper">
      <img src="assets/images/sidebar-bg.jpg" alt="sidebar background" />
    </div>
    <div class="sidebar-layout">
      <div class="sidebar-header">
        <div class="pro-sidebar-logo">
          <div><img src="assets/img/logo.png" alt="" height="25" width="25"></div>
          <h5>Seminar Series</h5>
        </div>
      </div>
      <div class="sidebar-content">
        <nav class="menu open-current-submenu">
          <ul>
            <li class="menu-header" style="padding-top: 20px"><span> GENERAL </span></li>
            <li class="menu-item">
              <a href="#">
                <span class="menu-icon">
                  <i class="bi bi-list-stars"></i>
                </span>
                <span class="menu-title">List of Available Events</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="#">
                <span class="menu-icon">
                  <i class="bi bi-card-checklist"></i>
                </span>
                <span class="menu-title">List of Completed Events</span>
              </a>
            </li>
            <!-- <li class="menu-item sub-menu">
              <a href="#">
                <span class="menu-icon">
                  <i class="bi bi-card-checklist"></i>
                </span>
                <span class="menu-title">List of Completed Events</span>
              </a>
              <div class="sub-menu-list">
                <ul>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Evaluation Form</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Certificates</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="#">
                      <span class="menu-title">Attendance</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->
            <li class="menu-item">
              <a href="#">
                <span class="menu-icon">
                  <i class="bi bi-box-arrow-right"></i>
                </span>
                <span class="menu-title" data-bs-toggle="modal" data-bs-target="#logoutModal">Sign-Out</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- <div class="sidebar-footer">
        <div class="footer-box">
          <div>
            <img
              class="react-logo"
              src="https://user-images.githubusercontent.com/25878302/213938106-ca8f0485-3f30-4861-9188-2920ed7ab284.png"
              alt="react"
            />
          </div>
          <div style="padding: 0 10px">
            <span style="display: block; margin-bottom: 10px"
              >Pro sidebar is also available as a react package
            </span>
            <div style="margin-bottom: 15px">
              <img
                alt="preview badge"
                src="https://img.shields.io/github/stars/azouaoui-med/react-pro-sidebar?style=social"
              />
            </div>
            <div>
              <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank"
                >Check it out!</a
              >
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </aside>

  <div id="overlay" class="overlay"></div>



