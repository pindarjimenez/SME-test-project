<template>
  <div>
    <v-overlay :value="overlay">
        <v-progress-circular indeterminate size="64"></v-progress-circular>
    </v-overlay>
    <section class="assessement py-16">
      <div class="container">
        <h6 class="text-weight-bold text-h6">Si te estás planteado vender tu compañía, una de las preguntas fundamentales es <span class="red--text">“¿Cuánto vale mi empresa?”</span> - Es importante que tengas una idea de cual es el valor de tu negocio y qué elementos son relevantes.</h6>
        <h6 class="text-weight-bold text-h6 py-8">Con algunos pocos datos sobre tu negocio, nuestra herramienta te ayudará a determinar una valuación (es decir, cuantos € podrías recibir)</h6>
        <h6 class="text-weight-bold text-h6">Este formulario de valuación es útil para compañías con <span class="red--text">más de 1MM€ en ventas al año</span></h6>
        <!-- Form -->
        <v-form id="form" ref="form" v-model="valid"  class="px-lg-16">
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
                  v-model="forms.sector"
                  v-validate="'required'"
                  :error-messages="errors.collect('sector')"
                  data-vv-name="sector"
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
                  v-model="forms.email"
                  v-validate="'required|email'"
                  :error-messages="errors.collect('email')"
                  data-vv-name="email"
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
                  v-model="forms.averageTurnover"
                  v-validate="'required'"
                  :error-messages="errors.collect('averageTurnover')"
                  data-vv-name="averageTurnover"
                  label="¿Cúal fue la facturacion del último año?" 
                  type="number"
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
                  v-model="forms.consecutiveGrowingIncome"
                  :items="solo"
                  item-text="name"
                  item-value="value"
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
                  v-model="forms.netIncome"
                  v-validate="'required'"
                  :error-messages="errors.collect('netIncome')"
                  data-vv-name="netIncome"
                  label="Ingreso neto antes de impuestos y depreciación" 
                  type="number"
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
                  v-model="forms.netResult"
                  v-validate="'required'"
                  :error-messages="errors.collect('netResult')"
                  data-vv-name="netResult"
                  label="Resultado neto del último año" 
                  type="number"
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
                  v-model="forms.consecutivePositiveResult"
                  :items="solo"
                  item-text="name"
                  item-value="value"
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
                  v-model="forms.netFinancialDebt"
                  v-validate="'required'"
                  :error-messages="errors.collect('netFinancialDebt')"
                  data-vv-name="netFinancialDebt"
                  label="Deuda financiera neta total en Euros" 
                  type="number"
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
                  v-model="forms.fixedAssets"
                  v-validate="'required'"
                  :error-messages="errors.collect('fixedAssets')"
                  data-vv-name="fixedAssets"
                  label="Total activo inmovilizado en euros" 
                  type="number"
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
                  v-model="forms.largestShareholderPercentage"
                  v-validate="'required'"
                  :error-messages="errors.collect('largestShareholderPercentage')"
                  data-vv-name="largestShareholderPercentage"
                  label="Porcentaje de la empresa que tiene el mayor accionista" 
                  type="number"
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
                  v-model="forms.largestCustomerBilling"
                  v-validate="'required'"
                  :error-messages="errors.collect('largestCustomerBilling')"
                  data-vv-name="largestCustomerBilling"
                  label="Porcentaje facturación que representa el mayor cliente" 
                  type="number"
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
                  v-model="forms.companyAudited"
                  :items="bool"
                  item-text="name"
                  item-value="value"
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
                  v-model="forms.operationMerger"
                  :items="bool"
                  item-text="name"
                  item-value="value"
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
                  v-model="forms.companySellingPercentage"
                  :items="bool"
                  item-text="name"
                  item-value="value"
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
                <v-btn depressed large class="px-10" @click="submitForm()">
                  Enviar
                </v-btn>
              </v-col>
            </v-row>
          </v-container>
        </v-form>
        <!-- /.end form -->
      </div>
    </section>
    <message-modal ref="messageModal"></message-modal>
  </div>
</template>

<script>
  import MessageModal from './MessageModal.vue';

  export default {
    components: {
      MessageModal
    },
    data() {
      return {
        forms: {
          sector: null,
          email: null,
          averageTurnover: null,
          consecutiveGrowingIncome: 0,
          netIncome: null,
          netResult: null,
          consecutivePositiveResult: 0,
          netFinancialDebt: null,
          fixedAssets: null,
          largestShareholderPercentage: null,
          largestCustomerBilling: null,
          companyAudited: 0,
          operationMerger: 0,
          companySellingPercentage: 0,
        },
        valid: false,
        overlay: false,
        solo: [
          { name: '0', value: 0 },
          { name: '1', value: 1 },
          { name: '2', value: 2 },
          { name: '3', value: 3 },
          { name: '>3', value: 4 },
        ],
        bool: [
          { name: 'No', value: 0 },
          { name: 'Si', value: 1 },
        ],
      }
    },
    methods: {
      submitForm() {
        this.$validator.validateAll().then((result) => {
          if (result) {
              this.overlay = true;
              axios.post('assessment', this.forms)
                  .then((res) => {
                      this.overlay = false;
                      this.$refs.messageModal.openModal(res.data);
                  })
                  .catch(error => {
                      let statusCode = error.response.status;
                      if (statusCode == 422) {
                          console.log(error.response.data.errors);
                      }
                      this.overlay = false;
                  });
            }
          });
        }
    },
  }
</script>