<template>
  <div>
    <section class="assessement py-16">
      <div class="container">
        <h6 class="text-weight-bold text-h6">Si te estás planteado vender tu compañía, una de las preguntas fundamentales es <span class="red--text">“¿Cuánto vale mi empresa?”</span> - Es importante que tengas una idea de cual es el valor de tu negocio y qué elementos son relevantes.</h6>
        <h6 class="text-weight-bold text-h6 py-8">Con algunos pocos datos sobre tu negocio, nuestra herramienta te ayudará a determinar una valuación (es decir, cuantos € podrías recibir)</h6>
        <h6 class="text-weight-bold text-h6">Este formulario de valuación es útil para compañías con <span class="red--text">más de 1MM€ en ventas al año</span></h6>
        <!-- Form -->
        <v-form class="px-lg-16">
          <v-container>
            <v-row>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">Sector en el que opera tu empresa:</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-text-field 
                  label="Sector o industria"
                  solo
                ></v-text-field>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">Correo electrónico de contacto:</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-text-field 
                  label="Correo de contacto" 
                  solo
                ></v-text-field>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">Facturación media de los últimos 3 años (en €):</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-text-field 
                  label="¿Cúal fue la facturacion del último año?" 
                  solo
                ></v-text-field>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">Años consecutivos creciendo ingreso:</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-select
                  :items="solo"
                  label="Solo field"
                  solo
                ></v-select>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">EBITDA media de los últimos 3 años (en €):</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-text-field 
                  label="Ingreso neto antes de impuestos y depreciación" 
                  solo
                ></v-text-field>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">Resultado neto medio de los últimos 3 años (en €):</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-text-field 
                  label="Resultado neto del último año" 
                  solo
                ></v-text-field>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">Años consecutivos con resultado positivo:</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-select
                  :items="solo"
                  label="Solo field"
                  solo
                ></v-select>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">Deuda financiera neta total (en €):</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-text-field 
                  label="Deuda financiera neta total en Euros" 
                  solo
                ></v-text-field>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">Total activo inmovilizado (en €):</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-text-field 
                  label="Total activo inmovilizado en euros" 
                  solo
                ></v-text-field>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">¿Porcentaje de la empresa del mayor accionista?:</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-text-field 
                  label="Porcentaje de la empresa que tiene el mayor accionista" 
                  solo
                ></v-text-field>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">Porcentaje de facturación que viene del mayor cliente:</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-text-field 
                  label="Porcentaje facturación que representa el mayor cliente" 
                  solo
                ></v-text-field>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">¿Ha sido auditada la compañía alguna vez?:</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-select
                  :items="bool"
                  label="No"
                  solo
                ></v-select>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">¿Operaciones de compra o fusiones en los últimos 5 años?</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-select
                  :items="bool"
                  label="No"
                  solo
                ></v-select>
              </v-col>
              <v-col
                cols="12"
                md="6"
                class="d-flex align-center flex-wrap"
              >
                <label class="grey--text lighten-1">¿Se quiere vender más del 90% de la compañía?</label>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-select
                  :items="bool"
                  label="No"
                  solo
                ></v-select>
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
              </v-col>
              <v-col
                cols="12"
                md="6"
              >
                <v-btn 
                  depressed 
                  large
                  class="px-10"
                >
                  Enviar
                </v-btn>
              </v-col>
            </v-row>
          </v-container>
        </v-form>
        <!-- /.end form -->
      </div>
    </section>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        solo: [
          1,
          2,
          3,
          '>3'
        ],
        bool: [
          'No',
          'Si'
        ],
      }
    },
  }
</script>