<script setup>
import NavLink from '@/Components/NavLink.vue';
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
</script>


<template>
  <div class="wrapper">
    <div class="navigation">
      <div class="nav-bar">
        <a href="Index.vue" class="logo">
          <h1 class="MainTitle">Resepku</h1>
        </a>
        <ul class="nav-bar-item">
          <NavLink :href="route('Resepku.TulisResep')">
              TUlis Resep
          </NavLink>
          <li>Log Out</li>
        </ul>
      </div>
    </div>
    <div class="content">
      <!-- Your main content here -->
    </div>
    <footer>
      <h1 class="Copyright">Made by Ferdinand Aprillian Manurung</h1>
    </footer>
  </div>
</template>

<style>
.wrapper {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.navigation {
  background-color: #547794;
  color: white;
}

.nav-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
}

.logo {
  text-decoration: none;
  color: white;
}

.nav-bar-item {
  list-style: none;
  display: flex;
  gap: 10px;
}

.nav-bar-item li {
  cursor: pointer;
  color: #fff;
  font-family: Ubuntu;
  font-size: 18px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
}

h1.MainTitle {
  color: #f6f3ee;
  font-family: Ubuntu;
  font-size: 36px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
}

.content {
  flex-grow: 1;
}

footer {
  height: 58px;
  flex-shrink: 0;
  background: #c4c4c4;
  display: flex;
  justify-content: center;
  align-items: center;
}

h1.Copyright {
  color: #000;
  font-family: Ubuntu;
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  text-align: center;
}
</style>
