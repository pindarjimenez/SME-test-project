<template>
  <div class="text-center">
    <v-dialog
      v-model="dialog"
      width="500"
    >
      <v-card>
        <v-card-title class="headline grey lighten-2">
          Successfully Submitted!
        </v-card-title>

        <v-card-text class="pt-5">
          {{ message }}
        </v-card-text>

        <v-divider></v-divider>

        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn
            color="primary"
            text
            @click="dialog = false"
          >
            Ok
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>

<script>
  export default {
    data () {
      return {
        dialog: false,
        message: null
      }
    },
    methods: {
      openModal(result) {
        console.log(result);
        if(result === 'GO') {
          this.message = `Thanks for sending information about your company. It seems to fit “Iberian Ventures” investment criteria – 
                            an associate in the team will reach out to you for next steps.`;
        } else {
          this.message = `Thanks for sending information about your company. Unfortunately, it seems that this company does not meet “Iberian 
                            Ventures” investment criteria. Regardless, we will take a second look in detail and send you an email.`;
        }

        this.dialog = true;
      }
    },
  }
</script>