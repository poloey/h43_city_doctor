import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);
export const store = new Vuex.Store({
  state: {},
  getters: {
    labels(state) {
      return state.labels;
    }
  },
  mutations: {
    updateSelectedLabel (state, selectedLabel ) {
      return state.selectedLabel = selectedLabel;
    },
  }
});
