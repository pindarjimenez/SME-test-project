<template>
  <v-footer class="grey darken-4 py-16 grey--text text-lighten-1">
      <v-container>
        <v-row>
          <v-col
            cols="12"
            sm="3"
          >
            <div class="mb-5">
              <a href="#">
                <v-img 
                  src="/images/ibv.png"
                  max-height="55"
                  max-width="115"
                ></v-img>
              </a>
            </div>
            <p class="mr-md-10">Invertimos para generar valor a largo plazo, sin intención de vender.</p>
          </v-col>
          <v-col
            cols="12"
            sm="3"
          >
            <h4>Conócenos</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Que buscamos</a></li>
                <li><a href="#">Vender tu Negocio</a></li>
                <li><a href="#">Hunters</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
          </v-col>
          <v-col
            cols="12"
            sm="3"
          >
            <h4>Contáctanos</h4>
            <ul>
              <li><i class="fa fa-map-marker"></i> Centro de Madrid, España</li>
              <li><a href="mailto:hello@ibventur.es"><i class="fa fa-envelope"></i> hello@ibventur.es</a></li>
            </ul>
          </v-col>
          <v-col
            cols="12"
            sm="3"
          ></v-col>
        </v-row>
        <v-divider 
          class="my-8 my-md-14" 
          dark></v-divider>
        <p class="text-center">Copyright © 2021 By Iberian Ventures.</p>
      </v-container>
  </v-footer>
</template>

<style lang="scss" scoped>
  li a {
    color: #BDBDBD;
    text-decoration: none;

    &:hover {
      text-decoration: none;
      color: #BDBDBD;
    }
  }

  ul {
    padding: 0;
    list-style: none;
  }
</style>