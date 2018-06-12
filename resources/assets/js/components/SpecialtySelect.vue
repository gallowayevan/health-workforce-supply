<template>        
        <div class="row">
            <div class="five columns">
                <label>Choose a profession</label>
                <!-- <select class="u-full-width" id="profession"> -->
                 <multiselect :value="value" :options="professions" track-by="code" label="profession" @input="changeSpecialty"></multiselect>
            </div>
            <transition>
            <div class="five columns" id="specialty-select-group" v-show="showSpecialtyBox">
                <label>and a specialty</label>
                <multiselect :value="value" :options="specialties" track-by="code" label="name" @input="changeSpecialty"></multiselect>
            </div>
            </transition>
        </div>
</template>

<script>
import Multiselect from 'vue-multiselect'
import {sortStrings} from '../utility'
import {csv} from 'd3-request'

export default {
  name: 'SpecialtySelect',
  components: {
      Multiselect
  },
  data () {
    return {
        professions: [],
        data: []
    }
  },
  computed: {
      value: function(){
          return this.$store.state.specialty;
      },
      specialties: function(){
          const that = this;
          return this.data.filter(d=>d.profession == that.value.profession);
                                // .sort(function(a,b){
                                //     return a.specialty == that.value.profession ? -1 : sortStrings(a,b)
                                // });
      },
      showSpecialtyBox: function(){
          return this.specialties.length > 1
      }
  },
  methods: {
      changeSpecialty: function(specialtyObject){
          this.$store.dispatch('changeSpecialty', specialtyObject)
      }
  },
  created() {
      const that = this;
      csv("data/specialties.csv", function(data){
        //Format data a bit
        that.data = data.map(function(d){
            return {
                    name: d.display_name.replace(/_/g, " "), 
                    code: d.id, 
                    profession: d.profession.replace(/_/g, " "), 
                    specialty: d.specialty.replace(/_/g, " ")
                    }});

        //Populate profession select
        that.professions = that.data.filter(d=>d.profession == d.specialty)
                                .sort(sortStrings);

        //Choose starting profession randomly
        const randomProfessionIndex = Math.round((that.professions.length - 1) * Math.random());
        that.changeSpecialty(that.professions[randomProfessionIndex]);

      })
  }
}
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<style scoped>

.v-enter-active, .v-leave-active {
  transition: opacity .5s;
}
.v-enter, .v-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}

div.row {
    height: 85px
}



</style>
  

