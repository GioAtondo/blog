<!-- resources/js/components/Header.vue -->
<template>
    <header>
        <div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <router-link to="/new-post" class="btn btn-primary btn-sm">New Post</router-link> <!-- Use router-link -->
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">Blog</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
        <router-link to="/" class="nav-item nav-link link-body-emphasis" exact-active-class="active">Home</router-link>
          <router-link to="/about" class="nav-item nav-link link-body-emphasis" exact-active-class="active">About</router-link>
          <router-link to="/contact" class="nav-item nav-link link-body-emphasis" exact-active-class="active">Contact</router-link>
    </nav>
  </div>
</div>
    </header>
  </template>
  
  <script>
  export default {
    name: 'Header',
  }
  </script>
  
  