<template>
  <div>
    <input type="file" @change="handleFileUpload" />
    <div v-if="dominantColor" :style="{ backgroundColor: dominantColor }">
      Dominant Color: {{ dominantColor }}
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dominantColor: null,
    };
  },
  methods: {
    handleFileUpload(event) {
      const file = event.target.files[0];
      const formData = new FormData();
      formData.append('image', file);

      axios.post('/upload-color', formData)
        .then(response => {
          this.dominantColor = response.data.dominantColor;
        })
        .catch(error => {
          console.error(error);
        });
    },
  },
};
</script>
