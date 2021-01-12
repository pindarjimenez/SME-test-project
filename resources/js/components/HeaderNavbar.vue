<template>
  <div class="navbar">
    <v-sheet class="overflow-hidden navbar__container transparent">
      <v-container>
        <div class="d-flex justify-space-between align-center justify-lg-center">
          <div class="navbar-brand mr-lg-12">
            <v-img 
            src="/images/ibv.png"
            ></v-img>
          </div>
          <!-- burger menu -->
          <v-hover>
            <template v-slot:default="{ hover }">
              <v-btn
                @click.stop="drawer = !drawer"
                class="d-md-none burger"
                :elevation="hover ? 6 : 0"
              >
                <v-icon class="white--text">mdi-menu</v-icon>
              </v-btn>
            </template>
          </v-hover>
          <!-- /.end burger -->
          <!-- desktop links -->
          <v-list class="d-none d-md-flex ml-lg-16 text-uppercase font-weight-bold px-3 transparent">
            <v-list-item
              v-for="item in items"
              :key="item.title"
              link
            >
              <v-list-item-content>
                <v-list-item-title class="white--text">{{ item.title }}</v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-list>
          <!-- /.end desktop links -->
        </div>
      </v-container>
    </v-sheet>
    <!-- mobile links -->
    <v-navigation-drawer
      class="d-md-none"
      v-model="drawer"
      absolute
      temporary
    >
      <div class="navbar-brand pt-5 px-3">
        <v-img 
          src="/images/ibv.png"
          max-height="55"
          max-width="115"
        ></v-img>
      </div>
      <v-list class="text-uppercase font-weight-bold px-3">
        <v-list-item
          v-for="item in items"
          :key="item.title"
          link
        >
          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
    <!-- /.end mobile links -->
  </div>
</template>

<script>
  export default {
    data() {
      return {
        drawer: null,
        items: [
          { title: 'Home' },
          { title: 'Nosotros' },
          { title: 'Que Buscamos' },
          { title: 'Vender Tu Negocio' },
          { title: 'Hunters' },
          { title: 'Blog' },
          { title: 'Contacto' },
        ],
      }
    },
  }
</script>

<style lang="scss" scoped>
  .navbar {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    background: transparent;
    
    &__container {
      height: 100vh;
      position: relative;

      @media (min-width: 959px) {
        height: auto;
      }
    }
  }

  button.burger {
    height: auto !important;
    min-width: auto !important;
    padding: 0.5em 0.8em !important;
    background: transparent !important;
  }

  .v-list-item__title {
    @media (min-width: 959px) {
      font-size: 0.8rem;
    }

    @media (min-width: 1263px) {
      font-size: 1rem;
    }
  }
</style>