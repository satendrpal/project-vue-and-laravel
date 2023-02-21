<template>
    <div>
        <button v-on:click="onClick()">Show Notification</button>
    </div>
  </template>
   
  <script>
      export default {
      name: "App",
      data() {
          return {
          };
      },
      methods: {
        onClick(){
            this.$toasted.show("“I'm sick of following my dreams, man")
        }
      }    
      };
  </script>