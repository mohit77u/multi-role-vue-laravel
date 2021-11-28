<template>
  <div>
    <section class="top-bar">
      <div class="container-fluid">
        <div class="left-bar">
          <a href="#">(+91) 626-4865-655info@mxpertz.com</a> |
          <a href="#">info@mxpertz.com</a>
        </div>
        <div class="middle-bar">
          <p>
            Leading Software Development Company 2020 Published By
            <a href="" class="clutch"
              ><img src="/static/images/logo-clutch.png"
            /></a>
          </p>
        </div>
        <div class="right-bar">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-skype"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </section>

    <section
      :class="{ header: scrollPosition < 400, sticky: scrollPosition > 400 }">
      <nav class="navbar navbar-expand-md">
        <div class="container">
          <a class="navbar-brand" href="#"
            ><img src="/static/images/logo.png" alt="logo"
          /></a>
          <a
            data-bs-toggle="offcanvas"
            href="#offcanvasExample"
            aria-controls="offcanvasExample"
          >
            <button
              class="navbar-toggler"
              data-bs-toggle="collapse"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="toggle-btn top-nav-toggle"></span>
              <span class="toggle-btn middle-nav-toggle"></span>
              <span class="toggle-btn bottom-nav-toggle"></span>
            </button>
          </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <router-link class="nav-link active" aria-current="page" to="/"
                  >Home</router-link
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  About us
                  <i class="fas fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <router-link class="dropdown-item" to="/about"
                      >About Mxpertz</router-link
                    >
                  </li>
                  <li>
                    <router-link class="dropdown-item" to="/our-process"
                      >Our Process</router-link
                    >
                  </li>
                  <li>
                    <router-link class="dropdown-item" to="/work-model"
                      >Work Model's</router-link
                    >
                  </li>
                  <li>
                    <router-link class="dropdown-item" to="/faq"
                      >FAQ's</router-link
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Services
                  <i class="fas fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <router-link class="dropdown-item" to="/services"
                      >Our Services</router-link
                    >
                  </li>
                  <li>
                    <router-link class="dropdown-item" to="/technology-stack"
                      >Technology Stack</router-link
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" to="/portfolio">Portfolio</router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" to="/career">Careers</router-link>
              </li>
              <!-- <li class="nav-item" v-if="!loggedIn">
                <router-link class="nav-link" to="/register">Register</router-link>
              </li>
              <li class="nav-item" v-if="!loggedIn">
                <router-link class="nav-link" to="/login">Login</router-link>
              </li> -->
              <li class="nav-item" v-if="loggedIn">
                <a class="nav-link" href="#" @click="Logout">Log Out</a>
              </li>
              <li class="nav-item">
                <a class="letsbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Let's talk
                </a>
              </li>
            </ul>
          </div>

          <div
            class="offcanvas offcanvas-start"
            tabindex="1"
            id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                <img src="/static/images/logo.png" alt="logo" />
              </h5>
              <button
                type="button"
                class="btn-close text-reset"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <router-link class="nav-link active" aria-current="page" to="/"
                    >Home</router-link
                  >
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="/about"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    About us
                    <i class="fas fa-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                      <router-link class="dropdown-item" to="/about"
                        >About Mxpertz</router-link
                      >
                    </li>
                    <li>
                      <router-link class="dropdown-item" to="/our-process"
                        >Our Process</router-link
                      >
                    </li>
                    <li>
                      <router-link class="dropdown-item" to="/work-model"
                        >Work Model's</router-link
                      >
                    </li>
                    <li>
                      <router-link class="dropdown-item" to="/faq"
                        >FAQ's</router-link
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Services
                    <i class="fas fa-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                      <router-link class="dropdown-item" to="/services"
                        >Our Services</router-link
                      >
                    </li>
                    <li>
                      <router-link class="dropdown-item" to="/technology-stack"
                        >Technology Stack</router-link
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <router-link class="nav-link" to="/portfolio">Portfolio</router-link>
                </li>
                <li class="nav-item">
                  <router-link class="nav-link" to="/career">Careers</router-link>
                </li>
                <li class="nav-item" v-if="loggedIn">
                  <a class="nav-link" href="#" @click="Logout">Log Out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </section>

    
  </div>
</template>
<script>
export default {
  name: "Header",
  data() {
    return {
      scrollPosition: null,
    };
  },
  methods: {
    updateScroll() {
      this.scrollPosition = window.scrollY;
    },
    Logout(){
      this.$store.dispatch('Logout').then(()=>{
          this.$router.push('/login')
      })
    },
  },
  mounted() {
    window.addEventListener("scroll", this.updateScroll);
  },
  computed: {
    loggedIn(){
      return this.$store.getters.loggedIn
    },
  }
};
</script>
