<template>
  <div id="app">
    <body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Header -->
      <header id="header">
        <div class="inner">

          <!-- Logo -->
          <a href="/" class="logo">
            <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Event_Sympa</span>
          </a>

          <!-- Nav -->
          <nav>
            <ul>
              <li><a href="/">Home</a></li>
            </ul>
          </nav>

        </div>
      </header>
      <router-view :key="$route.fullPath"/>
    </div>
    </body>
  </div>
</template>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}

.inner nav{
    background-color: #c9c9c9;
  }

</style>
