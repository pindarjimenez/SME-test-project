<template>
  <div>
    <section class="hero">
      <v-container>
        <h2 class="text-center white--text text-h3 mb-5 pt-md-16">¿Quieres conocer cuanto vale tu empresa?</h2>
        <p class="text-center white--text">Con algunos pocos datos sobre tu negocio, te diremos cual es su valuación y si estamos interesados en comprarla</p>
      </v-container>
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {

    }
  }
}
</script>

<style lang="scss" scoped>
  .hero {
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/images/hero.jpg');
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    width: 100%;
    min-height: 400px;
    display: flex;
    align-items: center;
    padding: 7em 0;
  }
</style>